<?php
/**
 * The tool pages under /herramientas/, keyed by slug — same shape discipline as
 * content/services.php: fill every key, never rename or remove one.
 *
 *   path             string   URL, trailing slash
 *   title            string   the tool's concept, used as the title fallback
 *   navLabel         string   short label for the hub, the nav and the footer
 *   seoTitle         string   <title> without the site suffix, <= 41 chars
 *   metaDescription  string   120–155 chars, unique across the whole site
 *   hero             array    eyebrow, h1, lead
 *   intro            string[] 200–300 words of copy, readable without JS
 *   faq              array    [['q' => ..., 'a' => ...], ...] → FAQPage JSON-LD
 *   related          string[] related service slugs (content/services.php)
 *   ctaWhatsapp      string   kept EMPTY: every wa.me prefill comes from
 *                             content/lead-values.php through
 *                             whatsapp_text_for_page(). The key exists so the
 *                             record shape is stable.
 *   formNeed         string   pre-selected chip key in content/ui.php 'needs'
 *   analyticsTool    string   tool_used event name (assets/js/analytics.js)
 *
 * The calculator markup itself lives in each tool's own route file, which builds
 * it into $toolCalcHtml and requires templates/tool.php; the arithmetic lives in
 * assets/js/tools/<slug>.js and reads its rules from window.Market.
 *
 * Every tool slug also needs a record in content/lead-values.php.
 */

declare(strict_types=1);

return [

    'cuanto-solar-necesito' => [
        'path'            => '/herramientas/cuanto-solar-necesito/',
        'title'           => 'Calculadora de paneles solares',
        'navLabel'        => '¿Cuántos paneles solares necesito?',
        'seoTitle'        => '¿Cuántos paneles solares necesito?',
        'metaDescription' => 'Calcule los kWp, la cantidad de paneles y el techo que necesita según su '
                           . 'factura de la ANDE, y en cuántos años se paga el sistema solar.',
        'hero' => [
            'eyebrow' => 'Calculadora solar',
            'h1'      => '¿Cuántos paneles solares necesito para mi casa?',
            'lead'    => 'Con el consumo de su factura de la ANDE, en un minuto: potencia del sistema, '
                       . 'paneles, superficie de techo y ahorro estimado.',
        ],
        'intro' => [
            'El tamaño de un sistema solar no se elige por la cantidad de paneles que entran en el '
                . 'techo, sino por la energía que usted consume. Ese dato está en su factura de la ANDE: '
                . 'es el consumo del mes en kWh. Conviene mirar varios meses, porque en verano, con el aire '
                . 'acondicionado, el consumo puede duplicar al de invierno.',
            'La cuenta es sencilla: cada kWp de paneles instalado en Asunción genera en promedio unos '
                . '115 kWh por mes, considerando las horas solares pico de la zona y las pérdidas normales '
                . 'por temperatura, cableado e inversor. Dividiendo la parte del consumo que quiere cubrir '
                . 'por esa generación se obtiene la potencia del sistema, y de ahí la cantidad de paneles '
                . 'de 550 W y la superficie aproximada de techo.',
            'Si ingresa el monto de su factura, estimamos cuánto dejaría de pagar por mes. Y si ya tiene un '
                . 'presupuesto, calculamos en cuántos años se paga la inversión. Con la Ley 7599/2025 y su '
                . 'reglamentación, además, los excedentes se pueden inyectar a la red de la ANDE como '
                . 'autogenerador, lo que mejora el retorno de un sistema conectado a la red.',
            'El resultado es un punto de partida: la orientación del techo, las sombras, el tipo de '
                . 'estructura y si quiere baterías cambian el diseño. Por eso, con este resultado, le '
                . 'armamos un presupuesto con fotos de su techo y sus facturas.',
        ],
        'faq' => [
            [
                'q' => '¿Dónde veo mi consumo en kWh?',
                'a' => 'En la factura de la ANDE figura la lectura anterior, la lectura actual y la '
                     . 'diferencia: ese es su consumo del mes en kWh. Si puede, promedie los últimos doce '
                     . 'meses para no dimensionar solo con un mes de verano o de invierno.',
            ],
            [
                'q' => '¿Conviene cubrir el 100 % del consumo?',
                'a' => 'No siempre. Cubrir alrededor del 80 % suele dar el mejor retorno, porque la parte '
                     . 'más cara de la factura es la que corresponde a los consumos más altos. Depende de '
                     . 'su tarifa, de su techo y de si piensa inyectar excedentes a la red.',
            ],
            [
                'q' => '¿Los paneles funcionan durante un corte de luz?',
                'a' => 'Un sistema conectado a la red (on-grid) se apaga durante un corte por seguridad. '
                     . 'Para tener energía en un corte hace falta un inversor híbrido con baterías.',
            ],
            [
                'q' => '¿Cuánto cuesta el sistema que me da la calculadora?',
                'a' => 'Depende de la marca de los paneles y el inversor, la estructura y si lleva baterías. '
                     . 'Mándenos el resultado y sus facturas por WhatsApp y le enviamos un presupuesto '
                     . 'detallado, sin cargo.',
            ],
        ],
        'related'       => ['paneles-solares', 'baterias-respaldo', 'medidor-ande-tramites'],
        'ctaWhatsapp'   => '',
        'formNeed'      => 'solar',
        'analyticsTool' => 'cuanto_solar_necesito',
    ],

    'que-generador-necesito' => [
        'path'            => '/herramientas/que-generador-necesito/',
        'title'           => 'Calculadora de generador',
        'navLabel'        => '¿Qué generador necesito?',
        'seoTitle'        => '¿Qué generador necesito? Calculadora',
        'metaDescription' => 'Marque los equipos que quiere usar durante un corte de luz y calcule los kVA '
                           . 'del generador, el pico de arranque y el consumo de combustible.',
        'hero' => [
            'eyebrow' => 'Calculadora de generador',
            'h1'      => '¿Qué generador necesito para mi casa o mi negocio?',
            'lead'    => 'Elija los equipos que quiere mantener funcionando durante un corte y le decimos '
                       . 'cuántos kVA necesita.',
        ],
        'intro' => [
            'El error más común al comprar un generador es sumar los watts de los equipos y comprar uno '
                . 'apenas más grande. Funciona hasta que arranca la heladera, la bomba de agua o el aire '
                . 'acondicionado: los motores y compresores piden en el arranque hasta tres veces su '
                . 'potencia normal durante un instante, y un generador justo se frena o se apaga.',
            'Esta calculadora suma la potencia en marcha de lo que usted marque, le agrega el pico de '
                . 'arranque del motor más grande (en una casa los motores arrancan de a uno) y un margen '
                . 'del 25 % para que el equipo no trabaje al límite. Como los generadores se venden en kVA '
                . 'y no en watts, convierte el resultado con un factor de potencia de 0,8 y lo redondea al '
                . 'tamaño comercial siguiente.',
            'También le indica si la instalación probablemente sea monofásica o trifásica y cuánto '
                . 'combustible consumiría por hora con esa carga, un dato clave para saber cuántas horas de '
                . 'autonomía le da el tanque.',
            'Lo que la calculadora no ve es la instalación: un generador bien elegido pero conectado sin '
                . 'una llave de transferencia puede dañar equipos o poner en riesgo a los técnicos de la '
                . 'ANDE. Por eso la cotización incluye el tablero de transferencia manual o automática.',
        ],
        'faq' => [
            [
                'q' => '¿Qué diferencia hay entre kVA y kW?',
                'a' => 'Los kW son la potencia que usan los equipos; los kVA, la que entrega el generador. '
                     . 'En grupos electrógenos se toma que 1 kVA entrega unos 0,8 kW.',
            ],
            [
                'q' => '¿Puedo conectar el aire acondicionado al generador?',
                'a' => 'Sí, si el generador está dimensionado para su arranque. Un aire de 12.000 BTU '
                     . 'puede pedir más de 3.000 W al arrancar; los equipos inverter arrancan más suave.',
            ],
            [
                'q' => '¿Nafta o diésel?',
                'a' => 'Para uso ocasional y potencias chicas, un generador a nafta es más barato de '
                     . 'comprar. Para cortes largos, comercios o más de 8–10 kVA, el diésel consume menos '
                     . 'por kWh y dura más.',
            ],
            [
                'q' => '¿Necesito transferencia automática?',
                'a' => 'Si quiere que el generador arranque solo cuando se corta la luz —por ejemplo en '
                     . 'un comercio, una cámara de frío o una casa con personas mayores—, sí. Si no, una '
                     . 'llave de transferencia manual es suficiente y más económica.',
            ],
        ],
        'related'       => ['generadores', 'ups-estabilizadores', 'baterias-respaldo'],
        'ctaWhatsapp'   => '',
        'formNeed'      => 'generador',
        'analyticsTool' => 'que_generador_necesito',
    ],

    'consumo-electrico' => [
        'path'            => '/herramientas/consumo-electrico/',
        'title'           => 'Calculadora de consumo eléctrico',
        'navLabel'        => 'Calculadora de consumo eléctrico',
        'seoTitle'        => 'Calculadora de consumo eléctrico',
        'metaDescription' => 'Calcule cuántos kWh y cuántos guaraníes gasta cada equipo de su casa por mes, '
                           . 'y cuáles pesan más en su factura de la ANDE.',
        'hero' => [
            'eyebrow' => 'Calculadora de consumo',
            'h1'      => '¿Cuánto consume cada equipo de mi casa?',
            'lead'    => 'Descubra qué equipos pesan más en su factura de la ANDE y qué conviene cambiar '
                       . 'primero.',
        ],
        'intro' => [
            'Cuando la factura de la ANDE sube, casi siempre la explican dos o tres equipos: el aire '
                . 'acondicionado en verano, la ducha o el termocalefón en invierno, y una heladera vieja '
                . 'todo el año. Saber cuáles son es el primer paso para bajar la cuenta, ya sea cambiando '
                . 'hábitos, equipos o sumando paneles solares.',
            'La calculadora multiplica la potencia de cada equipo por las horas de uso diario y por 30 días. '
                . 'Para los equipos con compresor —heladera, freezer, aire acondicionado— aplica el ciclo '
                . 'de trabajo real, porque el motor no funciona todo el tiempo. Los watts que proponemos '
                . 'son valores típicos: la etiqueta de su equipo manda, y puede corregirlos.',
            'Para pasar los kWh a guaraníes usamos el precio por kWh de su propia factura: divida el total '
                . 'a pagar por los kWh consumidos. Así el cálculo incluye su tramo de tarifa y los '
                . 'impuestos, y no queda desactualizado cuando cambia el pliego tarifario.',
            'Si el resultado es bastante menor que el consumo de su factura, puede haber un equipo que no '
                . 'tuvo en cuenta o una fuga a tierra en la instalación: en ese caso, conviene una revisión.',
        ],
        'faq' => [
            [
                'q' => '¿Por qué mi factura es más alta que el resultado?',
                'a' => 'Puede faltar algún equipo, las horas de uso pueden ser mayores, o puede haber una '
                     . 'pérdida en la instalación. Si la diferencia es grande, pida una revisión: una fuga '
                     . 'a tierra además de costar plata es un riesgo.',
            ],
            [
                'q' => '¿Cuánto consume un aire acondicionado por mes?',
                'a' => 'Un equipo de 12.000 BTU usado 8 horas por día consume del orden de 170 kWh por mes '
                     . 'con el ciclo típico del compresor; un inverter, bastante menos.',
            ],
            [
                'q' => '¿Cómo saco el precio por kWh de mi factura?',
                'a' => 'Divida el total a pagar por el consumo del mes en kWh. Es un promedio que ya '
                     . 'incluye su tramo de tarifa y los impuestos.',
            ],
        ],
        'related'       => ['iluminacion-led', 'paneles-solares', 'instalacion-aire-acondicionado'],
        'ctaWhatsapp'   => '',
        'formNeed'      => 'solar',
        'analyticsTool' => 'consumo_electrico',
    ],
];
