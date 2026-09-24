<?php
/**
 * Article index. The body of each article lives in its own
 * /blog/<slug>/index.php, rendered through templates/article.php; this file is
 * the index that the blog listing, the sitemap and the route contract read.
 *
 *   slug         string   directory name under /blog/
 *   title        string   H1 and card title — may run longer than the <title>
 *   seoTitle     string   <title>, <= 41 chars so it fits the 60-char budget
 *                         with the ' | <site name>' suffix; '' falls back to title
 *   description  string   meta description, 120–155 chars, unique site-wide
 *   date         string   YYYY-MM-DD, publication date
 *   updated      ?string  YYYY-MM-DD, when meaningfully revised
 *   tags         string[] free-form
 *   service      ?string  slug of the service this article links to — it also
 *                         decides the article's WhatsApp prefill and tier
 *   example      bool     seed record only — see content/services.php
 */

declare(strict_types=1);

return [
    [
        'slug'        => 'temporada-de-cortes-como-preparar-su-casa',
        'title'       => 'Temporada de cortes: cómo preparar su casa antes del verano',
        'seoTitle'    => 'Preparar la casa para cortes de luz',
        'description' => 'Qué revisar en el tablero y en la instalación antes de que empiecen los '
                       . 'cortes de verano, y cuándo conviene sumar un generador de respaldo.',
        'date'        => '2026-08-24',
        'updated'     => null,
        'tags'        => ['Cortes de luz', 'Verano', 'Prevención'],
        'service'     => 'generadores',
    ],
    [
        'slug'        => 'aire-acondicionado-y-tablero-electrico',
        'title'       => 'Aire acondicionado y tablero eléctrico: lo que hay que revisar antes de instalar',
        'seoTitle'    => 'Aire acondicionado y su tablero',
        'description' => 'Por qué un split nuevo puede hacer saltar el disyuntor y qué revisa el '
                       . 'electricista en el tablero antes de conectar un equipo de aire acondicionado.',
        'date'        => '2026-08-29',
        'updated'     => null,
        'tags'        => ['Aire acondicionado', 'Tablero eléctrico'],
        'service'     => 'instalacion-aire-acondicionado',
    ],
    [
        'slug'        => 'paneles-solares-cuando-se-pagan',
        'title'       => 'Paneles solares: cuándo se pagan solos',
        'seoTitle'    => 'Paneles solares: cuándo se pagan',
        'description' => 'Cómo se calcula el retorno de una instalación solar: ahorro mensual, '
                       . 'plazo de recupero y un ejemplo ilustrativo con números redondos.',
        'date'        => '2026-09-02',
        'updated'     => null,
        'tags'        => ['Paneles solares', 'Ahorro', 'Autogeneración'],
        'service'     => 'paneles-solares',
    ],
    [
        'slug'        => 'mantenimiento-del-generador',
        'title'       => 'Mantenimiento del generador: lo que evita que falle cuando más se lo necesita',
        'seoTitle'    => 'Mantenimiento del generador',
        'description' => 'La revisión periódica que mantiene un generador listo para el corte: '
                       . 'aceite, batería, combustible y la prueba de arranque bajo carga.',
        'date'        => '2026-09-07',
        'updated'     => null,
        'tags'        => ['Generadores', 'Mantenimiento'],
        'service'     => 'generadores',
    ],
    [
        'slug'        => 'led-vs-incandescente-cuanto-ahorra',
        'title'       => 'LED contra incandescente: cuánto cambia en la factura',
        'seoTitle'    => 'LED vs incandescente: el ahorro',
        'description' => 'Por qué el LED consume menos vatios para la misma luz y cómo estimar '
                       . 'cuánto baja el consumo de un hogar al cambiar la iluminación.',
        'date'        => '2026-09-10',
        'updated'     => null,
        'tags'        => ['Iluminación LED', 'Ahorro'],
        'service'     => 'iluminacion-led',
    ],
    [
        'slug'        => 'tarifa-ande-explicada',
        'title'       => 'Cómo está armada la tarifa de la ANDE',
        'seoTitle'    => 'Cómo está armada la tarifa ANDE',
        'description' => 'La estructura por bloques de consumo y el IVA que forman la factura de '
                       . 'la ANDE, para entender qué mueve el monto de un mes a otro.',
        'date'        => '2026-09-14',
        'updated'     => null,
        'tags'        => ['ANDE', 'Factura'],
        'service'     => 'medidor-ande-tramites',
    ],
    [
        'slug'        => 'cargar-auto-electrico-en-casa',
        'title'       => 'Cargar el auto eléctrico en casa: qué necesita la instalación',
        'seoTitle'    => 'Cargar el auto eléctrico en casa',
        'description' => 'Qué exige un cargador doméstico de la instalación existente y por qué '
                       . 'conviene una evaluación antes de comprar el equipo.',
        'date'        => '2026-09-18',
        'updated'     => null,
        'tags'        => ['Autos eléctricos', 'Cargadores'],
        'service'     => 'cargadores-vehiculos-electricos',
    ],
    [
        'slug'        => 'como-se-arma-el-presupuesto-de-un-electricista',
        'title'       => 'Cómo se arma el presupuesto de un electricista',
        'seoTitle'    => 'Cómo se arma un presupuesto eléctrico',
        'description' => 'Las partes que componen una cotización eléctrica: visita, materiales, '
                       . 'mano de obra e imprevistos, y por qué conviene pedirla detallada.',
        'date'        => '2026-09-22',
        'updated'     => null,
        'tags'        => ['Presupuesto', 'Electricista'],
        'service'     => 'instalacion-electrica-residencial',
    ],
];
