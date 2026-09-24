<?php
/**
 * /blog/tarifa-ande-explicada/ — content lives in content/blog.php (index
 * record) y en $sections/$faq/$toolLink aquí.
 */

require __DIR__ . '/../../lib/bootstrap.php';

$slug = 'tarifa-ande-explicada';

$sections = [
    [
        'h2'   => 'Por qué la factura no sube en línea recta',
        'body' => [
            'Muchas personas asumen que la factura de la ANDE sube proporcionalmente al consumo: '
                . 'el doble de kWh, el doble de guaraníes. En realidad la tarifa residencial está '
                . 'organizada por bloques de consumo, de modo que el precio por kWh puede cambiar '
                . 'según en qué bloque cae cada tramo de energía consumida en el mes.',
            'Eso explica por qué dos meses con consumos distintos no suben o bajan en la misma '
                . 'proporción: no solo cambia cuánta energía se usó, sino en qué bloques de la '
                . 'estructura tarifaria cayó ese consumo.',
        ],
    ],
    [
        'h2'   => 'Qué es un bloque de consumo',
        'body' => [
            'La estructura por bloques divide el consumo mensual en tramos, y cada tramo puede '
                . 'tener un valor por kWh distinto. Es un esquema habitual en tarifas eléctricas '
                . 'residenciales de la región, pensado para que el costo por unidad de energía '
                . 'refleje de forma distinta el consumo básico y el consumo por encima de cierto '
                . 'umbral.',
            'Los valores exactos de cada bloque, y los umbrales que los separan, los define la '
                . 'ANDE y cambian según la categoría tarifaria del suministro; para el monto vigente '
                . 'de cada bloque, consulte el pliego tarifario vigente de la ANDE, que es la fuente '
                . 'oficial y actualizada.',
        ],
    ],
    [
        'h2'   => 'El IVA y otros conceptos de la factura',
        'body' => [
            'Al valor de la energía consumida se suma el IVA, que es un impuesto sobre el monto '
                . 'facturado y no parte de la tarifa eléctrica en sí. También pueden figurar cargos '
                . 'fijos o conceptos administrativos según el tipo de suministro y la categoría del '
                . 'medidor.',
            'Por eso el total de la factura combina dos cosas distintas: la estructura tarifaria '
                . 'por bloques que fija la ANDE, y los impuestos que se aplican sobre ese monto; '
                . 'confundir ambos conceptos es una de las causas más comunes de no entender por qué '
                . 'sube la factura.',
        ],
    ],
    [
        'h2'   => 'Categorías tarifarias: no toda factura es igual',
        'body' => [
            'La ANDE clasifica los suministros en categorías —residencial, comercial, industrial, '
                . 'entre otras— y cada categoría tiene su propia estructura de bloques y sus propios '
                . 'valores por kWh. Una vivienda y un local comercial con el mismo consumo en kWh no '
                . 'necesariamente pagan el mismo monto, porque están en categorías distintas del '
                . 'pliego tarifario.',
            'Esa categoría figura en la factura y es un dato clave al comparar el consumo propio con '
                . 'el de otra vivienda o negocio: sin saber en qué categoría está cada suministro, la '
                . 'comparación entre dos facturas puede llevar a conclusiones equivocadas.',
        ],
    ],
    [
        'h2'   => 'Cómo afecta la estructura tarifaria a la autogeneración',
        'body' => [
            'Cuando una vivienda o un negocio instala paneles solares y se registra como '
                . 'autogenerador ante la ANDE, conforme a la Ley 7599/2025 y su reglamentación '
                . '(Decreto 6034/2026), la energía que deja de comprar a la red se valora también '
                . 'según la estructura tarifaria vigente, no según un precio fijo asumido de '
                . 'antemano.',
            'Por eso, al estimar el ahorro de un sistema solar, conviene partir del pliego '
                . 'tarifario vigente y de la categoría real del suministro, en lugar de un promedio '
                . 'genérico que puede no corresponder al caso concreto.',
        ],
    ],
    [
        'h2'   => 'Qué mirar en su propia factura',
        'body' => [
            'La factura de la ANDE detalla el consumo del período en kWh, la categoría tarifaria '
                . 'del suministro (residencial, comercial, entre otras) y el desglose de lo '
                . 'facturado. Leer ese desglose, en lugar de mirar solo el total, es lo que permite '
                . 'entender si el aumento vino de mayor consumo, de un cambio de bloque o de un '
                . 'ajuste en el pliego tarifario.',
            'Esa lectura también es el punto de partida para cualquier evaluación de ahorro '
                . '—iluminación LED, autogeneración solar— porque el consumo real de la factura es '
                . 'el dato con el que se calcula cuánto se puede reducir.',
        ],
    ],
];

$faq = [
    [
        'q' => '¿Por qué la factura sube más que proporcional al consumo?',
        'a' => 'Porque la tarifa está organizada por bloques de consumo, y el kWh consumido en un '
             . 'bloque más alto puede tener un valor distinto al del bloque anterior.',
    ],
    [
        'q' => '¿Dónde se consulta el valor exacto de cada bloque?',
        'a' => 'En el pliego tarifario vigente de la ANDE, que es la fuente oficial para los '
             . 'montos y umbrales actualizados de cada categoría.',
    ],
    [
        'q' => '¿El IVA forma parte de la tarifa eléctrica?',
        'a' => 'No: es un impuesto que se aplica sobre el monto facturado, separado de la '
             . 'estructura de bloques que define el valor de la energía consumida.',
    ],
];

$toolLink = [
    'path'  => '/herramientas/consumo-electrico/',
    'label' => 'Estime su consumo mensual',
    'text'  => 'Sume los artefactos de su casa y compare el consumo estimado con lo que figura en '
             . 'su factura de la ANDE.',
];

require ROOT_DIR . '/templates/article.php';
