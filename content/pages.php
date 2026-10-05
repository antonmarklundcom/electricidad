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
        'title'       => 'Electricidad en Paraguay | Electricidad PY',
        'description' => 'Electricidad en Paraguay: encuentre información sobre instalaciones, reparaciones, paneles solares y respaldo. Prepare su consulta para hogar o negocio.',
        'h1'          => '',
        'lead'        => '',
        'faq' => [
            ['q' => '¿Electricidad PY realiza los trabajos?', 'a' => 'Esta versión ofrece orientación, guías y calculadoras. El operador y los prestadores para recibir consultas todavía están pendientes de confirmación.'],
            ['q' => '¿Preparar el resumen envía mis datos?', 'a' => 'No. En el modo de preparación el texto queda en su navegador, sin envío, cuenta ni reserva. Usted decide con quién compartirlo.'],
            ['q' => '¿Hay atención urgente o 24 horas?', 'a' => 'No hay disponibilidad urgente ni atención 24 horas confirmada. No espere una respuesta de este sitio ante un riesgo inmediato.'],
            ['q' => '¿Las calculadoras dan un presupuesto?', 'a' => 'No. Producen estimaciones orientativas; un prestador debe evaluar el caso y confirmar equipos, instalación y precio.'],
            ['q' => '¿Hay cuotas o planes de mantenimiento?', 'a' => 'Hay información para preparar estas consultas. No se ofrecen créditos, cuotas ni contratos de mantenimiento con condiciones confirmadas.'],
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
        'description' => 'Qué revisar en una cotización de electricidad: alcance, materiales, mano de obra, evaluación, traslado y condiciones. No hay precios confirmados.',
        'h1'          => 'Cómo cotizamos',
        'lead'        => 'Qué debe quedar claro antes de aprobar una cotización.',
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
        'description' => 'Guías claras sobre cortes de luz, disyuntores, la factura de la ANDE, generadores y paneles solares en Paraguay, para preparar una consulta.',
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
        'description' => 'Prepare su consulta de electricidad: necesidad, ciudad y descripción. Conozca el estado de la atención y qué confirmar antes de contratar.',
        'h1'          => '',
        'lead'        => '',
        'stub'        => false,
        'changefreq'  => 'yearly',
        'priority'    => '0.8',
    ],

    '/profesionales/' => [
        'title'       => 'Para electricistas y proveedores',
        'description' => 'Propuesta para electricistas y proveedores: conozca el estado de una futura colaboración. No hay una red ni recepción de solicitudes confirmadas.',
        'h1'          => 'Para electricistas y proveedores',
        'lead'        => 'La propuesta de colaboración y la recepción de profesionales están pendientes de confirmación.',
        'stub'        => false,
        'changefreq'  => 'monthly',
        'priority'    => '0.5',
    ],

    '/electricista/' => [
        'title'       => 'Electricista en Asunción y Gran Asunción',
        'description' => 'Información por ciudad para consultas de electricidad: Asunción y otras zonas de Paraguay. La presencia de una página no confirma cobertura de atención.',
        'h1'          => 'Electricista en Asunción y Gran Asunción',
        'lead'        => 'Elija su ciudad como referencia. La cobertura debe confirmarse con un prestador.',
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
