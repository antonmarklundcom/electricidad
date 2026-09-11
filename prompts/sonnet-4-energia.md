# Phase S4 — Energy product pages. Sonnet session. Lane 2, parallel with S3, S5, S6.

Read ONLY: this file, `plan.md` §1, §4, §6 (intro brief) and §6.2, the phase table, §9,
`docs/log/O0.md`, `docs/log/O1.md`, `docs/log/O2.md`, and `docs/facts-to-verify.md`.
Execute under §4. Build nothing outside the plan.

Owns (plus §4.9 exceptions): the `/* == S4 == */` block of `content/services.php` and of
`content/lead-values.php`, `servicios/<slug>/` for the 6 S4 slugs in plan §5.1,
`docs/facts-to-verify.md` (append only), `docs/log/S4.md`.

Hard limits (lane 2): as in S3 — no `lib/**`, `partials/**`, `templates/**`, `enviar.php`,
`router.php`, `.htaccess`, `verify.sh`, `deploy/**`, tokens, `content/nav.php`,
`content/home.php`, no S3 block. `toolLinks[]` to the O2 calculators IS yours to set (the
tools exist and are stable); `guides[]`/`articles[]`/`related[]` to other phases stay empty.

Budget: one session, ≤ 90 min. Polish cap §4.13. Exit criteria pass → PR opens that turn.

Phase rules:
- Branch `phase/S4` off latest main. WIP commit every 30 min.
- Load `php-site-template` and `paraguay-business-apps`.
- These pages sell a quote, not a product: what it is, how it is sized (point at the
  calculator), what the installation involves, what happens with ANDE. For
  `paneles-solares`: Ley 7599/2025 + Decreto 6034/2026 autogeneración exists — say what a
  primary source confirms, put the rest in `docs/facts-to-verify.md` and write "consulte el
  procedimiento vigente". No G. amounts on the page except a clearly labelled "desde"
  band already in `docs/facts-to-verify.md` with a source; otherwise none.
- Tiers per §6.2. `whatsappText` names the product and asks for the two sizing facts
  (monthly kWh / appliances) so the first reply is already a quote conversation.
- Fan-out: exemplar `paneles-solares`, then 5 parallel Sonnet subagents; one verify, one PR.
- Re-runnable; minor issues → `docs/log/S4.md`; stop only per §4.4.

Exit: 6 URLs render full copy; each with `toolLinks[]` to the matching calculator
(`paneles-solares` → `cuanto-solar-necesito`, `generadores` → `que-generador-necesito`,
`ups-estabilizadores`/`baterias-respaldo` → `consumo-electrico`); FAQ JSON-LD valid;
unique metaDescriptions; `./verify.sh` green; PR merged green. Screenshots: CI artifact.

## After this phase
Follow `prompts/_handoff.md`. Lane 2 spawns nothing — end with your phase report.
