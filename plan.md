# electricidad.com.py — build plan

Lead-gen site for electrical services in Gran Asunción, extended from day one to
energy products that are bought on a quote (solar kits, generators, UPS, EV chargers).
Static HTML + PHP from `antonmarklundcom/php-site-template`, Paraguay market module,
leads to VenderCRM. Method: `phased-autonomous-build`, template profile.

Read `docs/report.md` for the reasoning behind the decisions below. Build sessions do
not need it.

## Phase table

| Phase | Lane | Model | Prompt | Plan § | Owns | Depends on |
|---|---|---|---|---|---|---|
| O0 Adopt | 1 | Opus (`claude-opus-5`) | `prompts/opus-0-adopt.md` | §5.1 | everything (template import), `content/site.php`, `content/ui.php`, `content/nav.php`, `content/pages.php`, `content/lead-values.php` (skeleton), tokens block | — |
| O1 Home | 1 | Opus | `prompts/opus-1-home.md` | §5.2 | `index.php`, new partials `partials/home-*.php`, `content/home.php`, `/* == O1 == */` CSS, `assets/img/*` brand files | O0 |
| O2 Tools | 1 | Opus | `prompts/opus-2-tools.md` | §5.3 | `content/tools.php`, `herramientas/**`, `assets/js/tools/**`, `lib/market/py.php` (energía tables only), `assets/js/market/py.js` (mirror), `docs/facts-to-verify.md` | O0 |
| S3 Servicios | 2 | Sonnet (`claude-sonnet-5`) | `prompts/sonnet-3-servicios.md` | §6.1 | `content/services.php` (electricista cluster records), `servicios/<slug>/` for those slugs, `content/lead-values.php` `services` records for them | O0, O1 |
| S4 Energía | 2 | Sonnet | `prompts/sonnet-4-energia.md` | §6.2 | `content/services.php` (energía cluster records), `servicios/<slug>/` for those slugs, their `lead-values.php` records | O0, O1, O2 |
| S5 Segmentos + guías | 2 | Sonnet | `prompts/sonnet-5-segmentos-guias.md` | §6.3 | `content/segmentos.php`, `content/guias.php`, `segmentos/**`, `guias/**`, their `lead-values.php` records | O0, O1 |
| S6 Blog + páginas | 2 | Sonnet | `prompts/sonnet-6-blog-pages.md` | §6.4 | `content/blog.php`, `blog/**`, `content/precios.php`, `precios/**`, `contacto/**`, `privacidad/**`, `terminos/**`, `content/pages.php` (values only) | O0, O1 |
| S7 Link pass | — | Sonnet | `prompts/sonnet-7-link-pass.md` | §6.5 | `content/nav.php`, `related[]`/`guides[]`/`articles[]`/`toolLinks[]` keys in every content file, `KNOWN-ISSUES.md`, `content/home.php` link slots | all |

Order: O0 → O1 → O2 sequential on Opus (one window can run all three, see §4.10 fallback);
then S3–S6 in parallel on Sonnet; then S7. Nothing runs on Fable (§4.8).

Two content files are shared between S3 and S4 (`content/services.php`,
`content/lead-values.php`). Each phase appends its own records in its own clearly
delimited block (`/* == S3 == */` … `/* == S4 == */`) and never edits the other's block;
O0 creates both blocks empty so merges are append-only.

## 1. Decisions already made — do not re-litigate

1. **Domain and brand**: `electricidad.com.py`, brand name "Electricidad Paraguay" until
   Anton confirms a legal entity. `content/site.php` contact and address fields stay
   `null` until confirmed (template rule: no invented facts).
2. **Business model, stage 1**: lead generation for electrician services in Asunción and
   Departamento Central (Gran Asunción). Every lead lands in VenderCRM; Anton routes it to
   a partner electrician or his own crew. The site never promises a price; it promises a
   quoted visit and a response time.
3. **Business model, stage 2 (built now, sold later)**: quote-request lead-gen for energy
   products — solar self-generation kits, generators (grupos electrógenos), UPS /
   estabilizadores, EV chargers, battery backup. NOT an e-commerce shop: these are
   G. 4–60 M purchases sold on a quote and an installation, and the installation is what
   the electrician network already sells. Ranking by potential (see report): solar > 
   generators > UPS/estabilizadores > EV chargers. The lead form, clusters and lead tiers
   carry both stages from O0 so stage 2 is a content phase (S4), not a rebuild.
4. **Stage 3 is backlog**: a dealer/electrician directory, product comparison pages,
   online payment, a customer portal. Nothing in this build prepares code for it beyond
   keeping content as data.
5. **Stack**: `php-site-template` (HTML + PHP 8.2, Hostinger shared hosting, no DB), market
   `py`, one language (es-PY, "usted" register). Leads: `enviar.php` → VenderCRM with
   email and log fallback. Deploy: `deploy/make-zip.sh` upload, per `php-site-template`.
6. **Positioning**: "respuesta en minutos, electricista matriculado, presupuesto por
   WhatsApp antes de ir". Emergency 24 h is the hero promise ONLY if Anton confirms a
   24 h partner in §7; until then the hero says "hoy mismo" and the 24 h service page
   is `stub => true`.
7. **Lead tiers** (`content/lead-values.php`): A = solar kit, generator, commercial/
   industrial installation, obra nueva; B = residential installation, tablero, aire
   acondicionado, puesta a tierra, UPS; C = repairs, emergencies, calculators, guides.
   `tierValues` A/B/C = 3 000 000 / 800 000 / 200 000 guaraníes (Ads proxies, not revenue).
8. **Content model**: the template's, unchanged. Two service clusters in `content/ui.php`:
   `electricista` (services people call about today) and `energia` (products people
   quote). Tools are the SEO moat: sizing calculators nobody else in PY has.
9. **Design**: no design canvas exists. O1 designs the homepage inside the template's
   component system with a new tokens palette: deep navy `#0B1F3A` ground, electric
   amber `#F5A524` accent, `--accent-text` a darkened amber that passes AA on white.
   Fonts: template defaults kept (no font subsetting work in this build).
10. **Imagery**: no generated imagery in any phase. Photo slots stay `null`; the template
    renders neutral panels. Imagery is a §7 human step after the build
    (`higgsfield-image-pipeline`).
11. **Models**: O0–O2 on Opus, S3–S7 on Sonnet, decided here (§4.8). O0 runs on Opus,
    against the template profile's Sonnet default, so the whole lane 1 is one Opus window
    with no model switch; the extra cost is ≈ $3.

## 2. Content model

The template's (`README.md` §Content model). Site-specific additions, all optional keys:

- `content/ui.php` `clusters`: `electricista`, `energia`. `needs` chips (6):
  `emergencia`, `instalacion`, `tablero`, `aire`, `solar`, `generador`.
- `content/site.php` `schemaType`: `['Electrician', 'LocalBusiness']`; `market` `py`;
  `areaServed` list in `content/home.php` (Asunción, San Lorenzo, Luque, Fernando de la
  Mora, Lambaré, Capiatá, Ñemby, Mariano Roque Alonso, Villa Elisa, Limpio).
- `content/home.php` (new, O1): the homepage's data — hero, two-track band
  (electricista / energía), how-it-works steps, trust items, service cards (derived from
  `services.php` by cluster), FAQ, link slots for S7.
- `lib/market/py.php` gains one table family `energia` (O2): ANDE residential tariff
  bands (source-dated), typical appliance wattages, peak-sun-hours for Asunción, a
  generator sizing factor table. Everything else in the market module is untouched.
- Every service and tool has a `lead-values.php` record (template rule; verify enforces).

## 3. Feature scope

Core (this build):
- Homepage with two tracks and a WhatsApp-first lead form (O1).
- 10 electrician service pages (S3), 6 energy product pages (S4).
- 3 calculators (O2): `cuanto-solar-necesito` (kWp from the ANDE bill),
  `que-generador-necesito` (kVA from appliances), `consumo-electrico` (monthly cost
  from appliances and the ANDE tariff).
- 5 segment pages + 6 guides (S5), 8 blog articles + contact/pricing/legal pages (S6).
- Link pass, nav, sitemap sanity, KNOWN-ISSUES (S7).

Chains: S4 product pages link to O2 calculators (`toolLinks[]`); S5 guides link to both
service clusters; S7 wires everything. None of these links are written before S7 except
a page's own `related[]` inside the same phase.

## 4. Autonomy protocol

1. Work until every exit criterion in your prompt passes; never ask permission for
   in-plan work.
2. One PR per phase: branch `phase/<id>` off latest `main`; open, watch and merge the PR
   when CI is green; a red build is always the session's own work. Lane 2 phases never
   wait for each other, only for lane 1.
3. Minor non-blocking issues → `docs/log/<id>.md` "Known issues". Only open cross-phase
   items are promoted to root `KNOWN-ISSUES.md`, by S7.
4. Stop and ask ONLY for a missing credential with no graceful fallback, or a
   bad-foundation decision (content shape, lead handler, money math) where guessing wrong
   forces a rewrite. "Ask" = append the question to `docs/decisions-needed.md`, commit,
   push, end the session. Never wait in the session for an answer.
5. Missing env/config values never block: document in `config.example.php`, degrade.
6. Every prompt is re-runnable: check what exists on the branch, continue from the first
   unmet exit criterion. WIP commit at least every 30 minutes.
7. Lane 2 hard limits: no changes to `lib/**`, `partials/**`, `templates/**` structure,
   `enviar.php`, `router.php`, `.htaccess`, `verify.sh`, `deploy/**`, the tokens block,
   or a content file (or block) another phase owns. Workaround + Backlog note instead.
8. **Model cost guardrail**: Fable (`claude-fable-*`, Mythos-class) is NEVER used for a
   phase, subagent, spawned session, watcher or Routine. Only the Opus and Sonnet ids in
   the phase table. If a session believes Fable is needed, it writes why to
   `docs/decisions-needed.md` and ends.
9. **File ownership**: write only to your `Owns` paths plus `docs/log/<id>.md`, a new
   `/* == <id> == */` block at the END of `assets/css/site.css`, your own new
   content/route/JS files, and one line in `docs/decisions-needed.md` for a cross-cutting
   wish. On `git merge main` conflicts: main wins, re-apply your change, re-run verify.
   Never resolve a conflict by editing outside your Owns block.
10. **Handoff**: `prompts/_handoff.md` (from the template) — four gates, then
    `create_session` with `model` set explicitly to the next phase's id from the phase
    table, `prompt` exactly `Read prompts/<file>.md in this repo and execute it.`
    O0 spawns O1, O1 spawns O2, O2 creates the watcher Routine and spawns S3–S6 (max 4
    concurrently — that is all of them). S3–S6 spawn nothing. The watcher spawns S7 when
    S3–S6 are merged; S7 deletes the watcher. Fallback without `create_session`: same
    model next → continue in this window (O0→O1→O2 is one Opus window); model switch →
    stop and report.
11. **Phase log**: `docs/log/<id>.md`, ≤ 12 lines "Built", ≤ 8 "Decisions", ≤ 8 "Known
    issues", one "Verification:" line. Index line added to §9.
12. **Orientation read**: your prompt, §1, §4, your own §5/§6 section, the phase table,
    §9, and the logs of your `Depends on` phases. Nothing else.
13. **Polish cap**: ONE screenshot pass (≤ 5 pages × 2 widths) after the last code change;
    ONE interaction pass only for phases shipping JS (O2: save it under `tests/`); verify
    unlimited while fixing, only the final green run reported; PR body written once,
    ≤ 25 lines, CI artifact link, no embedded images. Exit criteria pass → PR opens that
    turn. A 90-minute phase still polishing at minute 60 stops polishing.
14. **Screenshots live in CI** (`docs/screenshots/` is git-ignored), never in git.
15. **Decisions travel by files.** To change a running phase, edit its prompt on `main`.
    Never message a running session.

## 5. Lane 1 phases (Opus, sequential)

### 5.1 O0 Adopt (≤ 45 min)

The repo is empty (it was not created with GitHub's "Use this template"), so O0 imports
the template with git, then runs the template README's T0 steps 2–20 with this site's
identity. Prompt: `prompts/opus-0-adopt.md`.

Import: `git fetch https://github.com/antonmarklundcom/php-site-template main` then
`git merge --allow-unrelated-histories FETCH_HEAD` on branch `phase/O0` (main already
holds `plan.md`, `docs/report.md`, `prompts/opus-*.md`, `prompts/sonnet-*.md`; the
template adds `prompts/_handoff.md`, `_watcher.md`, `_lane2-phase.template.md` — no
overlapping paths; if git reports one, keep BOTH: template file content under its own
name, plan files unchanged).

Then: identity (§1.1, §2), ui strings (clusters, needs, every visible string in es-PY),
nav for the sections that exist (`/servicios/`, `/herramientas/`, `/guias/`, `/blog/`,
`/segmentos/`, `/contacto/`; `/precios/` kept as a "cómo cotizamos" page, S6 writes it),
pages.php titles/leads for every static page, delete ALL example records and their
route directories, `lead-values.php`: `tierValues` per §1.7, `needs` chips per §2, the
`whatsappMenu` pointing at slugs that S3/S4 will create — since verify fails on a
dangling slug, O0 creates the 16 service records as `stub => true` entries with title,
path, cluster, seoTitle and metaDescription only (S3/S4 replace them with full copy),
each inside its phase's delimited block, and the 16 three-line route files. Tokens block
per §1.9. `verify.sh` green, deploy zip green, PR, merge.

Service slugs O0 creates (S3, cluster `electricista`): `electricista-24-horas` (stub
until §7 confirms), `instalacion-electrica-residencial`, `tablero-electrico-disyuntores`,
`cortocircuito-y-fallas`, `puesta-a-tierra`, `instalacion-aire-acondicionado`,
`iluminacion-led`, `cableado-obra-nueva`, `instalacion-electrica-comercial`,
`mantenimiento-electrico`.
(S4, cluster `energia`): `paneles-solares`, `generadores`, `ups-estabilizadores`,
`cargadores-vehiculos-electricos`, `baterias-respaldo`, `medidor-ande-tramites`.

### 5.2 O1 Home (≤ 90 min)

Homepage from scratch using the template's partials and a new `content/home.php`.
Structure: hero (h1 "Electricista en Asunción y Central: presupuesto por WhatsApp,
visita hoy", WhatsApp CTA + form CTA, three trust chips), two-track band (electricista
today / energía for tomorrow, each with 3 service cards derived by cluster), "cómo
funciona" 3 steps, calculators teaser (3 cards, paths from `content/tools.php` — render
the card only if the slug exists so O1 is green before O2), area served list, FAQ (5,
FAQPage JSON-LD), lead form. New partials prefixed `home-`, locals prefixed and unset
(template rule). `/* == O1 == */` CSS only. Favicon SVG (bolt) and `og-default.png`
(1200×630, text-only, brand colours, made with a script — no generated imagery).
Lighthouse mobile ≥ 90 performance, ≥ 95 SEO on `/`. This phase also spawns O2.

### 5.3 O2 Tools (≤ 90 min)

Three calculators, sharing `assets/js/tools/energia-shared.js` and a market table
`energia` added to `lib/market/py.php` + `assets/js/market/py.js`:

1. `cuanto-solar-necesito`: input monthly kWh (or the guaraní amount of the ANDE bill,
   converted via the tariff table) → kWp needed at Asunción peak-sun-hours (≈ 4.3–4.7,
   cite source), panel count at 550 W, roof m², indicative range in guaraníes using a
   G./kWp band (source-dated, labelled "orientativo"), payback years vs the bill.
2. `que-generador-necesito`: appliance checklist with wattages and start-up factors
   (aire 12 000/18 000 BTU, heladera, freezer, bomba, luces, TV, PC, portón) → running W,
   peak W, recommended kVA with 25 % headroom, monophase vs trifásica hint, fuel
   litres/hour band.
3. `consumo-electrico`: appliances × hours/day → kWh/month → guaraníes by ANDE
   residential bands (source-dated) → the top 3 consumers and what changing them saves.

Every number in the tables carries a `source` and `reviewed` date; unknown figures go
to `docs/facts-to-verify.md`, never invented. Each tool: 200–300 words of intro copy,
FAQ, `lead-values` record (tier C, WhatsApp prefill naming the result), `formNeed`.
Interaction test script `tests/tools.spec.mjs` (Playwright, uses the CI Chromium).
This phase creates the watcher Routine and spawns S3–S6.

## 6. Lane 2 phases (Sonnet, parallel)

Shared copy brief (all of S3–S6): fear → mechanism → service. Specific, no superlatives,
no invented stats, "usted". Each service page: `hero`, `includes[]` (5–8),
`excludes[]` (2–4), `weNeed[]` (3–5), 2–3 `sections`, 3 `benefits`, 4–6 `faq`, `cta`,
`related[]` only to slugs inside the same phase. seoTitle ≤ 42 chars, metaDescription
120–155 unique site-wide. Prices: never a number; "presupuesto sin cargo por WhatsApp".

### 6.1 S3 Servicios electricista
Replace the 10 `stub => true` records in the `/* == S3 == */` block of
`content/services.php` with full copy; `lead-values` records for each (tiers per §1.7).
`electricista-24-horas` keeps `stub => true` unless `docs/decisions-needed.md` carries
Anton's confirmation; write its copy anyway so flipping the flag is a one-line change.
Fan-out: template + 1 exemplar, then parallel Sonnet subagents for the rest.

### 6.2 S4 Energía
Same for the 6 `/* == S4 == */` records. Product pages answer: what it is, what it
costs *in mechanism* (kWp, kVA, autonomy), what the installation involves, what ANDE /
Ley 7599 autogeneración means for the buyer (autogenerator registration exists; the
exact procedure goes to `docs/facts-to-verify.md` unless a primary source is found),
`toolLinks[]` to the O2 calculator that fits. Tiers: paneles-solares, generadores A;
ups, baterias, cargadores B; medidor-ande C.

### 6.3 S5 Segmentos + guías
Segments (`content/segmentos.php`): `hogar`, `comercio-y-locales`, `edificios-y-consorcios`,
`industria-y-depositos`, `campo-y-estancias`. Each `leadSlug` an existing service, bundle
of 3–5 slugs, 3 traps, 3–5 FAQ. Guides (`content/guias.php`): `que-hacer-cuando-se-corta-la-luz`,
`como-leer-la-factura-de-ande`, `como-elegir-un-generador`, `cuanto-cuesta-instalar-paneles-solares-en-paraguay`,
`autogeneracion-ley-7599-que-cambia`, `senales-de-una-instalacion-electrica-peligrosa`.
Guides carry `nextLink` to a calculator where one fits.

### 6.4 S6 Blog + páginas
`content/pages.php` values for `/contacto/`, `/precios/` ("cómo cotizamos": the visit
fee policy stays null-safe, no numbers), `/privacidad/`, `/terminos/` (real legal text
for a PY site, Ley 6534/2020 datos personales reference), `/404`. Eight articles in
`content/blog.php` + `blog/<slug>/index.php`: outage season, AC and the tablero,
solar payback in PY, generator maintenance, LED vs incandescent cost, ANDE tariff
2026 explained, home EV charging, why breakers trip. Each `service` key set.

### 6.5 S7 Link pass (sequential, after S3–S6)
`related[]`, `guides[]`, `articles[]`, `toolLinks[]` across phases; nav additions;
`content/home.php` link slots; sitemap sanity; promote open cross-phase issues to
`KNOWN-ISSUES.md`; delete the watcher; closing report to `docs/log/S7.md`.

## 7. Human-inputs checklist

| Item | Needed by | Status |
|---|---|---|
| Register `electricidad.com.py` at nic.py (see report §Domain) | deploy, not build | open |
| Confirm brand/legal name, phone, WhatsApp number → `content/site.php` | any time; site degrades until then | open |
| Confirm a 24 h partner → flip `electricista-24-horas` stub | S3 or later | open |
| VenderCRM tenant key + Resend key → `config.php` on the server | deploy | open |
| Hostinger slot / subdomain for the zip (`nextjs-deploy-hostinger` account rules) | deploy | open |
| Imagery pass (`higgsfield-image-pipeline`), needs Anton's network for the download | after S7 | open |
| GA4 / Ads IDs → `content/site.php` analytics keys | deploy | open |

## 8. Open business questions (parked)

- Own crew vs. partner electricians, and the lead fee model (per lead, per closed job,
  monthly). Affects nothing in the build.
- Whether to sell solar as a dealer of one importer or route quotes to several.
- Interior cities (Ciudad del Este, Encarnación) as segment pages later.

## 9. Build log index

| Phase | PR | Log |
|---|---|---|
| plan | (this PR) | — |

## 10. Backlog

- Directory of matriculated electricians by city (stage 3).
- Product comparison tables (generator brands, solar kits) once a supplier list exists.
- Interior-city segment pages.
- Spanish/Guaraní bilingual strings.
