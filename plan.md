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
| Calculators | 3, tested (`tests/tools.spec.mjs`): solar kWp/paneles/techo/retorno, generador kVA/arranque/combustible, consumo por equipo. Results prefill the lead form and route solar/generator results as tier-A leads |
| Local SEO | 10 city pages `/electricista/<ciudad>/` + hub, 5 rubro pages `/segmentos/<rubro>/` |
| Content | 8 guides (HowTo JSON-LD), 8 blog articles, cómo cotizamos, privacidad, términos |
| Supply side | `/profesionales/` recruits electricians and energy suppliers (CRM source `profesionales`) |
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
| 2 | A WhatsApp Business number → `content/site.php` `whatsapp` + `phone` | **every CTA** falls back to /contacto/ without it; this is the single biggest conversion lever |
| 3 | VenderCRM tenant key (+ Resend key) → `config.php` on the server | leads otherwise only land in `logs/leads.log` |
| 4 | `./deploy/make-zip.sh` → upload to Hostinger `public_html/` (README "Deploy") → `./deploy/verify-live.sh https://electricidad.com.py` | — |
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

## 5. Next build work (backlog, by expected value)

1. Fill `docs/facts-to-verify.md` #1 (ANDE tariff) → calculators prefill the price per kWh.
2. Real reviews/testimonials in `content/site.php` once jobs are done (switches the band on).
3. Interior city pages: Ciudad del Este, Encarnación, Coronel Oviedo (solar + generators only).
4. Supplier comparison pages (generator brands, solar kits) once a supplier list exists.
5. A 4th calculator: cable section / breaker size (DIY traffic, tier C).
6. Monthly: one article per season trigger; refresh the price figures every 6 months.

## 6. Working on this repo

- Content is data: `content/*.php` (+ `content/services/`, `content/segmentos/`); route files
  are three lines. Key shapes in each file's header are the contract.
- Every service/tool needs a `content/lead-values.php` record; `./verify.sh` enforces it.
- Before every deploy: `./verify.sh`, `node deploy/minify-css.mjs`, `./deploy/make-zip.sh`,
  `./verify.sh --root dist/<zip-dir>`. Calculators: `php -S 127.0.0.1:8080 router.php` then
  `node tests/tools.spec.mjs`.
