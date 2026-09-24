<?php
/**
 * /blog/on-grid-hibrido-u-off-grid/ — content lives in content/blog.php
 * (index record) y en $sections/$faq/$toolLink aquí.
 */

require __DIR__ . '/../../lib/bootstrap.php';

$slug = 'on-grid-hibrido-u-off-grid';

$sections = [
    [
        'h2'   => 'Tres sistemas que resuelven cosas distintas',
        'body' => [
            'Cuando alguien empieza a averiguar sobre paneles solares en Paraguay se encuentra con '
                . 'tres palabras que se usan como si fueran sinónimos: on-grid, híbrido y off-grid. '
                . 'No lo son. Cada uno resuelve un problema distinto, y confundirlos suele terminar '
                . 'en un sistema que no hace lo que el cliente esperaba, por ejemplo paneles que se '
                . 'apagan justo durante un corte de la ANDE.',
            'La diferencia no está en la marca del panel ni en la cantidad de kWp instalados, sino '
                . 'en el inversor: es la pieza que decide si el sistema puede funcionar conectado a '
                . 'la red, aislado de ella, o de las dos formas según el momento.',
        ],
    ],
    [
        'h2'   => 'Cómo funciona cada uno, en términos simples',
        'body' => [
            'El on-grid trabaja siempre conectado a la red de la ANDE: el inversor sincroniza la '
                . 'energía que generan los paneles con la de la red y, si el sistema produce de más, '
                . 'esa energía puede inyectarse a la red. No tiene baterías, así que si la ANDE corta '
                . 'el suministro, el inversor se desconecta por norma de seguridad y la casa se queda '
                . 'sin luz igual que sin paneles, aunque haya sol.',
            'El híbrido suma baterías a esa misma lógica: mientras hay red, funciona como un '
                . 'on-grid; cuando la red se corta, el inversor aísla la instalación y sigue '
                . 'alimentando los circuitos elegidos con lo que quede en la batería y lo que '
                . 'produzcan los paneles en ese momento.',
            'El off-grid no tiene conexión a la red en absoluto: toda la energía sale de los paneles '
                . 'y de un banco de baterías dimensionado para cubrir el consumo incluso en días '
                . 'nublados seguidos. Es la solución típica para una estancia sin línea de la ANDE '
                . 'cerca, no para una casa en Asunción que sí tiene el servicio.',
        ],
    ],
    [
        'h2'   => 'Comparación por criterio',
        'body' => [
            'Estos son los puntos que más pesan al momento de elegir, según lo que cada tipo de '
                . 'sistema puede y no puede hacer.',
        ],
        'items' => [
            ['title' => 'Funciona en un corte', 'text' => 'On-grid: no, se apaga con la red. '
                . 'Híbrido: sí, con los circuitos que se hayan definido como respaldados. '
                . 'Off-grid: sí, siempre, porque no depende de la red.'],
            ['title' => 'Baterías', 'text' => 'On-grid: no lleva. Híbrido: sí, dimensionadas para '
                . 'cubrir horas de corte, no todo el consumo del día. Off-grid: sí, dimensionadas '
                . 'para cubrir el consumo diario completo, con margen para días sin sol.'],
            ['title' => 'Costo relativo', 'text' => 'On-grid: el más bajo de los tres, es la base '
                . 'de un sistema solar. Híbrido: más alto que el on-grid por el inversor híbrido y '
                . 'las baterías. Off-grid: el más alto, porque el banco de baterías debe cubrir todo '
                . 'el consumo, no solo un respaldo.'],
            ['title' => 'Mantenimiento', 'text' => 'On-grid: bajo, principalmente limpieza de '
                . 'paneles. Híbrido: suma el control periódico del estado de las baterías. Off-grid: '
                . 'el más exigente, porque el sistema completo depende de que las baterías estén '
                . 'sanas.'],
            ['title' => 'Inyección a la ANDE', 'text' => 'On-grid e híbrido pueden registrarse como '
                . 'autogeneradores e inyectar excedentes a la red bajo la Ley 7599/2025, '
                . 'reglamentada por el Decreto 6034/2026; el procedimiento y los montos los define la '
                . 'reglamentación de la ANDE y nosotros coordinamos el trámite con el cliente. '
                . 'Off-grid: no aplica, al no estar conectado a la red.'],
            ['title' => 'Ideal para', 'text' => 'On-grid: casa o comercio con buen servicio de la '
                . 'ANDE que busca bajar la factura. Híbrido: quien además quiere seguir con luz '
                . 'durante los cortes. Off-grid: campo o estancia sin línea de la ANDE cerca, o con '
                . 'una línea que llega muy débil.'],
        ],
    ],
    [
        'h2'   => 'Cuándo alcanza con on-grid',
        'body' => [
            'Si el objetivo principal es reducir la factura de la ANDE y los cortes en la zona son '
                . 'poco frecuentes o breves, un sistema on-grid suele ser la opción más razonable: '
                . 'cuesta menos que un híbrido de igual potencia y no exige mantenimiento de '
                . 'baterías. La contrapartida hay que aceptarla de entrada: cuando corta la ANDE, el '
                . 'sistema se apaga con la red aunque haya sol de mediodía.',
        ],
    ],
    [
        'h2'   => 'Cuándo conviene sumar baterías (híbrido) y cuándo pasar a off-grid',
        'body' => [
            'El híbrido tiene sentido cuando los cortes de la zona son frecuentes o largos y hay '
                . 'equipos que no pueden quedar sin energía —heladera, bombeo de agua, algunos '
                . 'equipos del negocio— sin que haga falta cubrir el consumo total de la casa con '
                . 'batería, solo esos circuitos críticos durante el corte.',
            'El off-grid, en cambio, se justifica cuando no hay línea de la ANDE cerca o cuando '
                . 'conectarse a la red sale más caro que armar un sistema autónomo bien dimensionado. '
                . 'Ahí el banco de baterías no es un respaldo: es la única fuente de energía, así '
                . 'que el dimensionamiento tiene que partir del consumo real del día a día, no del '
                . 'mejor caso con sol pleno.',
        ],
    ],
];

$faq = [
    [
        'q' => '¿Un sistema on-grid da luz durante un corte de la ANDE?',
        'a' => 'No. Por norma de seguridad, el inversor on-grid se desconecta cuando se corta la '
             . 'red, así que la casa se queda sin energía aunque los paneles estén generando.',
    ],
    [
        'q' => '¿Un híbrido cubre toda la casa durante un corte?',
        'a' => 'Cubre los circuitos que se definan como respaldados, según lo que aguante el banco '
             . 'de baterías; no está pensado para sostener el consumo completo de la casa por horas.',
    ],
    [
        'q' => '¿Se puede pasar de on-grid a híbrido más adelante?',
        'a' => 'En muchos casos sí, agregando el inversor y las baterías correspondientes, pero '
             . 'conviene evaluarlo con el sistema instalado antes de decidir el cambio.',
    ],
    [
        'q' => '¿Un sistema off-grid puede conectarse después a la ANDE si llega la línea?',
        'a' => 'Es un cambio de configuración importante que requiere evaluar el equipo instalado; '
             . 'no es automático y conviene coordinarlo con el electricista.',
    ],
];

$toolLink = [
    'path'  => '/herramientas/cuanto-solar-necesito/',
    'label' => 'Calcule cuánto sistema solar necesita',
    'text'  => 'Estime la potencia y la cantidad de paneles a partir de su factura de la ANDE.',
];

require ROOT_DIR . '/templates/article.php';
