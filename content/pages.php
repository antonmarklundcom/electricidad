<?php
/**
 * The static (non-service) pages, keyed by path. Services live in
 * content/services.php, tools in content/tools.php, guides in content/guias.php,
 * segment pages in content/segmentos.php; this is everything else with a URL.
 *
 *   title        string  <title> without the ' | <site name>' suffix
 *   description  string  120–155 chars, unique across the whole site
 *   h1           string  visible heading
 *   lead         string  one-line intro under the H1
 *   sections     array   optional prose blocks for templates/page.php:
 *                        [['h2' => ..., 'body' => [paragraph, ...]], ...]
 *   stub         bool    true while the page is still a placeholder: it renders
 *                        through templates/page-stub.php, is marked noindex and
 *                        stays out of sitemap.php. The phase that writes the
 *                        page sets this to false.
 *   noindex      bool    the page exists but is not a URL of its own (/404).
 *                        Excluded from sitemap.php and from the route contract.
 *   changefreq   string  sitemap hint
 *   priority     string  sitemap hint
 *
 * Every entry here needs a route file (<path>/index.php) except '/404', which
 * is served by 404.php.
 */

declare(strict_types=1);

/* Long-form 'sections' for the text pages live in content/pages-legal.php,
   keyed by the same path, and are merged in below. */
$pageSections = is_file(__DIR__ . '/pages-legal.php') ? require __DIR__ . '/pages-legal.php' : [];

$pages = [
    '/' => [
        'title'       => 'Electricista en Asunción y Central | Electricidad PY',
        'description' => 'Electricista en Asunción y Central con presupuesto por WhatsApp antes de la visita. Paneles solares, generadores y UPS dimensionados para su consumo.',
        'h1'          => '',
        'lead'        => '',
        'faq'         => [
            [
                'q' => '¿Cuánto cobra un electricista en Asunción?',
                'a' => 'Depende del trabajo: no cuesta lo mismo cambiar un disyuntor que rehacer un '
                     . 'tablero. Por eso cotizamos antes de ir: nos manda una foto o un audio por '
                     . 'WhatsApp y le pasamos el presupuesto con materiales y mano de obra por separado.',
            ],
            [
                'q' => '¿El presupuesto tiene costo?',
                'a' => 'No. El presupuesto por WhatsApp es sin cargo. Si para cotizar hace falta ver el '
                     . 'lugar, se lo decimos antes y usted decide.',
            ],
            [
                'q' => '¿Pueden venir hoy?',
                'a' => 'En Asunción y Central coordinamos la visita en el día cuando la agenda lo '
                     . 'permite. Si hay olor a quemado, chispas o un tablero caliente, baje la llave '
                     . 'general y escríbanos: esos casos van primero.',
            ],
            [
                'q' => '¿Instalan paneles solares y generadores en el interior?',
                'a' => 'Sí. Los proyectos de energía se dimensionan a distancia con sus facturas de la '
                     . 'ANDE o la lista de equipos, y la instalación se coordina en un viaje.',
            ],
            [
                'q' => '¿Qué garantía tiene el trabajo?',
                'a' => 'Al terminar le dejamos por escrito qué se hizo, qué materiales se usaron y la '
                     . 'garantía del trabajo.',
            ],
        ],
        'stub'        => false,
        'changefreq'  => 'weekly',
        'priority'    => '1.0',
    ],

    '/servicios/' => [
        'title'       => 'Servicios de electricista y energía',
        'description' => 'Todos los servicios: reparaciones, tableros, aire acondicionado, instalaciones, paneles solares, generadores, UPS y trámites de la ANDE.',
        'h1'          => '',
        'lead'        => '',
        'stub'        => false,
        'changefreq'  => 'monthly',
        'priority'    => '0.9',
    ],

    '/precios/' => [
        'title'       => 'Cómo cotizamos',
        'description' => 'Cómo armamos cada presupuesto: diagnóstico por WhatsApp sin cargo, materiales y mano de obra por separado, y usted aprueba antes de empezar.',
        'h1'          => 'Cómo cotizamos',
        'lead'        => 'Presupuesto por escrito antes de empezar, sin sorpresas.',
        'stub'        => false,
        'changefreq'  => 'monthly',
        'priority'    => '0.6',
    ],

    '/herramientas/' => [
        'title'       => 'Calculadoras de energía',
        'description' => 'Calculadoras gratuitas: cuántos paneles solares necesita, qué generador le conviene y cuánto consume cada equipo de su casa.',
        'h1'          => 'Calculadoras de energía',
        'lead'        => 'Haga la cuenta antes de pedir presupuesto.',
        'stub'        => false,
        'changefreq'  => 'monthly',
        'priority'    => '0.8',
    ],

    '/guias/' => [
        'title'       => 'Guías de electricidad para el hogar',
        'description' => 'Guías claras sobre cortes de luz, disyuntores, la factura de la ANDE, generadores y paneles solares en Paraguay, escritas por electricistas.',
        'h1'          => 'Guías',
        'lead'        => 'Lo que conviene saber antes de llamar a un electricista.',
        'stub'        => false,
        'changefreq'  => 'monthly',
        'priority'    => '0.7',
    ],

    '/blog/' => [
        'title'       => 'Blog de electricidad y energía',
        'description' => 'Artículos sobre cortes de luz, aire acondicionado, energía solar, generadores y la tarifa de la ANDE, pensados para hogares y comercios.',
        'h1'          => 'Blog',
        'lead'        => 'Electricidad y energía en Paraguay, en lenguaje claro.',
        'stub'        => false,
        'changefreq'  => 'weekly',
        'priority'    => '0.6',
    ],

    '/contacto/' => [
        'title'       => 'Contacto y presupuesto',
        'description' => 'Pida presupuesto por WhatsApp o con el formulario: cuéntenos el problema, mándenos una foto y le respondemos con una cotización.',
        'h1'          => '',
        'lead'        => '',
        'stub'        => false,
        'changefreq'  => 'yearly',
        'priority'    => '0.8',
    ],

    '/profesionales/' => [
        'title'       => 'Para electricistas y proveedores',
        'description' => '¿Es electricista o vende equipos de energía? Súmese a la red de electricidad.com.py y reciba pedidos de trabajo calificados en su zona.',
        'h1'          => 'Para electricistas y proveedores',
        'lead'        => 'Reciba pedidos de trabajo calificados en su zona, con foto y ubicación.',
        'stub'        => false,
        'changefreq'  => 'monthly',
        'priority'    => '0.5',
    ],

    '/electricista/' => [
        'title'       => 'Electricista en Asunción y Gran Asunción',
        'description' => 'Electricistas en Asunción, San Lorenzo, Luque, Lambaré, Fernando de la Mora, Capiatá, Ñemby y más ciudades de Central, con presupuesto previo.',
        'h1'          => 'Electricista en Asunción y Gran Asunción',
        'lead'        => 'Elija su ciudad: le cotizamos por WhatsApp antes de ir.',
        'stub'        => false,
        'changefreq'  => 'monthly',
        'priority'    => '0.8',
    ],

    '/checklist-electrico/' => [
        'title'       => 'Checklist eléctrico antes del verano',
        'description' => 'Checklist gratuito para revisar su instalación antes del verano: tablero, aire acondicionado, enchufes y respaldo para los cortes. Imprimible.',
        'h1'          => 'Checklist eléctrico antes del verano',
        'lead'        => '20 puntos para revisar su casa o negocio antes de los cortes y el calor, sin abrir el tablero.',
        'stub'        => false,
        'changefreq'  => 'yearly',
        'priority'    => '0.6',
    ],

    '/privacidad/' => [
        'title'       => 'Política de privacidad',
        'description' => 'Qué datos personales recogemos en el formulario y por WhatsApp, para qué los usamos y cómo pedir su acceso, corrección o eliminación.',
        'h1'          => 'Política de privacidad',
        'lead'        => 'Cómo tratamos los datos que nos confía.',
        'stub'        => false,
        'changefreq'  => 'yearly',
        'priority'    => '0.3',
    ],

    '/terminos/' => [
        'title'       => 'Términos de uso',
        'description' => 'Condiciones de uso de electricidad.com.py: presupuestos, calculadoras orientativas y responsabilidad de los profesionales que realizan el trabajo.',
        'h1'          => 'Términos de uso',
        'lead'        => 'Condiciones de uso del sitio y de los presupuestos.',
        'stub'        => false,
        'changefreq'  => 'yearly',
        'priority'    => '0.3',
    ],

    // Served by 404.php, not by a route file: it has no URL of its own, so it
    // is excluded from the sitemap and from the route contract.
    '/404' => [
        'title'       => 'Página no encontrada',
        'description' => 'No encontramos la página que buscaba. Vea nuestros servicios o escríbanos '
                       . 'por WhatsApp y le indicamos dónde está lo que necesita.',
        'h1'          => 'No encontramos esta página',
        'lead'        => '',
        'stub'        => false,
        'noindex'     => true,
        'changefreq'  => 'yearly',
        'priority'    => '0.1',
    ],
];

foreach ($pageSections as $pagePath => $pageExtra) {
    if (isset($pages[$pagePath]) && !empty($pageExtra['sections'])) {
        $pages[$pagePath]['sections'] = $pageExtra['sections'];
    }
}
unset($pagePath, $pageExtra, $pageSections);

return $pages;
