import { chromium } from 'playwright';
import { execFileSync } from 'node:child_process';
import { resolve } from 'node:path';
import assert from 'node:assert/strict';
const base=process.argv[2] || 'http://127.0.0.1:8080';
const root=resolve(import.meta.dirname,'..');
const routes=execFileSync(process.env.PHP_BINARY || 'php',[resolve(root,'deploy/routes.php')],{encoding:'utf8'}).trim().split(/\r?\n/).map(x=>x.split('\t'));
let pages=0,links=0;
for(const [path,status] of routes) {
  if(status!=='200' || /robots|sitemap/.test(path))continue;
  const html=await (await fetch(base+path,{headers:{Connection:'close'}})).text();
  const matches=[...html.matchAll(/href="(https:\/\/wa\.me\/[^\"]+)"/g)];
  assert.ok(matches.length,path+' must have WhatsApp contact');pages++;
  for(const match of matches) {
    const url=new URL(match[1].replaceAll('&amp;','&'));
    assert.equal(url.pathname,'/595992279599');
    const text=url.searchParams.get('text');
    assert.ok(text && text.trim().length>40);
    assert.match(text,/Origen: electricidad\.com\.py/);
    assert.ok(text.includes('Enlace: https://electricidad.com.py'+path),path+' source');
    assert.match(text,/Página: .+/);links++;
  }
  assert.ok(!html.includes('595995628862'),path+' old number');
}
const browser=await chromium.launch();
try {
  for(const width of [1440,390,320]) {
    const page=await browser.newPage({viewport:{width,height:900}});
    await page.goto(base+'/servicios/tablero-electrico-disyuntores/');
    const trigger=page.locator('.wa-fab');
    await trigger.click();assert.equal(await trigger.getAttribute('aria-expanded'),'true');
    const current=page.locator('.wa-menu__option--current');
    const link=new URL(await current.getAttribute('href'));
    assert.match(link.searchParams.get('text'),/tablero eléctrico/);
    assert.equal(await current.evaluate(el=>document.activeElement===el),true);
    await page.keyboard.press('Escape');
    assert.equal(await trigger.getAttribute('aria-expanded'),'false');
    assert.equal(await trigger.evaluate(el=>document.activeElement===el),true);
    await page.close();
  }
  const nojs=await browser.newContext({javaScriptEnabled:false});
  const page=await nojs.newPage();await page.goto(base+'/herramientas/cuanto-solar-necesito/');
  const link=new URL(await page.locator('.wa-fab').getAttribute('href'));
  assert.match(link.searchParams.get('text'),/calculadora solar/);
  assert.match(link.searchParams.get('text'),/herramientas\/cuanto-solar-necesito/);
  const shares=await browser.newPage();let tools=0;
  for(const [path,status] of routes) {
    if(status!=='200'||!path.startsWith('/herramientas/')||path==='/herramientas/')continue;
    await shares.goto(base+path);
    await shares.evaluate(()=>window.ToolsShared.setShare(document.querySelector('[data-share]').parentElement,'Resultado sintético de prueba'));
    const share=new URL(await shares.locator('[data-share]').getAttribute('href'));
    assert.equal(share.pathname,'/');
    assert.ok(share.searchParams.get('text').includes('Origen: electricidad.com.py'));
    assert.ok(share.searchParams.get('text').includes('Enlace: https://electricidad.com.py'+path));
    assert.ok(share.searchParams.get('text').includes(await shares.title()));tools++;
  }
  assert.equal(tools,4);
  console.log(`PASS WhatsApp: ${links} links across ${pages} pages and ${tools} tool shares, approved recipient, site/page/topic context, 1440/390/320 menu keyboard and no-JS; no messages sent`);
} finally {await browser.close();}
