<?php
/**
 * /blog/led-vs-incandescente-cuanto-ahorra/ — content lives in
 * content/blog.php (index record) y en $sections/$faq/$toolLink aquí.
 */

require __DIR__ . '/../../lib/bootstrap.php';

$slug = 'led-vs-incandescente-cuanto-ahorra';

$sections = [
    [
        'h2'   => 'La misma luz con menos vatios',
        'body' => [
            'Una lámpara incandescente convierte la mayor parte de la energía que consume en '
                . 'calor, no en luz: por eso se siente caliente al tacto pocos minutos después de '
                . 'encenderse. Un LED, en cambio, convierte la energía en luz de forma mucho más '
                . 'directa, con muy poca pérdida en calor, y por eso da la misma cantidad de luz '
                . 'consumiendo bastante menos vatios.',
            'Esa diferencia es la que explica todo el ahorro: no es que el LED "gaste menos por ser '
                . 'nuevo", es que necesita menos potencia eléctrica para producir el mismo nivel de '
                . 'iluminación en una habitación.',
        ],
    ],
    [
        'h2'   => 'Cómo se traduce eso en el consumo mensual',
        'body' => [
            'El consumo de una lámpara se calcula multiplicando su potencia en vatios por las '
                . 'horas que permanece encendida, y ese resultado, sumado al de todas las luces de '
                . 'la casa, es lo que compone el consumo eléctrico de la iluminación en el mes. '
                . 'Cuantas menos vatios necesita cada punto de luz para la misma iluminación, menor '
                . 'es esa suma.',
            'La diferencia se nota más en los puntos que quedan encendidos muchas horas al día '
                . '—el living, el porche, la iluminación exterior— que en una lámpara que se '
                . 'enciende pocos minutos, porque el ahorro depende tanto de la potencia como del '
                . 'tiempo de uso.',
        ],
    ],
    [
        'h2'   => 'Dicroicas, tubos y reflectores: no todo LED es igual',
        'body' => [
            'Además de la lámpara de rosca común, el mercado ofrece dicroicas LED para empotrar, '
                . 'tubos LED que reemplazan los tubos fluorescentes de oficinas y locales, y '
                . 'reflectores LED para exteriores e iluminación de fachada. Cada formato tiene su '
                . 'propio rango de potencia y su propia equivalencia con la tecnología que '
                . 'reemplaza, así que conviene comparar por lúmenes entregados y no solo por vatios '
                . 'consumidos.',
            'En locales comerciales, donde la iluminación permanece encendida buena parte del día, '
                . 'el cambio a LED suele ser uno de los ajustes más simples para reducir el consumo '
                . 'eléctrico sin tocar ningún otro equipo de la instalación.',
        ],
    ],
    [
        'h2'   => 'Vida útil: el otro lado del ahorro',
        'body' => [
            'Además del consumo, la vida útil de un LED es considerablemente más larga que la de '
                . 'una lámpara incandescente, lo que significa menos recambios y menos veces subido '
                . 'a una escalera para cambiar una lámpara que se quemó. Ese ahorro en recambios se '
                . 'suma al ahorro en la factura, aunque no se vea en el mismo lugar.',
            'Al elegir un LED conviene fijarse en la equivalencia de luz (lúmenes) y en la '
                . 'temperatura de color, no solo en el precio de compra, para que el reemplazo dé el '
                . 'mismo nivel de iluminación que la lámpara que sustituye.',
            'Un LED de menor calidad puede perder parte de su luminosidad antes de lo esperado, '
                . 'sobre todo si trabaja en exteriores expuesto a calor constante; elegir equipos '
                . 'certificados, con la disipación de calor adecuada para el lugar donde se instalan, '
                . 'es lo que sostiene esa vida útil prometida en la práctica.',
        ],
    ],
    [
        'h2'   => 'Cuándo conviene revisar la instalación al cambiar la iluminación',
        'body' => [
            'Cambiar lámparas sueltas no exige tocar el tablero, pero un proyecto de iluminación LED '
                . 'más amplio —dicroicas empotradas, tiras LED, iluminación exterior con '
                . 'transformador— sí puede requerir revisar el circuito que las alimenta, sobre todo '
                . 'en instalaciones antiguas pensadas para una carga distinta.',
            'En esos casos conviene una evaluación previa, con presupuesto por WhatsApp antes de la '
                . 'visita y materiales y mano de obra detallados por separado, para saber de '
                . 'antemano qué parte del trabajo es la instalación eléctrica y qué parte es el '
                . 'cambio de las lámparas en sí.',
            'Esa misma visita sirve para confirmar si el dimmer o el controlador que ya tiene la '
                . 'casa es compatible con LED, porque no todos los reguladores de intensidad antiguos '
                . 'funcionan bien con esta tecnología, y usar uno incompatible puede causar '
                . 'parpadeo o acortar la vida de las lámparas nuevas.',
        ],
    ],
];

$faq = [
    [
        'q' => '¿Por qué el LED da la misma luz consumiendo menos?',
        'a' => 'Porque convierte más energía en luz y menos en calor que una lámpara '
             . 'incandescente, así que necesita menos vatios para el mismo nivel de iluminación.',
    ],
    [
        'q' => '¿Dónde se nota más el ahorro al cambiar a LED?',
        'a' => 'En los puntos que permanecen encendidos muchas horas al día, porque el ahorro '
             . 'depende de la potencia y del tiempo de uso combinados.',
    ],
    [
        'q' => '¿Un proyecto de iluminación LED grande necesita revisar el tablero?',
        'a' => 'A veces, sobre todo en instalaciones antiguas o proyectos con muchos puntos nuevos; '
             . 'un electricista lo determina revisando el circuito antes de presupuestar.',
    ],
];

$toolLink = [
    'path'  => '/herramientas/consumo-electrico/',
    'label' => 'Estime el ahorro en su consumo',
    'text'  => 'Compare el consumo mensual de la iluminación actual contra un cambio a LED, '
             . 'artefacto por artefacto.',
];

require ROOT_DIR . '/templates/article.php';
