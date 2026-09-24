// Interaction check for the two-step lead form, the lead score and the mobile
// quote bar. Run against a local server: php -S 127.0.0.1:8080 router.php,
// then `node tests/lead-form.spec.mjs [base]`. Leads land in logs/leads.log
// (degraded mode) when config.php has no VenderCRM key.
import { chromium } from "playwright";

const base = process.argv[2] || "http://127.0.0.1:8080";
const browser = await chromium.launch();
const errors = [];
let failed = 0;
const check = (ok, msg) => { console.log((ok ? "  ok    " : "  FAIL  ") + msg); if (!ok) failed++; };

const page = await browser.newPage();
page.on("pageerror", (e) => errors.push(e.message));
await page.goto(base + "/servicios/paneles-solares/?utm_source=test&utm_campaign=spec");
const form = page.locator("form[data-lead-form]").first();
check(await form.locator('[data-step="2"]').isHidden(), "step 2 hidden until 'Siguiente'");
await form.locator('label[for$="-hoy"]').click();
await form.locator("select[name=inmueble]").selectOption("comercio");
await form.locator("select[name=ciudad]").selectOption("Luque");
await form.locator("[data-step-next]").click();
check(await form.locator('[data-step="2"]').isVisible(), "step 2 shown after 'Siguiente'");
await page.waitForTimeout(3100);            // the 3-second anti-bot floor
await form.locator("input[name=name]").fill("Prueba Spec");
await form.locator("input[name=phone]").fill("0981 123 456");
const [resp] = await Promise.all([
  page.waitForResponse((r) => r.url().endsWith("/enviar.php")),
  form.locator("[data-submit]").click(),
]);
const data = await resp.json();
check(data.ok && data.value_tier === "A", "lead accepted as tier A");
check(data.score >= 90, "score for urgent commercial solar lead: " + data.score);
check(await form.locator("[data-form-ok]").isVisible(), "thank-you shown");
const cookies = await page.context().cookies();
check(cookies.some((c) => c.name === "vc_attr" && decodeURIComponent(c.value).includes("spec")), "first-touch UTM cookie stored");

const mobile = await browser.newPage({ viewport: { width: 390, height: 800 } });
await mobile.goto(base + "/");
check(await mobile.locator(".quote-fab").isVisible(), "mobile quote bar visible");
check(await mobile.locator(".wa-fab").isVisible(), "mobile WhatsApp bar visible");
check((await mobile.locator(".wa-fab").getAttribute("href")).startsWith("https://wa.me/595995628862"), "WhatsApp number wired");

check(errors.length === 0, "no JS errors " + errors.join(" | "));
await browser.close();
process.exit(failed ? 1 : 0);
