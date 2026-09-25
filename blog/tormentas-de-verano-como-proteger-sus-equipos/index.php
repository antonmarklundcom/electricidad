<?php
/**
 * /blog/tormentas-de-verano-como-proteger-sus-equipos/ — content lives in
 * content/blog.php (index record) y en $sections/$faq/$toolLink aquí.
 */

require __DIR__ . '/../../lib/bootstrap.php';

$slug = 'tormentas-de-verano-como-proteger-sus-equipos';

$sections = [
    [
        'h2'   => 'Lo que una tormenta le hace a la instalación',
        'body' => [
            'Una tormenta de verano no solo corta el suministro: un rayo que cae cerca de la línea, '
                . 'aunque no impacte directamente en la casa, puede inducir una sobretensión que viaja '
                . 'por el cableado de la ANDE hasta el tablero. Lo mismo pasa cuando la red se '
                . 'restablece después del corte y llega con oscilaciones antes de estabilizarse.',
            'Esos picos duran una fracción de segundo, pero alcanzan para dañar la electrónica de un '
                . 'televisor, un router o el módulo de control de un equipo de aire acondicionado, '
                . 'aunque el resto de la instalación no muestre ningún problema visible.',
        ],
    ],
    [
        'h2'   => 'Qué hace un protector contra sobretensiones (DPS) y qué no',
        'body' => [
            'El DPS es un dispositivo que se instala dentro del tablero y que desvía a tierra el '
                . 'exceso de tensión antes de que llegue a los circuitos de la casa. Es una protección '
                . 'para los equipos conectados, no para las personas: esa función la cumple el '
                . 'disyuntor diferencial.',
            'Lo que el DPS no hace es dejar la instalación inmune a cualquier evento: absorbe picos '
                . 'de tensión dentro de un rango, no un impacto directo de rayo sobre la línea, y solo '
                . 'funciona correctamente si la puesta a tierra a la que está conectado está en buen '
                . 'estado. Un DPS sin una tierra confiable pierde buena parte de su utilidad.',
            'Instalarlo, revisarlo o reemplazarlo después de que haya actuado es trabajo dentro del '
                . 'tablero y le corresponde a un electricista matriculado.',
        ],
    ],
    [
        'h2'   => 'La puesta a tierra, la base de toda protección',
        'body' => [
            'Antes de pensar en un DPS, conviene que la jabalina de puesta a tierra esté en buen '
                . 'estado y bien conectada: es el camino por el que se descarga la sobretensión que el '
                . 'DPS desvía y también lo que hace que el diferencial funcione como corresponde ante '
                . 'una fuga de corriente. Una tierra deteriorada o mal dimensionada deja sin efecto '
                . 'buena parte de las demás protecciones, por más equipos que se sumen en el tablero.',
        ],
    ],
    [
        'h2'   => 'El diferencial no reemplaza al DPS, y el DPS no reemplaza al diferencial',
        'body' => [
            'Son dos protecciones distintas para dos riesgos distintos. El disyuntor diferencial '
                . '(DDR) corta el circuito cuando detecta una fuga de corriente hacia tierra, y su '
                . 'función es proteger a las personas de una descarga. El DPS desvía sobretensiones '
                . 'transitorias para proteger los equipos conectados. Una instalación preparada para '
                . 'la temporada de tormentas necesita las dos, no una en lugar de la otra.',
        ],
    ],
    [
        'h2'   => 'Qué puede hacer usted durante la tormenta',
        'body' => [
            'Mientras dura la tormenta, lo más simple y efectivo es desconectar de la toma los '
                . 'equipos electrónicos sensibles —televisor, computadora, router— en lugar de confiar '
                . 'solo en la protección del tablero. Es un gesto de un minuto que evita la exposición '
                . 'directa si la sobretensión supera lo que cualquier protección puede absorber.',
            'Para los equipos que conviene mantener funcionando o que no se pueden desconectar '
                . 'fácilmente, un UPS o un estabilizador agregan una capa adicional de protección frente '
                . 'a variaciones de tensión, aunque no sustituyen al DPS ni a la puesta a tierra de la '
                . 'instalación.',
            'Lo que no corresponde hacer, ni durante la tormenta ni después, es abrir el tablero o '
                . 'manipular las conexiones: cualquier revisión o intervención ahí dentro es trabajo de '
                . 'un electricista matriculado.',
        ],
    ],
];

$faq = [
    [
        'q' => '¿Un rayo tiene que caer en mi casa para dañar mis equipos?',
        'a' => 'No necesariamente: una caída cercana puede inducir una sobretensión que viaja por la '
             . 'línea de la ANDE hasta el tablero, sin que haya un impacto directo sobre la vivienda.',
    ],
    [
        'q' => '¿El DPS protege contra un impacto directo de rayo?',
        'a' => 'El DPS está pensado para picos de tensión transitorios, no para un impacto directo '
             . 'sobre la línea; su eficacia también depende de que la puesta a tierra esté en buen '
             . 'estado.',
    ],
    [
        'q' => '¿El diferencial protege mis equipos de una sobretensión?',
        'a' => 'No: el diferencial protege a las personas ante una fuga de corriente. La protección '
             . 'de los equipos frente a sobretensiones es función del DPS.',
    ],
    [
        'q' => '¿Puedo instalar un DPS yo mismo en el tablero?',
        'a' => 'No: es un trabajo dentro del tablero y debe hacerlo un electricista matriculado, igual '
             . 'que su revisión o reemplazo después de que haya actuado.',
    ],
];

$toolLink = [
    'path'  => '/herramientas/que-ups-necesito/',
    'label' => 'Vea qué equipo protege sus electrónicos',
    'text'  => 'Revise si lo que necesita para sus equipos sensibles es un estabilizador o un UPS '
             . 'con batería.',
];

require ROOT_DIR . '/templates/article.php';
