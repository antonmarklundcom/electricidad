# Facts to verify before (or soon after) launch

Nothing below is shown as a fact on the site today; each item would make a page stronger once
confirmed from a primary source. The sandbox that built the site could not reach ande.gov.py.

| # | Fact | Where it would go | Source to check |
|---|---|---|---|
| 1 | ANDE residential tariff per kWh by band (Pliego Nº 21, act. 27-11-2024) and IVA treatment | `lib/market/py.php` `energia` → lets the calculators pre-fill a price per kWh; blog `tarifa-ande-explicada` | ande.gov.py/tarifas_vigentes.php, PLIEGO21.pdf |
| 2 | Pending ANDE tariff reform (ABC 2025-11-04 proposal; 2026 study up to +45,6 %) | blog `tarifa-ande-explicada` update | abc.com.py, ANDE press |
| 3 | Surplus compensation under Decreto 6034/2026 (net metering vs net billing, price) | guide `autogeneracion-ley-7599-que-cambia`, solar calculator payback | ABC 2026-05-30 "ANDE define cómo comprará energía solar", ANDE reglamento |
| 4 | Autogenerador registration steps, fees and timelines at the ANDE | guide above, service `medidor-ande-tramites` | ANDE |
| 5 | Aumento de carga / cambio a trifásica requisitos and costs | guide `como-pedir-aumento-de-carga-ande` | ANDE |
| 6 | Asunción monthly irradiation min/max (calculator uses 4,9 kWh/m²·día annual mean) | `lib/market/py.php` `energia.solar` | globalsolaratlas.info, PVGIS |
| 7 | Appliance wattages (heladera, freezer, portón, 24.000 BTU AC are proxies) | `lib/market/py.php` `energia.equipos` | manufacturer labels sold in PY |
| 8 | Solar/generator price figures quoted from 2026 press (G. 12,5 M; USD 10–15 k; G. 4,2 M; G. 47 M) — refresh every 6 months | services `paneles-solares`, `generadores`, 2 guides, 2 articles | ABC, Prensa Mercosur, La Tribuna 2026-02-25 |
