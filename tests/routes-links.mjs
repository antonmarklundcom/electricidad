import { execFileSync } from 'node:child_process';
import { resolve } from 'node:path';
import assert from 'node:assert/strict';
const root=resolve(import.meta.dirname,'..');
const php=process.env.PHP_BINARY || 'php';
const base=process.argv[2] || 'http://127.0.0.1:8896';
const contract=execFileSync(php,[resolve(root,'deploy/routes.php')],{encoding:'utf8'}).trim().split(/\r?\n/).map(s=>s.split('\t'));
const targets=new Set();let pages=0;let links=0;
for(const [path,status] of contract) {
  const response=await fetch(base+path,{redirect:'manual',headers:{Connection:'close'}});assert.equal(response.status,+status,path);
  const html=await response.text();
  if(status!=='200'||/robots|sitemap/.test(path))continue;
  pages++;
  assert.match(html,/<link rel="canonical" href="http[^\"]+"/);
  assert.equal((html.match(/<h1(?:\s[^>]*)?>/g)||[]).length,1,path+' H1');
  assert.match(html,/name="robots" content="noindex, follow"/);
  for(const match of html.matchAll(/(?:href|src)="(\/[^"]*)"/g)) {
    const target=match[1].replaceAll('&amp;','&');
    if(!target.startsWith('//'))targets.add(target.split('#')[0]);
  }
  for(const match of html.matchAll(/<script type="application\/ld\+json">([\s\S]*?)<\/script>/g)) {
    const data=JSON.parse(match[1]);assert.notEqual(data['@type'],'Service');
    if(data['@id']?.endsWith('#organization')) {assert.deepEqual(data['@type'],['Organization']);assert.equal(data.areaServed,undefined);assert.equal(data.telephone,'+595 992 279599');}
  }
}
for(const target of targets){const response=await fetch(base+target,{redirect:'manual',headers:{Connection:'close'}});await response.arrayBuffer();assert.ok([200,301,303].includes(response.status),target+' '+response.status);links++;}
assert.equal((await (await fetch(base+'/sitemap.xml')).text()).includes('<loc>'),false);
assert.match(await (await fetch(base+'/robots.txt')).text(),/Disallow: \//);
console.log(`PASS ${contract.length} route statuses, ${pages} page H1/canonical/schema/robots checks, ${links} distinct internal links/assets; closed sitemap and robots consistent`);
