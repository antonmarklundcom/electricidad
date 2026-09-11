# Phase S7 — Link pass. Sonnet session. Sequential, after S3–S6 are merged.

Read ONLY: this file, `plan.md` §1, §4, §6.5, the phase table, §9, and `docs/log/O0.md`
through `docs/log/S6.md` (their Known issues sections). Execute under §4.

Owns: `content/nav.php`; the `related[]`, `guides[]`, `articles[]`, `toolLinks[]` keys in
`content/services.php`, `content/guias.php`, `content/segmentos.php`, `content/blog.php`;
the link slots in `content/home.php`; `KNOWN-ISSUES.md`; `docs/facts-to-verify.md`
(consolidate the lines the phases left in their logs); `docs/log/S7.md`; plan.md §9.

Hard limits: link keys and nav only. No copy rewrites, no new pages, no CSS, no `lib/**`,
`partials/**`, `templates/**`.

Budget: one session, ≤ 60 min. Polish cap §4.13.

Phase rules:
- Branch `phase/S7` off latest main. First confirm every S3–S6 PR is merged; if one is not,
  stop and end (the watcher will re-spawn you).
- Every service: ≥ 2 `related[]`, ≥ 1 guide, ≥ 1 article where one fits, `toolLinks[]` where a
  calculator fits. Every guide and article: links back to ≥ 1 service. Homepage link slots
  filled. Nav: `/segmentos/` and `/guias/` entries if O0 left them out.
- Run `./verify.sh`; then crawl every URL in `deploy/routes.php` and assert zero internal 404s
  and zero orphan pages (a page no other page links to).
- Promote still-open cross-phase issues from the logs to `KNOWN-ISSUES.md` (≤ 20 lines).
- Write the closing report in `docs/log/S7.md`: URL count, orphans fixed, open issues, the
  §7 items still open for Anton.

Exit: zero internal 404s, zero orphans, `./verify.sh` green, deploy zip green, PR merged green.

## After this phase
Delete the watcher Routine (`delete_trigger`, id in `docs/log/_watcher.md`). Then STOP with the
closing report. Spawn nothing.
