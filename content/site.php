<?php
/**
 * Business facts. Everything the site says about itself comes from here — the
 * title suffix, the wordmark, the footer NAP, the JSON-LD, the WhatsApp links,
 * the deploy zip's name. Nothing in lib/, partials/ or templates/ hardcodes a
 * business name, a domain or a country.
 *
 * RULE: no fabricated facts. A value nobody has confirmed stays null, and the
 * partial that would show it hides instead or falls back to neutral phrasing.
 * Never a placeholder number, never an invented address.
 *
 * Contact, address and legal values stay null until Anton confirms them
 * (plan.md §7). The site degrades to /contacto/ links meanwhile.
 */

declare(strict_types=1);

return [
    // --- identity -----------------------------------------------------------
    'name'   => 'Electricidad PY',
    // Bare hostname, no scheme: the wordmark and robots.txt print it.
    'domain' => 'electricidad.com.py',
    // Lower-case, filename-safe: names the deploy zip (dist/<slug>-DATE.zip).
    'slug'   => 'electricidad',

    // Which lib/market/<market>.php + assets/js/market/<market>.js pair loads:
    // money formatting, tax-id validation, long dates, VAT rates and the legal
    // reference tables. 'py' (Paraguay) or 'se' (Sweden) ship with the template.
    'market' => 'py',

    // schema.org types for the organisation block, most specific first. See
    // https://schema.org/LocalBusiness for the list ('LegalService',
    // 'Plumber', 'Dentist', 'AccountingService', …).
    'schemaType' => ['Electrician', 'LocalBusiness'],

    // Path of the services hub. '/servicios/' by default; a store can use
    // '/productos/'. Move the servicios/ route directory and its
    // content/pages.php key to match.
    'servicesHub' => '/servicios/',

    // Cities named in the JSON-LD areaServed. Mirrors the zone pages in
    // content/segmentos/zonas.php (Gran Asunción first).
    'areaServed' => [
        'Asunción', 'San Lorenzo', 'Luque', 'Fernando de la Mora', 'Lambaré', 'Capiatá',
        'Ñemby', 'Mariano Roque Alonso', 'Villa Elisa', 'Limpio',
        'Ciudad del Este', 'Encarnación', 'Coronel Oviedo',
    ],

    'legalName'   => null,                       // registered legal name
    'description' => 'Electricistas en Asunción y Central, y presupuestos de energía solar, '
                   . 'generadores y UPS: cotización por WhatsApp antes de la visita.',

    // --- contact ------------------------------------------------------------
    // 'phone' and 'whatsapp' in international form, e.g. '+595 981 123 456'.
    // While both are null the header pill, the floating button and every
    // service CTA point at /contacto/ instead of wa.me — see
    // partials/whatsapp-fab.php.
    'phone'    => '+595 995 628862',
    'whatsapp' => '+595 995 628862',
    'email'    => null,

    // --- address ------------------------------------------------------------
    'street'  => null,
    'city'    => null,
    'country' => null,                           // defaults to the market's country
    'hours'   => null,                           // display string, e.g. 'Lun–Vie 8:00–17:30'

    // schema.org openingHoursSpecification entries, added when hours are confirmed
    'openingHours' => [],

    // --- credentials and scale ----------------------------------------------
    'registration' => null,                      // licence / registration number
    'foundedYear'  => null,                      // int
    'teamSize'     => null,                      // int

    // --- imagery ------------------------------------------------------------
    // While these are null the homepage "about" slots render as neutral
    // decorative panels — never a broken image, never a captioned identity claim.
    'photos' => [
        'portrait' => null,                      // ['src' => '/assets/img/...', 'alt' => '...']
        'team'     => null,
    ],

    // --- collections: every one of these renders only when non-empty ---------
    'socials'      => [],                        // ['https://www.facebook.com/...', ...]
    'stats'        => [],                        // [['value' => '100 %', 'label' => '...'], ...]
    'testimonials' => [],                        // [['quote','name','business','city','since'], ...]
    'team'         => [],                        // [['name','role','credentials','photo'], ...]
    'credentials'  => [],                        // ['Profesionales matriculados', ...]
];
