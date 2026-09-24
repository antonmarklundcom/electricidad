<?php
/**
 * /blog/cargar-auto-electrico-en-casa/ — content lives in content/blog.php
 * (index record) y en $sections/$faq/$toolLink aquí.
 */

require __DIR__ . '/../../lib/bootstrap.php';

$slug = 'cargar-auto-electrico-en-casa';

$sections = [
    [
        'h2'   => 'Por qué no alcanza con un tomacorriente común',
        'body' => [
            'Cargar un auto eléctrico consume, durante varias horas seguidas, una corriente mucho '
                . 'mayor y mucho más sostenida que cualquier otro artefacto doméstico habitual. Un '
                . 'tomacorriente pensado para un electrodoméstico ocasional no está preparado para '
                . 'sostener esa carga hora tras hora sin recalentarse, y ese es el motivo por el que '
                . 'un cargador doméstico necesita su propia instalación, no un enchufe existente.',
            'La diferencia no es solo de comodidad: una línea subdimensionada sometida a una carga '
                . 'sostenida es, con el tiempo, un riesgo de recalentamiento del cableado, algo que '
                . 'un circuito dedicado y bien dimensionado evita desde el diseño.',
        ],
    ],
    [
        'h2'   => 'Qué exige la instalación de un cargador doméstico',
        'body' => [
            'Un cargador doméstico necesita un circuito dedicado, con disyuntor termomagnético y '
                . 'diferencial (DDR) propios, y una sección de cable calculada específicamente para '
                . 'la corriente del cargador, no para el mínimo habitual de una instalación '
                . 'residencial. También se revisa la puesta a tierra, porque el cargador y el '
                . 'vehículo dependen de ella para operar de forma segura.',
            'Antes de instalar, conviene confirmar si la acometida de la vivienda —monofásica o '
                . 'trifásica, 220 V u otra configuración— tiene margen suficiente para sumar esta '
                . 'carga sin afectar el resto de los circuitos de la casa, en particular si ya hay '
                . 'aire acondicionado u otros consumos altos.',
        ],
        'items' => [
            ['title' => 'Circuito dedicado', 'text' => 'Línea propia con disyuntor y diferencial '
                . 'exclusivos para el cargador.'],
            ['title' => 'Sección de cable', 'text' => 'Calculada para la corriente sostenida del '
                . 'cargador, no reutilizada de un circuito existente.'],
            ['title' => 'Capacidad de la acometida', 'text' => 'Verificar que la instalación '
                . 'general tenga margen para sumar esta carga sin comprometer el resto.'],
        ],
    ],
    [
        'h2'   => 'Por qué conviene una evaluación antes de comprar el equipo',
        'body' => [
            'El cargador que conviene depende de la instalación de la casa tanto como del vehículo: '
                . 'un cargador de mayor potencia carga más rápido, pero exige más de la instalación '
                . 'eléctrica existente. Evaluar la instalación antes de elegir el equipo evita '
                . 'comprar un cargador que después no se puede instalar sin una obra mayor en el '
                . 'tablero.',
            'Esa evaluación también sirve para decidir si conviene aprovechar el momento para '
                . 'revisar el resto del tablero, sobre todo en casas donde ya se venía posponiendo '
                . 'una actualización de la instalación eléctrica.',
            'En edificios y consorcios la evaluación suma otro paso: confirmar si el reglamento del '
                . 'edificio y la instalación común permiten sumar un cargador en la cochera, y si la '
                . 'acometida general del edificio tiene margen para esa carga adicional antes de '
                . 'aprobar la instalación de una unidad.',
        ],
    ],
    [
        'h2'   => 'Cargar de noche y el resto de los consumos de la casa',
        'body' => [
            'La mayoría de las cargas domésticas se programa para la noche, cuando el resto de los '
                . 'consumos de la casa —heladera, iluminación, algún equipo en espera— es más bajo. '
                . 'Aun así, si la casa también climatiza durante la noche o tiene otros consumos '
                . 'altos simultáneos, conviene que el electricista revise si esa combinación excede '
                . 'la capacidad de la acometida en las horas en que coinciden.',
            'Programar la carga fuera de las horas de mayor consumo del resto de la casa no '
                . 'reemplaza una instalación bien dimensionada, pero sí ayuda a repartir mejor la '
                . 'demanda total sobre la instalación existente.',
        ],
    ],
    [
        'h2'   => 'Qué queda documentado al terminar',
        'body' => [
            'Como en cualquier trabajo eléctrico, la instalación del cargador se cotiza con '
                . 'presupuesto por WhatsApp antes de la visita y con materiales y mano de obra '
                . 'detallados por separado. Al finalizar corresponde un informe escrito con garantía '
                . 'por escrito, que detalla el circuito instalado y las protecciones sumadas.',
            'Ese documento es útil no solo como respaldo del trabajo, sino como referencia para '
                . 'cualquier mantenimiento futuro del circuito o para una eventual ampliación, si más '
                . 'adelante se suma un segundo vehículo eléctrico a la casa.',
        ],
    ],
];

$faq = [
    [
        'q' => '¿Se puede cargar un auto eléctrico desde un tomacorriente normal?',
        'a' => 'No es lo recomendable: la carga sostenida de varias horas exige un circuito '
             . 'dedicado, dimensionado para esa corriente, en lugar de un tomacorriente pensado '
             . 'para uso ocasional.',
    ],
    [
        'q' => '¿Cómo se sabe si la instalación de la casa tiene margen para un cargador?',
        'a' => 'Con una evaluación de la acometida y del tablero por parte de un electricista, que '
             . 'confirma si hay capacidad suficiente sin afectar otros circuitos.',
    ],
    [
        'q' => '¿Qué protecciones necesita el circuito del cargador?',
        'a' => 'Disyuntor termomagnético y diferencial (DDR) propios, además de una puesta a '
             . 'tierra en buen estado, igual que cualquier circuito dedicado de alta carga.',
    ],
];

$toolLink = [
    'path'  => '/herramientas/consumo-electrico/',
    'label' => 'Estime el consumo del cargador',
    'text'  => 'Calcule cuánto suma un cargador de auto eléctrico al consumo mensual antes de '
             . 'planificar la instalación.',
];

require ROOT_DIR . '/templates/article.php';
