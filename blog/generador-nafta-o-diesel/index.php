<?php
/**
 * /blog/generador-nafta-o-diesel/ — content lives in content/blog.php
 * (index record) y en $sections/$faq/$toolLink aquí.
 */

require __DIR__ . '/../../lib/bootstrap.php';

$slug = 'generador-nafta-o-diesel';

$sections = [
    [
        'h2'   => 'La misma pregunta, dos motores distintos',
        'body' => [
            'Cuando alguien decide comprar un generador, la primera pregunta suele ser cuántos kVA '
                . 'necesita; la segunda, casi siempre, es si conviene uno a nafta o a diésel. La '
                . 'respuesta no depende de gustos, sino de cuánto se va a usar el equipo y para qué: '
                . 'un uso ocasional y un uso frecuente durante cortes largos piden motores distintos.',
            'Nafta y diésel no son solo dos combustibles distintos: son dos tipos de motor con '
                . 'exigencias, consumo y vida útil diferentes, y esa diferencia se nota más cuanto '
                . 'más se usa el generador.',
        ],
    ],
    [
        'h2'   => 'Qué cambia entre un motor a nafta y uno a diésel',
        'body' => [
            'Los motores a nafta suelen ser más livianos y de menor costo inicial, algo habitual en '
                . 'generadores domésticos de menor potencia pensados para uso ocasional: un corte de '
                . 'algunas horas de vez en cuando.',
            'Los motores a diésel están construidos para trabajar más horas seguidas sin '
                . 'deteriorarse tan rápido, y son más eficientes: consumen menos combustible por '
                . 'cada kWh generado, algo así como 0,25–0,35 litros de diésel por kWh generado según '
                . 'publicaciones de prensa de 2026, orientativo. Esa eficiencia es la razón por la '
                . 'que casi todos los equipos de mayor potencia, trifásicos y cabinados, son a '
                . 'diésel.',
        ],
    ],
    [
        'h2'   => 'Comparación por criterio',
        'body' => [
            'Antes de decidir, conviene mirar estos puntos en conjunto, no uno solo aislado.',
        ],
        'items' => [
            ['title' => 'Potencia típica', 'text' => 'Nafta: más común en equipos domésticos de '
                . 'menor potencia. Diésel: predomina en equipos de mayor potencia, incluidos los '
                . 'trifásicos cabinados para comercios e industrias.'],
            ['title' => 'Consumo por kWh', 'text' => 'Diésel es más eficiente que nafta para la '
                . 'misma energía generada, del orden de 0,25–0,35 litros de diésel por kWh según '
                . 'publicaciones de prensa de 2026, orientativo; la diferencia se nota más cuanto más '
                . 'horas funciona el equipo.'],
            ['title' => 'Ruido', 'text' => 'Nafta: motores más livianos, en general más ruidosos '
                . 'para equipos de potencia comparable. Diésel: los equipos cabinados reducen el '
                . 'ruido, aunque el motor en sí no es silencioso.'],
            ['title' => 'Vida útil', 'text' => 'Diésel: motores construidos para más horas de '
                . 'trabajo continuo. Nafta: adecuados para uso ocasional, se desgastan antes bajo '
                . 'uso intensivo y prolongado.'],
            ['title' => 'Mantenimiento', 'text' => 'Ambos necesitan revisión de aceite, filtros y '
                . 'batería de arranque; en diésel se suma el cuidado del combustible almacenado, que '
                . 'pierde estabilidad y puede formar sedimentos si no se renueva.'],
            ['title' => 'Arranque automático / ATS', 'text' => 'Disponible en ambos tipos según el '
                . 'modelo, pero es más habitual encontrarlo de fábrica en equipos diésel de mayor '
                . 'potencia pensados para respaldo permanente.'],
            ['title' => 'Costo inicial relativo', 'text' => 'Nafta: generadores domésticos desde '
                . 'unos G. 4.200.000 (6,7 kVA) según publicaciones de prensa de 2026, orientativo. '
                . 'Diésel: un equipo trifásico cabinado de 12 kVA puede rondar G. 47.000.000 según '
                . 'las mismas publicaciones, orientativo; el costo inicial diésel es mayor, pero se '
                . 'compensa con menor consumo y más vida útil en uso frecuente.'],
            ['title' => 'Ideal para', 'text' => 'Nafta: hogar con cortes ocasionales y presupuesto '
                . 'inicial ajustado. Diésel: negocio, consorcio o casa con cortes frecuentes y largos, '
                . 'donde el equipo va a trabajar muchas horas por año.'],
        ],
    ],
    [
        'h2'   => 'Cuándo un generador a nafta es la opción razonable',
        'body' => [
            'Si los cortes en la zona son poco frecuentes y de pocas horas, y lo que se busca es '
                . 'sostener la heladera, algo de iluminación y el router durante ese tiempo, un '
                . 'generador a nafta doméstico suele cubrir la necesidad con un costo inicial menor. '
                . 'El punto a tener en cuenta es que no conviene exigirle uso intensivo prolongado: '
                . 'no está pensado para eso.',
        ],
    ],
    [
        'h2'   => 'Cuándo conviene pasar a diésel',
        'body' => [
            'Cuando el corte típico dura varias horas o el negocio no puede permitirse quedar sin '
                . 'energía —heladeras con mercadería, bombas de agua, equipos de un consorcio o una '
                . 'industria—, el menor consumo y la mayor vida útil del diésel terminan pesando más '
                . 'que el costo inicial más alto. Es también la opción habitual cuando se necesita '
                . 'arranque automático con transferencia (ATS) para que el equipo entre en '
                . 'funcionamiento sin que nadie tenga que estar presente.',
            'En cualquiera de los dos casos, el punto de partida es el mismo: sumar la potencia real '
                . 'que hay que sostener durante un corte, no solo el equipo que más consume.',
        ],
    ],
];

$faq = [
    [
        'q' => '¿Un generador a diésel siempre conviene más que uno a nafta?',
        'a' => 'No necesariamente; para un uso ocasional de pocas horas, el menor costo inicial de '
             . 'un equipo a nafta puede ser la opción más razonable.',
    ],
    [
        'q' => '¿Por qué el diésel consume menos por kWh generado?',
        'a' => 'Por el diseño del motor y del ciclo de combustión; en cifras orientativas de '
             . 'publicaciones de prensa de 2026 ronda 0,25–0,35 litros de diésel por kWh generado.',
    ],
    [
        'q' => '¿Los equipos diésel siempre tienen arranque automático (ATS)?',
        'a' => 'No de forma automática; depende del modelo, aunque es más habitual encontrarlo de '
             . 'fábrica en equipos diésel de mayor potencia.',
    ],
    [
        'q' => '¿Qué combustible conviene para un negocio con cortes frecuentes?',
        'a' => 'En general diésel, por el menor consumo por kWh y la mayor vida útil bajo uso '
             . 'intensivo, aunque conviene evaluar el caso con la potencia que necesita sostener.',
    ],
];

$toolLink = [
    'path'  => '/herramientas/que-generador-necesito/',
    'label' => 'Calcule los kVA que necesita',
    'text'  => 'Sume los artefactos que quiere sostener durante un corte y obtenga la potencia '
             . 'orientativa del generador.',
];

require ROOT_DIR . '/templates/article.php';
