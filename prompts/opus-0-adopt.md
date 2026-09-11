# Phase O0 — Adopt the template. Opus session. Lane 1.

Read ONLY: this file, `plan.md` §1, §2, §4, §5.1, the phase table and §9. Then the template's
`README.md` section "Start a new site (T0)" once it is imported. Execute under the autonomy
protocol §4. Build nothing outside the plan.

Owns: everything the template import brings, plus `content/site.php`, `content/ui.php`,
`content/nav.php`, `content/pages.php`, `content/services.php` (stub records in two delimited
blocks), `content/lead-values.php`, the `:root` tokens block of `assets/css/site.css`,
`servicios/<slug>/index.php` for the 16 slugs in §5.1, `docs/log/O0.md`.

Budget: one session, ≤ 45 min. When the exit criteria pass, open the PR that turn (§4.13).

Phase rules:
- Branch `phase/O0` off latest main. Import the template exactly as §5.1 says
  (`git fetch` + `git merge --allow-unrelated-histories`). Run `./verify.sh` BEFORE changing
  anything: it must print PASS on the untouched template.
- Then README T0 steps 4–20 with the identity in §1 and §2. Load `php-site-template` and
  `paraguay-business-apps` skills for market conventions.
- Delete every `'example' => true` record and its route directory. Create the 16 service stubs
  (`stub => true`, title, path, cluster, navLabel, seoTitle, metaDescription only) inside
  `/* == S3 == */` and `/* == S4 == */` blocks so S3 and S4 can each replace their own block.
  Same two blocks in `content/lead-values.php` `services`, each stub with a real
  `whatsappText` naming the service and a tier per §1.7.
- Tokens per §1.9; check `--accent-text` on `--bg` and `--surface` ≥ 4.5:1 with a script.
- Skip font subsetting and brand images (O1 does images; fonts stay default).
- Re-runnable; minor issues → `docs/log/O0.md`; stop only per §4.4.

Exit: `./verify.sh` green; `./deploy/make-zip.sh` + `./verify.sh --root dist/<slug>-<date>`
green; no `example` records remain; 16 service URLs return 200 as stubs; `/` renders the
template homepage with the new tokens; PR merged green. Screenshots: CI artifact.

## After this phase
Follow `prompts/_handoff.md`. Next: `prompts/opus-1-home.md`, model Opus (`claude-opus-5`).
Same model → if `create_session` is unavailable, continue in this window.
