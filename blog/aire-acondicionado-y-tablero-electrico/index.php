<?php
/**
 * /blog/aire-acondicionado-y-tablero-electrico/ — content lives in
 * content/blog.php (index record) y en $sections/$faq/$toolLink aquí.
 */

require __DIR__ . '/../../lib/bootstrap.php';

$slug = 'aire-acondicionado-y-tablero-electrico';

$sections = [
    [
        'h2'   => 'Por qué un split nuevo hace saltar el disyuntor',
        'body' => [
            'El arranque de un compresor de aire acondicionado exige, por un instante, bastante '
                . 'más corriente que la que consume el equipo en marcha. Si la línea que llega a ese '
                . 'punto ya está compartida con otros artefactos, o si el disyuntor termomagnético '
                . 'quedó dimensionado para una casa con menos carga, ese pico de arranque es '
                . 'suficiente para que la protección corte el circuito.',
            'No es una falla del equipo nuevo: es la instalación existente mostrando que fue '
                . 'pensada para otra carga. Por eso, antes de instalar un split o un equipo central, '
                . 'conviene revisar el tablero en lugar de asumir que "entra" porque hay un '
                . 'tomacorriente cerca.',
        ],
    ],
    [
        'h2'   => 'Qué mira el electricista antes de conectar el equipo',
        'body' => [
            'La instalación de un aire acondicionado empieza por el tablero, no por la pared donde '
                . 'va el equipo. Se revisa si conviene un circuito dedicado —una línea propia, con '
                . 'su propio disyuntor— en lugar de sumar el consumo a un circuito que ya alimenta '
                . 'otros artefactos, y se verifica que la sección del cable en mm² soporte la '
                . 'corriente del equipo sin calentarse.',
            'También se confirma que exista un diferencial (DDR) que proteja esa línea y, en casas '
                . 'con instalación más antigua, el estado de la puesta a tierra, porque un equipo de '
                . 'aire acondicionado con gabinete metálico depende de esa tierra para ser seguro '
                . 'ante una falla interna.',
        ],
        'items' => [
            ['title' => 'Circuito dedicado', 'text' => 'Una línea propia para el equipo, sin '
                . 'compartir disyuntor con otros artefactos de alto consumo.'],
            ['title' => 'Sección del cable', 'text' => 'Calculada para la corriente real del '
                . 'equipo, no para el mínimo que ya estaba instalado.'],
            ['title' => 'Diferencial y tierra', 'text' => 'Protección que corta ante una fuga y '
                . 'jabalina en buen estado para equipos con gabinete metálico.'],
        ],
    ],
    [
        'h2'   => 'Monofásico o trifásico: cuándo importa la diferencia',
        'body' => [
            'La mayoría de las viviendas trabaja en 220 V monofásico, suficiente para uno o varios '
                . 'splits residenciales. Cuando se suman varios equipos grandes —un local comercial, '
                . 'un consorcio con climatización central— la carga total puede justificar pasar a '
                . '380 V trifásico, que reparte mejor la corriente entre las tres fases y reduce la '
                . 'exigencia sobre cada línea individual.',
            'Esa decisión se toma con el electricista, mirando la suma real de equipos a instalar, '
                . 'no equipo por equipo, porque una instalación bien pensada desde el principio '
                . 'evita tener que rehacer el tablero cada vez que se agrega un aire acondicionado '
                . 'más.',
        ],
    ],
    [
        'h2'   => 'Equipos centrales frente a splits individuales',
        'body' => [
            'Un solo split cambia poco la carga total de una casa, pero un sistema de aire '
                . 'acondicionado central, o varios splits sumados en una vivienda o un local, sí '
                . 'pueden acercarse al límite de lo que la instalación original fue pensada para '
                . 'sostener. En esos casos, la evaluación del tablero deja de ser un trámite rápido y '
                . 'pasa a ser un rediseño parcial de los circuitos.',
            'Un electricista con experiencia en instalaciones residenciales y comerciales suma la '
                . 'carga de todos los equipos que se planean instalar, actuales y futuros, antes de '
                . 'decidir si conviene reforzar la acometida, redistribuir circuitos existentes o '
                . 'directamente ampliar el tablero.',
        ],
    ],
    [
        'h2'   => 'Qué queda documentado después de la instalación',
        'body' => [
            'Al terminar, corresponde un informe escrito con garantía por escrito de lo realizado: '
                . 'qué circuito se instaló, qué protección se sumó y qué se verificó en el tablero. '
                . 'Ese documento sirve tanto para un reclamo de garantía del equipo como para '
                . 'cualquier trabajo eléctrico futuro en la misma casa.',
            'El presupuesto, además, detalla materiales y mano de obra por separado, de forma que '
                . 'quede claro qué parte corresponde al circuito eléctrico y qué parte a la '
                . 'instalación del equipo en sí.',
        ],
    ],
];

$faq = [
    [
        'q' => '¿Todo aire acondicionado necesita un circuito dedicado?',
        'a' => 'Depende de la carga que ya tenga esa línea y de la potencia del equipo; un '
             . 'electricista lo determina revisando el tablero, no a simple vista.',
    ],
    [
        'q' => '¿Por qué salta el disyuntor solo al arrancar el equipo?',
        'a' => 'Porque el compresor exige un pico de corriente al encender, más alto que su '
             . 'consumo en régimen; si la protección está justa, ese pico la hace disparar.',
    ],
    [
        'q' => '¿Se puede instalar un split sin tocar el tablero?',
        'a' => 'A veces sí, si la línea existente tiene margen; pero conviene que lo confirme un '
             . 'electricista antes, porque forzar una línea ya cargada es lo que después provoca '
             . 'cortocircuitos o recalentamiento del cableado.',
    ],
];

$toolLink = [
    'path'  => '/herramientas/consumo-electrico/',
    'label' => 'Estime el consumo del equipo',
    'text'  => 'Calcule cuánto suma un aire acondicionado al consumo mensual de la casa antes de '
             . 'decidir el circuito que necesita.',
];

require ROOT_DIR . '/templates/article.php';
