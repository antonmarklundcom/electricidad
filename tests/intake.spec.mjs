// A synthetic CRM runs on loopback; no production recipient or real key is used.
import { mkdtemp, cp, writeFile, rm, readFile } from 'node:fs/promises';
import { tmpdir } from 'node:os';
import { join,resolve,sep } from 'node:path';
import { spawn } from 'node:child_process';
import { createServer } from 'node:http';
import assert from 'node:assert/strict';
const root=resolve(import.meta.dirname,'..');
const temp=await mkdtemp(join(tmpdir(),'electricidad-intake-'));
const php=process.env.PHP_BINARY || 'php';
const base='http://127.0.0.1:8876';
let child;let crmStatus=201;let received=[];
const crm=createServer(async(req,res)=>{
  let body='';for await(const chunk of req)body+=chunk;
  assert.equal(req.url,'/api/v1/leads');assert.equal(req.headers['x-api-key'],'synthetic-only');
  received.push(JSON.parse(body));res.writeHead(crmStatus,{'Content-Type':'application/json'});res.end(JSON.stringify({ok:crmStatus===201}));
});
const post=async(extra={},headers={})=>fetch(base+'/enviar.php',{method:'POST',headers:{Accept:'application/json',Origin:base,'Content-Type':'application/x-www-form-urlencoded',...headers},body:new URLSearchParams({name:'Synthetic fixture',phone:'0981000999',service:'paneles-solares',value_tier:'C',ciudad:'Luque',urgencia:'hoy',inmueble:'comercio',idempotency_key:'fixture-unique',...extra}),redirect:'manual'});
let checks=0;
try {
  await cp(root,temp,{recursive:true,filter:src=>!['.git','tests','dist','docs','prompts','logs','config.php'].includes(src.slice(root.length+1).split(sep)[0])});
  await writeFile(join(temp,'config.php'),"<?php return ['LEADS_ENABLED'=>'1','OPERATOR_NAME'=>'Synthetic test operator','VENDERCRM_URL'=>'http://127.0.0.1:8877','VENDERCRM_API_KEY'=>'synthetic-only'];");
  await new Promise(r=>crm.listen(8877,'127.0.0.1',r));
  child=spawn(php,['-S','127.0.0.1:8876','router.php'],{cwd:temp,stdio:'ignore',windowsHide:true});
  child.on('error',e=>{console.error(e);});
  for(let i=0;i<50;i++){try{if((await fetch(base+'/')).ok)break;}catch{}await new Promise(r=>setTimeout(r,100));}
  let response=await post({phone:'123'});assert.equal(response.status,422);assert.equal((await response.json()).error,'phone');checks+=2;
  response=await post({name:''});assert.equal((await response.json()).error,'name');checks++;
  response=await post({email:'invalid'});assert.equal((await response.json()).error,'email');checks++;
  response=await post({}, {Origin:'https://wrong.invalid'});assert.equal((await response.json()).error,'origin');checks++;
  response=await post({}, {Origin:'http://127.0.0.1:9999'});assert.equal((await response.json()).error,'origin');checks++;
  response=await post({website:'bot'});assert.equal((await response.json()).ok,true);assert.equal(received.length,0);checks+=2;
  response=await post();const data=await response.json();assert.equal(data.ok,true);assert.equal(data.value_tier,'A');assert.equal(data.score,95);assert.equal(received.length,1);assert.equal(received[0].fields.ciudad,'Luque');assert.equal(received[0].idempotency_key,'fixture-unique');checks+=6;
  crmStatus=500;response=await post({idempotency_key:'fixture-failure'});assert.equal(response.status,422);assert.equal((await response.json()).ok,false);checks+=2;
  response=await post({idempotency_key:'fixture-nojs'},{Accept:'text/html'});assert.equal(response.status,303);assert.match(response.headers.get('location'),/error=1/);checks+=2;
  crmStatus=201;response=await post({idempotency_key:'fixture-nojs-success'},{Accept:'text/html'});assert.equal(response.status,303);assert.match(response.headers.get('location'),/enviado=1&s=paneles-solares/);checks+=2;
  response=await post({idempotency_key:'fixture-rate-1'});assert.equal((await response.json()).ok,true);
  response=await post({idempotency_key:'fixture-rate-block'},{'X-Real-IP':'192.0.2.10','CF-Connecting-IP':'192.0.2.11'});assert.equal((await response.json()).error,'rate');checks+=2;
  assert.ok((await readFile(join(temp,'logs','leads.log'),'utf8')).includes('degraded:crm-500'));checks++;
  console.log('PASS intake: '+checks+' assertions; validation, origin, spam, server-resolved tier, CRM delivery/failure, no-JS, rate limit and private log');
} finally {
  if(child){child.kill();await new Promise(r=>child.once('exit',r));}
  await new Promise(r=>crm.close(r));
  // Remove only the exact fixture directory created by mkdtemp for this test.
  assert.ok(temp.startsWith(join(tmpdir(),'electricidad-intake-')));
  await rm(temp,{recursive:true,force:true});
}
