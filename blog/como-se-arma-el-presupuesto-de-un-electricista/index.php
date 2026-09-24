<?php
/**
 * /blog/como-se-arma-el-presupuesto-de-un-electricista/ — content lives in
 * content/blog.php (index record) y en $sections/$faq aquí.
 */

require __DIR__ . '/../../lib/bootstrap.php';

$slug = 'como-se-arma-el-presupuesto-de-un-electricista';

$sections = [
    [
        'h2'   => 'Por qué dos presupuestos pueden parecer tan distintos',
        'body' => [
            'Cuando se piden varias cotizaciones para el mismo trabajo eléctrico, es común que los '
                . 'montos finales no coincidan y que no quede claro por qué. La razón casi siempre '
                . 'está en qué incluye cada presupuesto: uno puede cubrir solo la mano de obra, otro '
                . 'sumar materiales de mejor calidad, y un tercero incluir una visita de diagnóstico '
                . 'que el primero no contempló.',
            'Entender las partes que componen un presupuesto eléctrico ayuda a comparar cotizaciones '
                . 'de forma justa y a saber qué preguntar cuando algo no está claro, en lugar de '
                . 'elegir solo por el número más bajo.',
        ],
    ],
    [
        'h2'   => 'La visita y el diagnóstico',
        'body' => [
            'Muchos trabajos empiezan con una visita para ver la instalación existente: el estado '
                . 'del tablero, la antigüedad del cableado, y qué tan accesible es el lugar donde hay '
                . 'que trabajar. Esa visita es la que permite pasar de una idea general —"quiero '
                . 'instalar un aire acondicionado"— a un alcance concreto, con los circuitos y '
                . 'protecciones que realmente hacen falta.',
            'Un presupuesto serio se arma por WhatsApp antes de la visita, sin cargo, y solo si el '
                . 'caso lo requiere se coordina una visita de diagnóstico en el lugar, cuyo eventual '
                . 'costo se informa antes de ir, nunca después.',
        ],
    ],
    [
        'h2'   => 'Materiales y mano de obra, por separado',
        'body' => [
            'Un presupuesto claro separa el costo de los materiales —cable, disyuntores, '
                . 'diferenciales, cajas, tomacorrientes— del costo de la mano de obra. Esa '
                . 'separación permite entender qué parte del monto corresponde a insumos que el '
                . 'cliente podría comparar en otro lado, y qué parte corresponde al trabajo del '
                . 'electricista.',
            'La calidad de los materiales también cambia el número: un disyuntor o un cable de '
                . 'menor calidad puede parecer más barato en el momento, pero no es lo mismo elegir '
                . 'componentes certificados que ir al mínimo posible, sobre todo en circuitos de '
                . 'alta carga.',
        ],
    ],
    [
        'h2'   => 'Cómo se valora la mano de obra',
        'body' => [
            'La mano de obra se puede cotizar de distintas formas según el tipo de trabajo: por '
                . 'punto instalado —cada tomacorriente, cada boca de luz— cuando el trabajo se puede '
                . 'contar de esa manera, o por jornada cuando se trata de una obra más grande, como '
                . 'un cableado completo o una remodelación del tablero.',
            'Ninguna de las dos formas es mejor en sí misma: depende del tipo de trabajo. Lo que sí '
                . 'importa es que el presupuesto diga con claridad qué criterio se usó, para que el '
                . 'cliente pueda entender de dónde sale el número final.',
        ],
        'items' => [
            ['title' => 'Por punto', 'text' => 'Cada tomacorriente, boca de luz o punto de '
                . 'conexión cotizado como unidad, útil para trabajos acotados.'],
            ['title' => 'Por jornada', 'text' => 'El trabajo se cotiza por el tiempo estimado, '
                . 'habitual en obras más grandes o de alcance menos predecible.'],
        ],
    ],
    [
        'h2'   => 'El margen para lo imprevisto',
        'body' => [
            'En instalaciones antiguas es frecuente encontrar, al abrir una pared o un tablero, algo '
                . 'que no se veía en la visita inicial: un cableado en mal estado, una conexión '
                . 'improvisada de un trabajo anterior, o una sección de cable que no corresponde a la '
                . 'carga actual. Un presupuesto responsable contempla esa posibilidad en lugar de '
                . 'ignorarla.',
            'Cuando aparece un imprevisto, corresponde informarlo antes de continuar, con el ajuste '
                . 'de alcance y de costo explicado, no como un cargo sorpresa en la factura final. Al '
                . 'terminar el trabajo, el electricista entrega un informe escrito con garantía por '
                . 'escrito de lo realizado.',
        ],
    ],
    [
        'h2'   => 'Cómo comparar dos presupuestos sin confundirse',
        'body' => [
            'Al recibir más de una cotización para el mismo trabajo, conviene compararlas por '
                . 'partes: primero el alcance descrito —qué circuitos, qué protecciones, qué puntos—, '
                . 'después los materiales elegidos y recién al final el número total. Dos '
                . 'presupuestos con alcances distintos no son comparables aunque el trabajo suene '
                . 'igual a simple vista.',
            'Pedir que el presupuesto quede detallado por escrito, con materiales y mano de obra '
                . 'separados, es lo que permite hacer esa comparación con criterio, en lugar de '
                . 'decidir solo por cuál cifra final es más baja.',
        ],
    ],
];

$faq = [
    [
        'q' => '¿Por qué la visita de diagnóstico a veces tiene costo?',
        'a' => 'Porque en algunos casos evaluar la instalación toma tiempo del electricista en el '
             . 'lugar; cuando corresponde, ese costo se informa antes de coordinar la visita, nunca '
             . 'después de realizada.',
    ],
    [
        'q' => '¿Es mejor un presupuesto por punto o por jornada?',
        'a' => 'Ninguno es mejor en general: depende del tipo de trabajo. Lo importante es que el '
             . 'presupuesto explique con qué criterio se calculó.',
    ],
    [
        'q' => '¿Qué pasa si aparece un imprevisto durante la obra?',
        'a' => 'Corresponde que el electricista lo informe y explique el ajuste de alcance y costo '
             . 'antes de seguir, no que aparezca como un cargo adicional en la factura final.',
    ],
    [
        'q' => '¿Los materiales se cotizan junto con la mano de obra?',
        'a' => 'Un presupuesto claro los detalla por separado, de forma que se entienda qué parte '
             . 'del costo corresponde a insumos y cuál al trabajo del electricista.',
    ],
];

require ROOT_DIR . '/templates/article.php';
