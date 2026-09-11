# Phase S6 — Blog and static pages. Sonnet session. Lane 2, parallel with S3, S4, S5.

Read ONLY: this file, `plan.md` §1, §4, §6 (intro brief) and §6.4, the phase table, §9,
`docs/log/O0.md`, `docs/log/O1.md`. Execute under §4. Build nothing outside the plan.

Owns (plus §4.9 exceptions): `content/blog.php`, `blog/**`, `content/precios.php`,
`precios/**`, `contacto/**`, `privacidad/**`, `terminos/**`, the VALUES of existing keys in
`content/pages.php` (no new pages, no deletions), `docs/log/S6.md`.

Hard limits (lane 2): no `lib/**`, `partials/**`, `templates/**`, `enviar.php`, `router.php`,
`.htaccess`, `verify.sh`, `deploy/**`, tokens, `content/nav.php`, `content/home.php`,
`content/services.php`, `content/lead-values.php`. Article `service` keys MAY name the 16
service slugs from plan §5.1. Links to guides stay empty for S7.

Budget: one session, ≤ 90 min. Polish cap §4.13. Exit criteria pass → PR opens that turn.

Phase rules:
- Branch `phase/S6` off latest main. WIP commit every 30 min.
- Load `php-site-template` (article and page contracts) and `paraguay-business-apps`
  (Ley 6534/2020 datos personales for the privacy page; "usted").
- 8 articles per §6.4, 700–1000 words each, dated within the last 60 days, `updated` set,
  each with a `service` key and a closing CTA paragraph. No invented statistics; a figure
  needs a linked primary source in the text or it is not written.
- `/precios/` is "cómo cotizamos": the process, what a visit includes, why no list price;
  ZERO guaraní amounts (§1.2).
- `/contacto/`: lead form, WhatsApp, area served list mirrored from `content/home.php`
  (read it, do not edit it). Contact facts come from `content/site.php` and hide while null.
- Fan-out: one article exemplar, then 7 as parallel Sonnet subagents; one verify, one PR.
- Re-runnable; minor issues → `docs/log/S6.md`; stop only per §4.4.

Exit: 8 article URLs + `/blog/` index render; `/contacto/`, `/precios/`, `/privacidad/`,
`/terminos/`, `/404` render real text (no lorem, no `stub`); Article JSON-LD valid; unique
metaDescriptions; `./verify.sh` green; PR merged green. Screenshots: CI artifact.

## After this phase
Follow `prompts/_handoff.md`. Lane 2 spawns nothing — end with your phase report.
