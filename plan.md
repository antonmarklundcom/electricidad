# electricidad.com.py — plan v2 (2026-09-24)

Lead-gen site for electricians in Gran Asunción + quote requests for solar, generators, UPS,
batteries and EV chargers. Static HTML + PHP (`php-site-template`, market `py`), leads to
VenderCRM. v1 of this file was a 7-phase multi-session build plan; the whole build was done in
one session on 2026-09-24 (Opus director + parallel Sonnet writers), so the phase prompts were
retired. `docs/report.md` keeps the original market reasoning.

## 1. Status

**Built and verify-green; not yet live.** Blocked only on the human inputs in §3.

| Area | What exists |
|---|---|
| Services | 16 full pages: 10 `electricista`, 6 `energia` (content/services/*.php) |
| Calculators | 4, tested (`tests/tools.spec.mjs`): solar kWp/paneles/techo/retorno, generador kVA/arranque/combustible, consumo por equipo, UPS VA/batería. Results prefill the lead form and route solar/generator results as tier-A leads |
| Local SEO | 13 city pages `/electricista/<ciudad>/` (10 Gran Asunción + Ciudad del Este, Encarnación, Coronel Oviedo for energy projects) cross-linked + hub, 5 rubro pages, cities in the LocalBusiness `areaServed` JSON-LD |
| Content | 8 guides (HowTo JSON-LD), 8 blog articles, homepage FAQ (FAQPage JSON-LD), cómo cotizamos, privacidad, términos |
| Supply side | `/profesionales/` recruits electricians and energy suppliers (CRM source `profesionales`) |
| Lead quality | Two-step form (need, urgency, property, city → contact); every lead gets a 0–100 score (caliente/tibio/frío) in VenderCRM and the email subject; first-touch UTM/gclid cookie; bot floor (3 s, links) |
| Conversion | WhatsApp +595 995 628862 on every CTA; mobile sticky bar = WhatsApp + "Pedir presupuesto"; outage-season banner Sep–Mar → `/temporada-de-cortes/`; printable `/checklist-electrico/`; calculator results shareable by WhatsApp; solar calculator sizes batteries |
| More content | 3 comparison articles (on-grid/híbrido/off-grid, nafta/diésel, UPS/estabilizador/inversor); Service + WebApplication JSON-LD |
| Lead model | every page resolves a tier (A 3 M / B 800 k / C 200 k ₲ Ads proxies), WhatsApp prefill naming the service, next steps, CRM tag |
| Gates | `./verify.sh` PASS on repo and on `dist/` zip; ~65 URLs in sitemap |

## 2. Decisions (changed from v1 are marked ★)

1. Domain `electricidad.com.py`. ★ Brand name **"Electricidad PY"** (was "Electricidad Paraguay"):
   the 24-char suffix broke the 60-char `<title>` budget on every service page.
2. Stage 1 = electrician leads in Asunción + Central; stage 2 = energy-product quotes, built now.
   Never a shop.
3. ★ **Two-sided from day one.** v1 only captured demand; nobody pays for a lead until a
   supplier exists. `/profesionales/` captures the supply side (electricians, importers).
4. ★ **City pages added** (10). "electricista en <ciudad>" is the highest-intent local query and
   v1 had no page for it. Each page has its own copy (housing stock → typical problems), not a
   template swap.
5. ★ **Calculators never embed an ANDE tariff.** The price per kWh comes from the visitor's own
   bill (total ÷ kWh), so they cannot go stale when the pliego changes. Reference figures live
   in `market_table('energia')` with sources; open items in `docs/facts-to-verify.md`.
6. No invented facts: contact/address/stats/testimonials stay `null`/empty in
   `content/site.php` until confirmed; partials hide.
7. Promises the partner network must honour (they are on the site): presupuesto por WhatsApp
   antes de la visita, materiales y mano de obra por separado, garantía por escrito.
   `electricista-24-horas` is written as "urgencias", never as a 24 h guarantee.

## 3. Launch checklist (Anton) — in this order

| # | Step | Why it blocks |
|---|---|---|
| 1 | Register `electricidad.com.py` at nic.py (fallbacks in `docs/report.md` §4) | canonical URLs, JSON-LD |
| 2 | ✅ WhatsApp +595 995 628862 is set (also used as the phone). Install **WhatsApp Business** on it with a greeting message | — |
| 3 | VenderCRM tenant key (+ Resend key) → `config.php` on the server | leads otherwise only land in `logs/leads.log` |
| 4 | `./deploy/make-zip.sh` → upload to Hostinger `public_html/` (README "Deploy"), set `SITE_URL` = `https://electricidad.com.py` in `config.php`, turn on hPanel → SSL → **Force HTTPS** → `./deploy/verify-live.sh https://electricidad.com.py` | — |
| 5 | GA4 + Google Ads IDs → `config.php` | tier values only optimise bidding once these exist |
| 6 | Google Business Profile "Electricista" for Asunción (`gbp-optimizer` skill) | the map pack out-converts the site for "electricista cerca" |
| 7 | Search Console: submit `/sitemap.xml` | indexing |
| 8 | Imagery pass (`higgsfield-image-pipeline`) + a real `og-default.png` | optional; the site renders neutral panels |

## 4. How it makes money (order = speed to first cash)

1. **Sell electrician leads to 3–5 partner crews** (week 1–4). Recruit via `/profesionales/`,
   Facebook/WhatsApp groups of electricistas. Charge per delivered lead (tier C/B) or a % of
   the closed job; start with whichever the first partner accepts, and decide by lead quality
   after 30 days. Anton's own crew can take the overflow at full margin.
2. **Paid quotes for importers** (month 2+). Tier-A solar and generator leads (sized by the
   calculators, with the client's kWh or equipment list attached) are what Electropar,
   Comagro, Electroservis, Petersen and solar installers pay for. Pitch with 30 days of counts
   from VenderCRM tags `paneles-solares` / `generadores`.
3. **Google Ads** on "electricista + ciudad", "paneles solares precio", "generador para casa"
   in Gran Asunción, bidding on the tier values. Start only after #2–#5 of §3.
4. **Seasonality**: summer (Nov–Mar) = outages + AC load → push generators, UPS, tableros;
   winter = solar payback content. Pre-season WhatsApp broadcast to past leads.
5. Later: sponsored supplier listings, a matriculated-electrician directory (stage 3).

## 5. Top 20 improvements, most recommended first

1. **WhatsApp Business number + auto-reply** with the 3 questions (qué pasa, foto, ciudad) — every CTA depends on it.
2. **Google Business Profile** for Asunción, with photos of real jobs and a review request after every job.
3. **Recruit the first 3–5 partner electricians** and write the lead-fee agreement (per lead or % of job).
4. **Google Ads** on "electricista + ciudad" and "generador / paneles solares precio", bidding on tier values, from November (outage season).
5. **Real testimonials and job photos** in `content/site.php` (the band switches on by itself).
6. **Pitch importers** (solar, generators) with 30 days of tier-A lead counts; charge per qualified quote.
7. **Fill the ANDE tariff** (`docs/facts-to-verify.md` #1) so the calculators prefill ₲/kWh and show the bill without typing.
8. **Surplus-injection rules of Decreto 6034/2026** into the solar calculator's payback (#3) — the strongest solar sales argument.
9. **Lead-response SLA inside VenderCRM** (alert if a lead waits > 15 min) — speed decides who wins an emergency job.
10. **Pre-season WhatsApp broadcast** to past leads (generator/UPS check before summer).
11. **Imagery pass** + a real `og-default.png` (brand card for WhatsApp/Facebook shares).
12. **Search Console + monthly query review**: write a page for every query with impressions but no page.
13. **Facebook/Instagram Reels** from real jobs (`higgsfield-social-prompts`) pointing at the calculators.
14. **More interior cities** for energy projects: Pedro Juan Caballero, Villarrica, Concepción, the Chaco (off-grid solar).
15. **Brand comparison pages** (generators, inverters, solar kits) once a supplier list exists — high-intent traffic, sponsorable.
16. **Financing page** ("paneles solares en cuotas") with a partner bank/financiera — raises solar close rates.
17. **Maintenance plans** (tablero + generador + paneles, yearly) as recurring revenue from existing clients.
18. **Electrician directory** (stage 3): paid profiles for matriculated electricians by city.
19. **Blog cadence**: one seasonal article per month; refresh the price figures every 6 months.
20. **Guaraní/jopara microcopy** on WhatsApp prefills and hero lines, A/B-tested against Spanish.

## 6. Working on this repo

- Content is data: `content/*.php` (+ `content/services/`, `content/segmentos/`); route files
  are three lines. Key shapes in each file's header are the contract.
- Every service/tool needs a `content/lead-values.php` record; `./verify.sh` enforces it.
- Before every deploy: `./verify.sh`, `node deploy/minify-css.mjs`, `./deploy/make-zip.sh`,
  `./verify.sh --root dist/<zip-dir>`. Calculators: `php -S 127.0.0.1:8080 router.php` then
  `node tests/tools.spec.mjs`.
