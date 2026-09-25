<?php
/**
 * /blog/que-hacer-cuando-vuelve-la-luz/ — content lives in content/blog.php
 * (index record) y en $sections/$faq/$toolLink aquí.
 */

require __DIR__ . '/../../lib/bootstrap.php';

$slug = 'que-hacer-cuando-vuelve-la-luz';

$sections = [
    [
        'h2'   => 'El momento en que vuelve la luz tiene su propio riesgo',
        'body' => [
            'Durante un corte largo, la atención suele estar puesta en aguantar sin luz. Pero el '
                . 'instante en que la ANDE restablece el suministro también tiene riesgo propio: la '
                . 'red puede volver con picos y transitorios de tensión antes de estabilizarse, y si '
                . 'quedaron muchos equipos conectados, todos intentan arrancar al mismo tiempo.',
            'Eso incluye motores que exigen bastante en el arranque, como el compresor de la '
                . 'heladera o el del aire acondicionado, que además pueden coincidir arrancando juntos '
                . 'justo cuando la tensión todavía no terminó de normalizarse.',
        ],
    ],
    [
        'h2'   => 'Qué conviene dejar desconectado antes de que vuelva la luz',
        'body' => [
            'Si el corte se veía venir o ya lleva un buen rato, desconectar de la toma los equipos '
                . 'electrónicos sensibles —televisor, computadora, router— reduce la exposición a un '
                . 'pico al momento del restablecimiento. Es más simple hacerlo apenas empieza el corte '
                . 'que correr a desenchufar todo cuando ya se escucha que la luz volvió.',
            'Los artefactos con motor, como el aire acondicionado, conviene dejarlos apagados desde '
                . 'su propio control, no solo desde la toma, para que no intenten arrancar de forma '
                . 'automática apenas hay tensión disponible.',
        ],
        'items' => [
            ['title' => 'Electrónica sensible', 'text' => 'Televisor, computadora, router: '
                . 'desconectar de la toma reduce la exposición a un pico al restablecerse el '
                . 'suministro.'],
            ['title' => 'Aire acondicionado', 'text' => 'Apagarlo desde el control antes de que '
                . 'vuelva la luz, para que no arranque de golpe junto con el resto de la casa.'],
            ['title' => 'Heladera', 'text' => 'No hace falta desconectarla, pero conviene saber que '
                . 'su compresor también exige un pico de corriente al arrancar.'],
        ],
    ],
    [
        'h2'   => 'Por qué conviene esperar antes de encender el aire acondicionado',
        'body' => [
            'El compresor de un equipo de aire acondicionado necesita un momento de estabilización '
                . 'antes de volver a arrancar sin forzarse; encenderlo de inmediato apenas vuelve la '
                . 'luz, sobre todo si se apagó y se prendió varias veces seguidas por microcortes, '
                . 'exige al compresor más de lo habitual. Esperar unos minutos antes de encenderlo es '
                . 'una precaución simple que reduce ese esfuerzo.',
        ],
    ],
    [
        'h2'   => 'Baja tensión: el otro problema de la temporada',
        'body' => [
            'No todos los cortes son totales: en muchos casos la red vuelve con una tensión más baja '
                . 'de la normal durante un tiempo, sobre todo en horas pico de consumo. Un motor que '
                . 'funciona con tensión insuficiente exige más corriente para entregar la misma '
                . 'potencia, lo que lo calienta de más y puede acortar su vida útil si la situación se '
                . 'repite seguido.',
            'Si nota que las luces quedan tenues, que un ventilador gira más lento de lo normal o que '
                . 'el aire acondicionado tarda en arrancar después de un corte, puede tratarse de baja '
                . 'tensión y no de una falla del equipo en sí.',
        ],
    ],
    [
        'h2'   => 'Cuándo un disyuntor que vuelve a saltar significa llamar a un electricista',
        'body' => [
            'Es habitual que, al restablecerse muchos equipos a la vez, algún disyuntor salte una '
                . 'vez; suele bastar con volver a subirlo desde afuera del tablero. Lo que no es '
                . 'normal es que el mismo disyuntor salte de nuevo apenas se lo sube, o que salte cada '
                . 'vez que se conecta un equipo puntual: eso indica una falla en ese circuito, no una '
                . 'casualidad del reinicio.',
            'En ese caso, lo correcto es dejar el disyuntor bajado y llamar a un electricista, en '
                . 'lugar de insistir en subirlo. Manipular el interior del tablero, cambiar el '
                . 'disyuntor o intentar ubicar la falla por cuenta propia no es seguro y le corresponde '
                . 'a un electricista matriculado.',
        ],
    ],
];

$faq = [
    [
        'q' => '¿Por qué conviene desconectar equipos electrónicos durante el corte y no esperar a que vuelva la luz?',
        'a' => 'Porque el riesgo de sobretensión aparece justo en el momento en que se restablece el '
             . 'suministro; desconectarlos antes evita tener que correr a hacerlo cuando ya volvió.',
    ],
    [
        'q' => '¿Cuánto hay que esperar para encender el aire acondicionado después de un corte?',
        'a' => 'Unos minutos, para que el compresor no vuelva a arrancar de inmediato después de '
             . 'haberse apagado, sobre todo si hubo varios microcortes seguidos.',
    ],
    [
        'q' => '¿Qué es la baja tensión y cómo se nota?',
        'a' => 'Es cuando la red entrega menos tensión de la normal, algo que se nota en luces '
             . 'tenues o motores que arrancan con más esfuerzo de lo habitual, y que exige más '
             . 'corriente a los equipos para la misma potencia.',
    ],
    [
        'q' => '¿Qué hago si un disyuntor salta otra vez apenas lo subo?',
        'a' => 'Dejarlo bajado y llamar a un electricista: que vuelva a saltar de inmediato indica '
             . 'una falla en ese circuito, no un simple reinicio tras el corte.',
    ],
];

$toolLink = [
    'path'  => '/herramientas/que-ups-necesito/',
    'label' => 'Vea qué equipo evita estos sustos',
    'text'  => 'Revise si un estabilizador o un UPS le conviene para los equipos que más sufren con '
             . 'los picos al volver la luz.',
];

require ROOT_DIR . '/templates/article.php';
