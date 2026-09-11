# Phase S3 — Electrician service pages. Sonnet session. Lane 2, parallel with S4, S5, S6.

Read ONLY: this file, `plan.md` §1, §4, §6 (intro brief) and §6.1, the phase table, §9,
`docs/log/O0.md`, `docs/log/O1.md`. Do not read the rest. Execute under §4. Build nothing
outside the plan.

Owns (plus §4.9 append-only exceptions): the `/* == S3 == */` block of `content/services.php`
and of `content/lead-values.php`, `servicios/<slug>/` for the 10 S3 slugs listed in plan §5.1,
`docs/log/S3.md`. NOT the S4 block, not any other content file.

Hard limits (lane 2): no changes to `lib/**`, `partials/**`, `templates/**`, `enviar.php`,
`router.php`, `.htaccess`, `verify.sh`, `deploy/**`, the tokens block, `content/nav.php`,
`content/home.php`. Cross-phase links (`guides[]`, `articles[]`, `toolLinks[]`, `related[]` to
S4 slugs) stay EMPTY — S7 fills them. Workaround + Backlog note in your log instead; if truly
blocked, `docs/decisions-needed.md`, push, end (§4.4).

Budget: one session, ≤ 90 min. Polish cap §4.13. Exit criteria pass → PR opens that turn.

Phase rules:
- Branch `phase/S3` off latest main. WIP commit every 30 min.
- Load `php-site-template` (service record contract) and `paraguay-business-apps` (register,
  local terms: tablero, disyuntor, térmica, llave diferencial, ANDE, medidor, NIS).
- Copy brief in §6: fear → mechanism → service; specific, no superlatives, no prices, no
  invented stats or certifications. "Electricista matriculado" only as a promise of who is
  sent, not a licence number.
- `electricista-24-horas`: write full copy but keep `stub => true` unless
  `docs/decisions-needed.md` says Anton confirmed a 24 h partner (§1.6).
- Fan-out: finish ONE exemplar (`instalacion-electrica-residencial`) to the bar, then the
  other 9 as parallel Sonnet subagents per `fable-directs-sonnet-builds` §Fan-out, each
  writing only its own record and route file; one verify, one PR. Never a Fable subagent.
- Re-runnable; minor issues → `docs/log/S3.md`; stop only per §4.4.

Exit: 10 service URLs render full copy (no `stub` except 24h per above); each has 4–6 FAQ with
valid FAQPage JSON-LD, `includes`/`excludes`/`weNeed` filled, unique metaDescription
120–155; every slug has a `lead-values` record with a service-naming `whatsappText`;
`./verify.sh` green; PR merged green. Screenshots: CI artifact.

## After this phase
Follow `prompts/_handoff.md`. Lane 2 spawns nothing — end with your phase report.
