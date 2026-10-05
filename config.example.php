<?php
/**
 * Default configuration. Copy to config.php on the server and fill in.
 *
 *   cp config.example.php config.php
 *
 * config.php is gitignored and never committed. Every value here is optional:
 * the site renders while intake remains closed when required values are empty.
 */

declare(strict_types=1);

return [
    // Absolute origin, no trailing slash. Used for canonical URLs, OG tags and
    // the sitemap. Falls back to the request host when empty.
    'SITE_URL' => '',

    // Keep disabled until the operator, coverage and CRM receipt are verified.
    'PUBLICATION_READY' => '0',
    'LEADS_ENABLED' => '0',
    'OPERATOR_NAME' => '',

    // VenderCRM (Sitios → this site). Missing values close intake. A runtime
    // delivery failure preserves a private record but returns an honest error.
    'VENDERCRM_URL'     => '',
    'VENDERCRM_API_KEY' => '',

    // Lead notification email through Resend (https://resend.com). Optional and
    // independent of VenderCRM: when both values are set, every accepted lead is
    // also emailed to LEAD_NOTIFY_TO. LEAD_FROM must be an address on a domain
    // verified in the Resend dashboard (SPF + DKIM records in Hostinger DNS).
    'RESEND_API_KEY' => '',
    'LEAD_NOTIFY_TO' => '',                       // e.g. 'contacto@example.com'
    'LEAD_FROM'      => '',                       // e.g. 'Example S.A. <no-reply@example.com>'

    // Analytics. assets/js/analytics.js is a no-op until GA4_ID is set.
    'GA4_ID' => '',
    'ADS_ID' => '',
];
