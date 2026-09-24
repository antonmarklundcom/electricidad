<?php
/**
 * /blog/mantenimiento-del-generador/ — content lives in content/blog.php
 * (index record) y en $sections/$faq/$toolLink aquí.
 */

require __DIR__ . '/../../lib/bootstrap.php';

$slug = 'mantenimiento-del-generador';

$sections = [
    [
        'h2'   => 'Un generador que no se prueba es una suposición',
        'body' => [
            'Un generador que pasó todo el año guardado sin arrancar no es lo mismo que un '
                . 'generador listo para funcionar. El combustible se degrada, la batería de arranque '
                . 'pierde carga y las juntas del motor se resecan con el desuso, así que el primer '
                . 'corte largo de la temporada es, muchas veces, la primera vez que alguien '
                . 'descubre que el equipo no arranca.',
            'El mantenimiento periódico existe justamente para que esa primera prueba real no sea '
                . 'durante una tormenta a la medianoche, sino en una visita programada donde todavía '
                . 'hay tiempo de corregir lo que falle.',
        ],
    ],
    [
        'h2'   => 'Qué se revisa en una visita de mantenimiento',
        'body' => [
            'La revisión cubre los sistemas que hacen que el equipo arranque y sostenga carga: el '
                . 'nivel y estado del aceite, el filtro de aire y de combustible, el estado de la '
                . 'batería de arranque y sus bornes, y el combustible almacenado, que pierde '
                . 'estabilidad con el tiempo si no se renueva.',
            'También se revisan las conexiones eléctricas del generador hacia el tablero, en '
                . 'particular si hay una transferencia automática (ATS): que conmute correctamente '
                . 'entre la red de la ANDE y el generador es tan importante como que el motor '
                . 'arranque, porque una transferencia que falla puede dejar ambas fuentes '
                . 'desconectadas al mismo tiempo.',
        ],
        'items' => [
            ['title' => 'Aceite y filtros', 'text' => 'Nivel, estado y cambio según las horas de '
                . 'uso o el tiempo transcurrido desde el último servicio.'],
            ['title' => 'Batería de arranque', 'text' => 'Carga y estado de los bornes, la causa '
                . 'más común de un generador que no enciende.'],
            ['title' => 'Combustible', 'text' => 'Estado del combustible almacenado y del sistema '
                . 'de alimentación hasta el motor.'],
            ['title' => 'Transferencia automática', 'text' => 'Que conmute entre red y generador '
                . 'sin dejar ambas fuentes conectadas a la vez.'],
        ],
    ],
    [
        'h2'   => 'La prueba de arranque bajo carga',
        'body' => [
            'Un generador puede arrancar en vacío y aun así fallar cuando tiene que sostener la '
                . 'carga real de la casa: heladera, bombeo de agua y, si corresponde, el aire '
                . 'acondicionado. Por eso la revisión no termina con el motor encendido: incluye una '
                . 'prueba de arranque con carga conectada, para confirmar que el equipo sostiene la '
                . 'potencia que se le exige durante un corte real.',
            'Esa prueba también permite detectar si el generador quedó corto para lo que la casa '
                . 'consume hoy, algo que suele pasar cuando se suman artefactos —un aire '
                . 'acondicionado nuevo, un sistema de bombeo— después de haber comprado el equipo.',
        ],
    ],
    [
        'h2'   => 'Combustible almacenado: el descuido más frecuente',
        'body' => [
            'El diésel o la nafta que queda en el tanque del generador durante meses pierde '
                . 'estabilidad, absorbe humedad y puede formar sedimentos que después obstruyen el '
                . 'filtro de combustible justo cuando el equipo más se necesita. Es uno de los '
                . 'motivos más comunes de que un generador arranque con dificultad tras un período '
                . 'largo sin usarse.',
            'Renovar el combustible almacenado, o al menos revisarlo, forma parte de una visita de '
                . 'mantenimiento seria, junto con el filtro de combustible, que suele ser lo primero '
                . 'que se obstruye cuando el combustible envejeció.',
        ],
    ],
    [
        'h2'   => 'Con qué frecuencia conviene hacerla',
        'body' => [
            'Lo razonable es una revisión antes de cada temporada de mayor probabilidad de corte, '
                . 'además de un arranque de prueba cada cierto tiempo durante el resto del año, para '
                . 'que la batería no llegue descargada al momento en que realmente se necesita el '
                . 'equipo.',
            'Cada visita queda documentada en un informe escrito con lo revisado y lo corregido, de '
                . 'forma que quede un historial del equipo y no dependa de la memoria de quién lo usó '
                . 'la última vez.',
            'Ese historial también sirve para anticipar reemplazos: una batería que ya viene con '
                . 'lecturas bajas en varias visitas seguidas, o un filtro que se ensucia más rápido '
                . 'de lo esperado, son señales de que conviene cambiar el componente antes de que '
                . 'falle en medio de un corte, en lugar de esperar a que deje de funcionar.',
        ],
    ],
];

$faq = [
    [
        'q' => '¿Cada cuánto hay que hacer mantenimiento a un generador doméstico?',
        'a' => 'Al menos una vez antes de la temporada de mayor probabilidad de corte, con pruebas '
             . 'de arranque periódicas el resto del año para no llegar con la batería descargada.',
    ],
    [
        'q' => '¿Por qué un generador arranca en vacío y falla con carga?',
        'a' => 'Porque el arranque sin artefactos conectados no exige la potencia real que sí '
             . 'exige la casa; solo una prueba con carga conectada confirma que el equipo la '
             . 'sostiene.',
    ],
    [
        'q' => '¿Qué hace la transferencia automática (ATS)?',
        'a' => 'Conmuta la instalación entre la red de la ANDE y el generador sin intervención '
             . 'manual, y su revisión es parte del mantenimiento porque una falla ahí puede dejar '
             . 'la casa sin ninguna de las dos fuentes.',
    ],
];

$toolLink = [
    'path'  => '/herramientas/que-generador-necesito/',
    'label' => 'Revise si su generador alcanza',
    'text'  => 'Sume los artefactos que necesita sostener durante un corte y compare la potencia '
             . 'con la de su equipo actual.',
];

require ROOT_DIR . '/templates/article.php';
