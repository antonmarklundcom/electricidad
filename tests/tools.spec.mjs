// Interaction check for the three energy calculators. Run against a local
// server: php -S 127.0.0.1:8080 router.php, then `node tools.spec.mjs [base]`.
import { chromium } from "playwright";

const base = process.argv[2] || "http://127.0.0.1:8080";
const browser = await chromium.launch();
const page = await browser.newPage();
const errors = [];
page.on("pageerror", (e) => errors.push(e.message));
let failed = 0;
const check = (ok, msg) => { console.log((ok ? "  ok    " : "  FAIL  ") + msg); if (!ok) failed++; };

await page.goto(base + "/herramientas/cuanto-solar-necesito/");
await page.fill("#solar-kwh", "650");
await page.fill("#solar-monto", "500000");
await page.fill("#solar-presupuesto", "30000000");
await page.click("#solar-form button[type=submit]");
const kwp = await page.textContent("#solar-kwp");
check(/kWp/.test(kwp) && !(await page.isHidden("#solar-result")), "solar: result shows " + kwp);
check(/años/.test(await page.textContent("#solar-retorno")), "solar: payback in years");
await page.click("#solar-use-result");
check((await page.inputValue("form[data-lead-form] textarea[name=message]")).includes("kWp"), "solar: result prefilled into form");
check((await page.inputValue('form[data-lead-form] input[name=service]')) === "paneles-solares", "solar: lead routed to paneles-solares");

await page.goto(base + "/herramientas/que-generador-necesito/");
await page.fill('.equipo-row[data-id="heladera"] [data-role=qty]', "1");
await page.fill('.equipo-row[data-id="aire12"] [data-role=qty]', "1");
await page.fill('.equipo-row[data-id="led"] [data-role=qty]', "10");
await page.click("#gen-form button[type=submit]");
const kva = await page.textContent("#gen-kva");
check(/kVA/.test(kva), "generador: " + kva);

await page.goto(base + "/herramientas/consumo-electrico/");
await page.fill('.equipo-row[data-id="aire12"] [data-role=qty]', "2");
await page.fill('.equipo-row[data-id="heladera"] [data-role=qty]', "1");
await page.fill("#consumo-precio", "700");
await page.click("#consumo-form button[type=submit]");
const total = await page.textContent("#consumo-total");
check(/kWh/.test(total) && /₲/.test(total), "consumo: " + total);

check(errors.length === 0, "no JS errors " + errors.join(" | "));
await browser.close();
process.exit(failed ? 1 : 0);
