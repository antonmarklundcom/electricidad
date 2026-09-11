# Phase O2 — Calculators. Opus session. Lane 1 (last). Creates the watcher, spawns lane 2.

Read ONLY: this file, `plan.md` §1, §2, §4, §5.3, the phase table, §9, `docs/log/O0.md`,
`docs/log/O1.md`. Execute under the autonomy protocol §4. Build nothing outside the plan.

Owns: `content/tools.php`, `herramientas/**`, `assets/js/tools/**`, the `energia` table in
`lib/market/py.php` and its mirror in `assets/js/market/py.js` (add a table, change nothing
else in either file), `content/lead-values.php` `tools` records, `tests/tools.spec.mjs`,
`docs/facts-to-verify.md`, `/* == O2 == */` CSS, `docs/log/O2.md`.

Budget: one session, ≤ 90 min. When the exit criteria pass, open the PR that turn (§4.13).

Phase rules:
- Branch `phase/O2` off latest main. WIP commit every 30 min.
- Load `php-site-template` (tool template contract, `window.Market`) and
  `paraguay-business-apps` (guaraní formatting, no decimals).
- Three tools per §5.3. All arithmetic in `assets/js/tools/<slug>.js` reading
  `Market.table('energia')`; shared helpers in `energia-shared.js`. Each tool's markup in its
  own route file into `$toolCalcHtml`; copy readable without JS.
- Every constant (tariff bands, wattages, sun-hours, G./kWp band) has `source` + `reviewed`
  in the table. Search primary sources (ANDE pliego tarifario, Ley 7599/2025, Decreto
  6034/2026). Anything unconfirmed → `docs/facts-to-verify.md` AND the UI says "orientativo".
  Never invent a figure.
- Results end in a WhatsApp CTA whose prefill (from `lead-values.php`) carries the result
  ("Calculé ~4,5 kWp para mi casa…") — the calculator's job is to produce the lead.
- ONE interaction pass: `tests/tools.spec.mjs` fills each tool, asserts a result and the
  prefill text. Save it; later phases re-run instead of re-derive.

Exit: 3 tool URLs render intro + calculator + FAQ; FAQ JSON-LD valid; `tests/tools.spec.mjs`
green locally; `./verify.sh` green; deploy zip green; PR merged green. Screenshots: CI artifact.

## After this phase
Follow `prompts/_handoff.md`. This is the LAST lane 1 phase:
1. Create the watcher Routine per `prompts/_watcher.md` (hourly, fresh session per fire,
   model `claude-sonnet-5`, prompt `Read prompts/_watcher.md in this repo and execute it.`).
2. Spawn ALL lane 2 phases at once, model `claude-sonnet-5` each:
   `prompts/sonnet-3-servicios.md`, `prompts/sonnet-4-energia.md`,
   `prompts/sonnet-5-segmentos-guias.md`, `prompts/sonnet-6-blog-pages.md`.
   Never Fable (§4.8). If `create_session` is unavailable: stop and report the four prompt
   lines for Anton to paste into four Sonnet windows.
