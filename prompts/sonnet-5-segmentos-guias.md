# Phase S5 — Segment pages and guides. Sonnet session. Lane 2, parallel with S3, S4, S6.

Read ONLY: this file, `plan.md` §1, §4, §6 (intro brief) and §6.3, the phase table, §9,
`docs/log/O0.md`, `docs/log/O1.md`. Execute under §4. Build nothing outside the plan.

Owns (plus §4.9 exceptions): `content/segmentos.php`, `content/guias.php`, `segmentos/**`,
`guias/**`, a `/* == S5 == */` block in `content/lead-values.php` for guide records,
`docs/log/S5.md`.

Hard limits (lane 2): no `lib/**`, `partials/**`, `templates/**`, `enviar.php`, `router.php`,
`.htaccess`, `verify.sh`, `deploy/**`, tokens, `content/nav.php`, `content/home.php`,
`content/services.php`. Segment `leadSlug` and `bundle[]` MAY reference the 16 service slugs
from plan §5.1 (O0 created them; they exist on main). Guide `nextLink` MAY point at the three
O2 tool paths. Links to blog articles stay empty for S7.

Budget: one session, ≤ 90 min. Polish cap §4.13. Exit criteria pass → PR opens that turn.

Phase rules:
- Branch `phase/S5` off latest main. WIP commit every 30 min.
- Load `php-site-template` (segment and guide contracts) and `paraguay-business-apps`.
- 5 segments and 6 guides per §6.3. Segments: the trap list is the page — 3 concrete,
  money-costing mistakes per rubro, no statistics. Guides: 800–1200 words, step lists, a
  "cuándo llamar a un electricista" box, FAQ 3–5.
- `como-leer-la-factura-de-ande` and `autogeneracion-ley-7599-que-cambia` need primary
  sources (ANDE, Gaceta Oficial / BACN). Unconfirmed → `docs/facts-to-verify.md` line in
  your log's Known issues (you do not own that file; S7 or Anton moves it).
- Fan-out: one segment + one guide exemplar, then the rest as parallel Sonnet subagents;
  one verify, one PR.
- Re-runnable; minor issues → `docs/log/S5.md`; stop only per §4.4.

Exit: 5 segment URLs + 6 guide URLs render; every `leadSlug`/`bundle` slug resolves; guides
with `nextLink` point at existing tool paths; FAQ JSON-LD valid; unique metaDescriptions;
`./verify.sh` green; PR merged green. Screenshots: CI artifact.

## After this phase
Follow `prompts/_handoff.md`. Lane 2 spawns nothing — end with your phase report.
