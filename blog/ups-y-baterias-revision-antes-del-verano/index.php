<?php
/**
 * /blog/ups-y-baterias-revision-antes-del-verano/ — content lives in
 * content/blog.php (index record) y en $sections/$faq/$toolLink aquí.
 */

require __DIR__ . '/../../lib/bootstrap.php';

$slug = 'ups-y-baterias-revision-antes-del-verano';

$sections = [
    [
        'h2'   => 'Un UPS que no se prueba es una suposición, igual que un generador',
        'body' => [
            'Un UPS o un sistema de baterías de respaldo que pasó meses conectado sin que se le '
                . 'exigiera carga real puede parecer que funciona —el indicador enciende, la batería '
                . 'muestra carga— y aun así fallar apenas empieza el corte que de verdad importa. La '
                . 'batería envejece incluso sin usarse, y esa pérdida de capacidad no siempre se nota '
                . 'hasta que el equipo tiene que sostener carga por un rato.',
            'Revisar el sistema antes de que empiece la temporada de cortes es la forma de descubrir '
                . 'eso con tiempo, en lugar de descubrirlo a mitad de un corte largo.',
        ],
    ],
    [
        'h2'   => 'La prueba que realmente dice algo: autonomía con carga real',
        'body' => [
            'Encender el UPS y ver que la luz de "en línea" está prendida no confirma nada sobre '
                . 'cuánto tiempo va a sostener los equipos en un corte real. Lo que sí dice algo es '
                . 'desconectarlo de la red con la carga habitual conectada y cronometrar cuánto tiempo '
                . 'sostiene esos equipos antes de apagarse.',
            'Ese número —minutos u horas de autonomía con la carga real de la casa— es el dato que '
                . 'importa, no la autonomía que promete la ficha técnica del equipo nuevo. Con el paso '
                . 'del tiempo y el desgaste de la batería, la autonomía real baja aunque el equipo '
                . 'siga encendiendo con normalidad.',
        ],
    ],
    [
        'h2'   => 'Qué más se revisa en un sistema de baterías de respaldo',
        'body' => [
            'Además de la prueba de autonomía, conviene revisar la ventilación del lugar donde está '
                . 'instalado el equipo —las baterías se degradan más rápido con el calor excesivo— y '
                . 'el estado de las conexiones y bornes, que con el tiempo pueden aflojarse u '
                . 'oxidarse. Un sistema de baterías más grande, pensado para sostener varios circuitos '
                . 'durante horas, necesita esta revisión con el mismo criterio que un UPS chico de '
                . 'escritorio.',
        ],
        'items' => [
            ['title' => 'Autonomía con carga real', 'text' => 'Cuánto tiempo sostiene los equipos '
                . 'habituales, no la cifra de fábrica del equipo nuevo.'],
            ['title' => 'Ventilación', 'text' => 'Que el equipo no esté en un espacio cerrado donde '
                . 'el calor acelere el desgaste de la batería.'],
            ['title' => 'Conexiones y bornes', 'text' => 'Sin aflojarse ni mostrar corrosión, tanto '
                . 'en el equipo como en el banco de baterías.'],
            ['title' => 'Potencia en VA', 'text' => 'Que siga alcanzando para los equipos que hoy '
                . 'están conectados, no solo para los que había cuando se compró.'],
        ],
    ],
    [
        'h2'   => 'Qué anotar para no depender de la memoria',
        'body' => [
            'Conviene dejar por escrito, después de cada revisión, la potencia en VA del equipo y la '
                . 'autonomía real que dio en la última prueba con carga. Ese registro permite comparar '
                . 'revisión contra revisión y notar si la autonomía viene bajando de una vez a la otra, '
                . 'en lugar de descubrirlo recién cuando el equipo se apaga antes de lo esperado en un '
                . 'corte real.',
        ],
    ],
    [
        'h2'   => 'Cuándo conviene cambiar la batería',
        'body' => [
            'La señal para reemplazar una batería es el resultado de la prueba de autonomía, no una '
                . 'cantidad de años fija: una batería que sostiene bien la carga real en la prueba '
                . 'sigue siendo útil, y una que pierde autonomía de forma notoria entre una revisión y '
                . 'la siguiente conviene cambiarla antes de que falle en medio de un corte, aunque '
                . 'todavía encienda con normalidad fuera de carga.',
        ],
    ],
];

$faq = [
    [
        'q' => '¿Alcanza con que el UPS encienda para saber que funciona?',
        'a' => 'No: que encienda solo confirma que tiene carga, no cuánto tiempo va a sostener los '
             . 'equipos en un corte real. Eso solo lo dice una prueba de autonomía con carga conectada.',
    ],
    [
        'q' => '¿Cada cuánto conviene probar la autonomía del UPS o del banco de baterías?',
        'a' => 'Antes de cada temporada de mayor probabilidad de corte, para detectar a tiempo si la '
             . 'batería perdió capacidad desde la última prueba.',
    ],
    [
        'q' => '¿Cuándo hay que cambiar la batería de un UPS?',
        'a' => 'Cuando la prueba de autonomía con carga real muestra una caída notoria respecto a '
             . 'revisiones anteriores, no por una cantidad de años fija.',
    ],
    [
        'q' => '¿Por qué importa la ventilación del lugar donde está el equipo?',
        'a' => 'Porque el calor excesivo acelera el desgaste de la batería, incluso si el resto del '
             . 'equipo funciona sin problemas.',
    ],
];

$toolLink = [
    'path'  => '/herramientas/que-ups-necesito/',
    'label' => 'Calcule si su UPS sigue alcanzando',
    'text'  => 'Sume los equipos que necesita sostener hoy y compare con la potencia y autonomía de '
             . 'su UPS actual.',
];

require ROOT_DIR . '/templates/article.php';
