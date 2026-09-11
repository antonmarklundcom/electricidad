# electricidad.com.py — improvement report and decisions (2026-09-11)

Written by the planning session. State of the repo at the time: empty, no commits. So
"improve this" means "decide what to build and how", and every improvement below is a
decision recorded in `plan.md` §1. This file is the reasoning; build sessions do not read it.

## 1. What the repo should become

A lead-generation site, not a portfolio and not a shop. Two tracks on one domain:

| Track | What the visitor wants | What the site sells | When |
|---|---|---|---|
| Electricista | someone to come today | a quoted visit, by WhatsApp | now |
| Energía | to stop depending on ANDE | a sized quote for solar / generator / UPS | now (pages), monetised later |

The single-domain choice matters: the electrician who installs the tablero is the one who
installs the solar kit, so the two tracks share the lead pipeline, the trust content and the
search authority. A separate "products" site would split all three.

## 2. Why lead-gen first, products second, and never a plain shop

- **Electrician demand is real and under-served online.** The competitors that rank
  (solucioneselectricas.com.py, electricasa.com.py, Clasipar and BuscoInfo listings) are
  thin: one page, a phone number, no calculators, no guides, no segment pages. A
  template-grade site with 16 service pages, 5 segments, 6 guides and 3 calculators wins
  the long tail on content alone.
- **Solar is the product with the best potential.** Ley 7599/2025 on non-conventional
  renewables, regulated by Decreto 6034/2026, lets households and businesses become
  autogenerators and feed surplus to ANDE. Entry systems are marketed from about
  G. 12,5 M; full residential systems run USD 10–15 k; installed capacity went from
  ~50 MW (2020) to ~300 MW (2024). Summer outages and voltage drops are the trigger. That
  is a high-ticket, quote-driven purchase where a sizing calculator plus a WhatsApp
  conversation is exactly the right funnel.
- **Generators are the second product.** Home units from about G. 4,2 M (6,7 kVA), the
  popular commercial unit is a cabined 12 kVA three-phase diesel around G. 47 M. Same
  outage trigger, faster decision, lower margin, existing dealers (Electropar, Comagro,
  Electroservis, Petersen) who will pay for qualified leads.
- **UPS / estabilizadores and EV chargers** are smaller but cheap to add as pages.
- **A shop is wrong for this market right now.** These products need sizing, delivery,
  installation and ANDE paperwork; nobody buys a G. 30 M kit from a cart. A quote-request
  funnel captures the same buyer and lets Anton route the lead to whichever importer pays
  best, without stock, logistics or SIFEN invoicing. Revisit only if a supplier wants a
  white-label storefront (Backlog).

## 3. Improvements over the previous template build (contador.com.py)

1. **Plan and prompts land before code**, and the T0 adopt runs on Opus so lane 1 is one
   window with no model switch (extra cost ≈ $3, saves a handoff).
2. **Stub records created in O0** for all 16 services, in phase-delimited blocks, so the
   two service phases append instead of colliding and `verify.sh` is green from the first PR.
3. **Calculators are a lane 1 Opus phase**, because their tables (ANDE tariff, sun-hours,
   appliance loads) are money math that product pages and guides link to.
4. **Cross-links are written exactly once**, in the link pass, so four Sonnet phases run in
   parallel with zero shared lines.
5. **No imagery in the build.** The template renders neutral panels; the image pass is a
   human step with Anton's network (the CDN block that cost conthtml two failed attempts).
6. **Budget target** per the method: ≤ $60, ≤ 4 h wall-clock. Anything above is logged in
   the `phased-autonomous-build` skill, not accepted.

## 4. Domain: should Anton buy electricidad.com.py?

**Yes, if it is available, and buy it before the build finishes.** Reasons:

- It is the exact-match generic noun for the whole category in a ccTLD that ranks well
  in Paraguay; it covers both tracks (services and energy) where `electricista.com.py`
  would cover only one and `solar.com.py` only the other.
- Searches for the competitor domains show no site on `electricidad.com.py`, and the
  sandbox could not reach nic.py or resolve the host (network policy), so availability is
  **unverified**. Check it at https://www.nic.py (consulta de dominio). A `.com.py`
  registration is inexpensive (tens of USD per year); the registrant needs a Paraguayan
  contact and a RUC or cédula, which Anton's PY entity already provides.
- If it is taken, the fallback order is `electricidad.py` (if NIC allows second-level),
  `electricistas.com.py`, `electricidadpy.com`. Do not start S3 copy until the domain is
  settled, since `content/site.php` `domain` prints into the wordmark, JSON-LD and robots.

## 5. What to watch after launch

- Lead quality by tier in VenderCRM after 30 days; retune `tierValues`.
- Whether solar quote requests outnumber generator ones; that decides which importer to
  sign first.
- Google Business Profile for the electrician track (`gbp-optimizer` skill) — a local pack
  listing will out-convert the site for emergency searches.

Sources used for the market notes: ABC Color 2026-08-14 "La fiebre de la energía solar",
Revista FOCO 2026-09-02, Última Hora "¿Es viable instalar paneles solares…", ABC Color
"Los generadores eléctricos para el hogar cuestan desde G. 4.200.000", Prensa Mercosur
2026-08-15, and the public sites of Electropar, Comagro, Electroservis, Soluciones
Eléctricas and Electricasa.
