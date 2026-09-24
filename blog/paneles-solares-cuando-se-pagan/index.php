<?php
/**
 * /blog/paneles-solares-cuando-se-pagan/ — content lives in content/blog.php
 * (index record) y en $sections/$faq/$toolLink aquí.
 */

require __DIR__ . '/../../lib/bootstrap.php';

$slug = 'paneles-solares-cuando-se-pagan';

$sections = [
    [
        'h2'   => 'La pregunta detrás de toda cotización solar',
        'body' => [
            'Antes de preguntar cuánto cuesta un sistema solar, la pregunta que de verdad importa '
                . 'es cuánto tiempo tarda en pagarse solo. Un sistema instalado genera energía todos '
                . 'los meses; esa energía reemplaza la que hoy se compra a la ANDE, y ese ahorro '
                . 'mensual es lo que, acumulado, termina devolviendo la inversión inicial.',
            'El cálculo no depende de intuición: se arma con tres datos —cuánta energía genera el '
                . 'sistema, a qué tarifa se valora esa energía y cuánto costó instalarlo— y con eso '
                . 'se obtiene un plazo de recupero (payback) que sirve para comparar una cotización '
                . 'con otra.',
        ],
    ],
    [
        'h2'   => 'La fórmula, paso a paso',
        'body' => [
            'El ahorro mensual se calcula multiplicando los kWh que genera el sistema en un mes por '
                . 'la tarifa que se paga por kWh: ahorro mensual = kWh generados × tarifa. Ese '
                . 'ahorro, multiplicado por doce, da el ahorro anual.',
            'El plazo de recupero surge de dividir la inversión total entre ese ahorro anual: '
                . 'payback = inversión ÷ ahorro anual. El resultado son los años que tarda el '
                . 'sistema en devolver, en ahorro acumulado, lo que costó instalarlo.',
        ],
        'items' => [
            ['title' => 'Ahorro mensual', 'text' => 'kWh generados en el mes × tarifa por kWh.'],
            ['title' => 'Ahorro anual', 'text' => 'Ahorro mensual × 12.'],
            ['title' => 'Payback', 'text' => 'Inversión total ÷ ahorro anual, expresado en años.'],
        ],
    ],
    [
        'h2'   => 'Un ejemplo ilustrativo con números redondos',
        'body' => [
            'Para ver la fórmula funcionando, tomemos un ejemplo ilustrativo con números redondos, '
                . 'no una cotización real: un sistema que genera 500 kWh al mes y una tarifa '
                . 'promedio de G. 1.000 por kWh. El ahorro mensual sería 500 × G. 1.000 = G. '
                . '500.000, y el ahorro anual, G. 500.000 × 12 = G. 6.000.000.',
            'Si ese sistema, en este mismo ejemplo ilustrativo, costara G. 30.000.000 instalado, el '
                . 'payback sería 30.000.000 ÷ 6.000.000 = 5 años. Después de ese plazo, en este '
                . 'ejemplo, la energía generada sigue siendo ahorro, ya sin la inversión pendiente '
                . 'de recuperar.',
            'Estos números son solo para mostrar cómo se arma la cuenta: la generación real depende '
                . 'de la radiación del lugar y del tamaño del sistema, y la tarifa real es la que '
                . 'figura en el pliego tarifario vigente de la ANDE, no un promedio fijo.',
        ],
    ],
    [
        'h2'   => 'Qué cambia el resultado de un caso a otro',
        'body' => [
            'El plazo de recupero varía según cuánto consume la casa —porque eso define qué tan '
                . 'grande conviene el sistema—, según la orientación y sombra del techo, y según el '
                . 'tipo de inversor: on-grid, más simple y económico, o híbrido, que suma batería y '
                . 'cambia tanto la inversión como el ahorro posible durante un corte.',
            'Según publicaciones de prensa de 2026, los kits solares de entrada se comercializan '
                . 'desde alrededor de G. 12.500.000, y un sistema residencial completo puede rondar '
                . 'entre USD 10.000 y USD 15.000; el número que realmente aplica a una casa surge de '
                . 'medir su consumo y su techo, no de un precio de lista.',
        ],
    ],
    [
        'h2'   => 'Cómo se traduce esto en la cotización',
        'body' => [
            'Una cotización seria muestra la misma cuenta con los datos reales del caso: consumo '
                . 'mensual tomado de la factura de la ANDE, generación estimada del sistema '
                . 'propuesto y el detalle de equipo, instalación y trámite por separado, para que el '
                . 'plazo de recupero se pueda verificar y no quede como una promesa genérica.',
            'El trámite de autogeneración ante la ANDE, habilitado por la Ley 7599/2025 y su '
                . 'reglamentación (Decreto 6034/2026), también forma parte del cálculo cuando el '
                . 'sistema inyecta excedentes a la red; los pasos y las condiciones de esa inyección '
                . 'los define la reglamentación de la ANDE, y ese trámite se gestiona junto con el '
                . 'cliente.',
        ],
    ],
];

$faq = [
    [
        'q' => '¿El payback de 5 años del ejemplo aplica a cualquier casa?',
        'a' => 'No: es un ejemplo ilustrativo con números redondos para mostrar la fórmula. El '
             . 'plazo real depende del consumo de cada casa, de la tarifa vigente y del costo real '
             . 'de la instalación cotizada.',
    ],
    [
        'q' => '¿Qué pasa después de que el sistema se paga solo?',
        'a' => 'La energía generada sigue reemplazando la que se compraría a la ANDE, de modo que '
             . 'el ahorro mensual continúa sin tener ya una inversión pendiente de recuperar.',
    ],
    [
        'q' => '¿La batería cambia el cálculo del payback?',
        'a' => 'Sí: un inversor híbrido con batería aumenta la inversión inicial, aunque también '
             . 'permite usar la energía almacenada durante un corte, algo que un sistema on-grid '
             . 'simple no ofrece.',
    ],
    [
        'q' => '¿Dónde se consulta la tarifa real para hacer el cálculo?',
        'a' => 'En el pliego tarifario vigente de la ANDE, que es la fuente correcta para el valor '
             . 'del kWh en el momento de cotizar.',
    ],
];

$toolLink = [
    'path'  => '/herramientas/cuanto-solar-necesito/',
    'label' => 'Calcule su sistema solar',
    'text'  => 'A partir del consumo de su factura de la ANDE, estime la potencia en kWp y la '
             . 'cantidad de paneles que necesitaría.',
];

require ROOT_DIR . '/templates/article.php';
