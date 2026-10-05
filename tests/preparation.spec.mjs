import { chromium } from 'playwright';
import assert from 'node:assert/strict';
const base=process.argv[2] || 'http://127.0.0.1:8086';
const browser=await chromium.launch();
let checks=0;
try {
  for(const width of [1440,390,320]) {
    const page=await browser.newPage({viewport:{width,height:900}});
    const errors=[]; page.on('pageerror',e=>errors.push(e.message));
    for(const path of ['/', '/servicios/tablero-electrico-disyuntores/', '/contacto/', '/herramientas/cuanto-solar-necesito/', '/servicios/paneles-solares-en-cuotas/']) {
      assert.equal((await page.goto(base+path)).status(),200);
      assert.equal(await page.locator('h1').count(),1);
      assert.match(await page.locator('meta[name=robots]').getAttribute('content'),/noindex/);
      assert.ok(await page.evaluate(()=>document.documentElement.scrollWidth<=document.documentElement.clientWidth),path+' overflow at '+width);
      assert.ok(await page.locator('a[href^="https://wa.me/595992279599"]').count()>0);
      const current=page.locator('.breadcrumbs [aria-current=page]');
      if(await current.count())assert.equal(await current.evaluate(el=>getComputedStyle(el).color),'rgb(22, 59, 50)');
      const secondary=page.locator('.page-hero .btn--secondary').first();
      if(await secondary.count())assert.equal(await secondary.evaluate(el=>getComputedStyle(el).color),'rgb(22, 59, 50)');
      checks+=5;
    }
    await page.goto(base+'/contacto/');
    const requests=[];page.on('request',r=>{if(r.method()==='POST')requests.push(r.url());});
    const form=page.locator('[data-prepare-form]').first();
    assert.equal(await form.locator('input[name=phone],input[name=name],input[name=email]').count(),0);
    await form.locator('select[name=need]').selectOption('tablero');
    await form.locator('[name=ciudad]').fill('Zona de prueba');
    await form.locator('[name=message]').fill('Caso sintético: consulta del tablero.');
    await form.locator('button[type=submit]').click();
    assert.match(await form.locator('[data-summary]').inputValue(),/sin enviar/);
    assert.match(await form.locator('[data-copy-status]').textContent(),/No se enviaron/);
    assert.equal(requests.length,0);
    if(width<900) {
      const button=page.locator('[data-nav-toggle]');
      await button.click();assert.equal(await button.getAttribute('aria-expanded'),'true');
      await page.keyboard.press('Escape');assert.equal(await button.getAttribute('aria-expanded'),'false');
      checks+=2;
    }
    await page.goto(base+'/');await page.keyboard.press('Tab');
    assert.equal(await page.evaluate(()=>document.activeElement.className),'skip-link');
    assert.equal(errors.length,0,errors.join('\n'));checks+=6;
    await page.close();
  }
  const request=await browser.newContext();
  const response=await request.request.post(base+'/enviar.php',{form:{name:'Synthetic',phone:'0981000999'},headers:{Accept:'application/json'}});
  assert.equal(response.status(),503);assert.equal((await response.json()).ok,false);checks+=2;
  const nojs=await browser.newContext({javaScriptEnabled:false});
  const page=await nojs.newPage();await page.goto(base+'/contacto/?enviado=1');
  assert.equal(await page.locator('.thanks').count(),0);
  assert.equal(await page.locator('[data-prepare-form]').count(),1);
  assert.ok(await page.locator('[data-prepare-form] [name=ciudad]').isDisabled());
  assert.ok(await page.locator('[data-prepare-form] button[type=submit]').isDisabled());checks+=4;
  console.log('PASS preparation: '+checks+' assertions; 1440/390/320, keyboard, navigation, no-JS and no transmission');
} finally {await browser.close();}
