<?php
declare(strict_types=1);

/** A configured CRM alone does not establish who may receive a visitor's data. */
function contact_ready(): bool
{
    return cfg('LEADS_ENABLED', '0') === '1'
        && cfg('OPERATOR_NAME') !== null
        && cfg('VENDERCRM_URL') !== null
        && cfg('VENDERCRM_API_KEY') !== null
        && function_exists('curl_init');
}

function publication_ready(): bool
{
    return cfg('PUBLICATION_READY', '0') === '1';
}
