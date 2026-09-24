<?php
/**
 * /blog/ups-estabilizador-o-inversor/ — content lives in content/blog.php
 * (index record) y en $sections/$faq/$toolLink aquí.
 */

require __DIR__ . '/../../lib/bootstrap.php';

$slug = 'ups-estabilizador-o-inversor';

$sections = [
    [
        'h2'   => 'Tres equipos que se confunden en la misma góndola',
        'body' => [
            'Estabilizador, UPS e inversor con baterías se venden a veces en el mismo pasillo y se '
                . 'piden con el mismo problema en mente: "se me queman los equipos" o "se me apaga '
                . 'todo con los cortes". Pero resuelven cosas distintas, y comprar el que no '
                . 'corresponde deja el problema real sin resolver.',
            'La diferencia central es esta: un estabilizador corrige la tensión que llega, pero no '
                . 'da energía si se corta la luz; un UPS y un inversor con baterías sí mantienen '
                . 'equipos encendidos durante un corte, pero por tiempos muy distintos.',
            'Elegir mal no solo significa gastar de más: significa seguir expuesto al problema que '
                . 'se quería resolver, con un equipo que en teoría "debería" protegerlo pero no está '
                . 'hecho para ese caso puntual.',
        ],
    ],
    [
        'h2'   => 'Qué hace cada uno',
        'body' => [
            'El estabilizador corrige subas y bajas de tensión en la red antes de que lleguen al '
                . 'equipo conectado. No tiene batería: si la ANDE corta el suministro, el '
                . 'estabilizador se queda sin nada que estabilizar y el equipo se apaga igual que sin '
                . 'él.',
            'El UPS (sistema de alimentación ininterrumpida) sí tiene batería, pero pensada para '
                . 'minutos, no horas: su función es dar el tiempo justo para que una computadora '
                . 'guarde el trabajo y se apague de forma ordenada, o para cubrir microcortes '
                . 'momentáneos sin que el equipo se reinicie.',
            'El inversor con baterías es otra escala: un banco de baterías más grande, cargado desde '
                . 'la red (o combinado con paneles solares), pensado para sostener determinados '
                . 'circuitos durante horas de corte, no minutos.',
        ],
    ],
    [
        'h2'   => 'Comparación por criterio',
        'body' => [
            'Conviene mirar estos puntos juntos antes de decidir cuál necesita.',
        ],
        'items' => [
            ['title' => 'Protege de bajas de tensión', 'text' => 'Estabilizador: sí, es su función '
                . 'principal. UPS: sí, además de dar respaldo breve. Inversor con baterías: depende '
                . 'del equipo; algunos incluyen regulación, otros no.'],
            ['title' => 'Mantiene encendido en un corte', 'text' => 'Estabilizador: no. UPS: sí, '
                . 'por minutos. Inversor con baterías: sí, por horas, según el tamaño del banco de '
                . 'baterías y los circuitos conectados.'],
            ['title' => 'Autonomía típica', 'text' => 'Estabilizador: ninguna, no almacena energía. '
                . 'UPS: minutos, pensado para apagar equipos de forma ordenada. Inversor con '
                . 'baterías: horas, dimensionadas según el consumo que se quiera sostener.'],
            ['title' => 'Equipos con motor (heladera, portón)', 'text' => 'Necesitan una onda '
                . 'senoidal pura para no forzar el motor: un UPS o inversor con onda senoidal pura '
                . 'los protege bien; uno de onda modificada puede hacerlos funcionar mal o acortar su '
                . 'vida útil.'],
            ['title' => 'Costo relativo', 'text' => 'Estabilizador: el más bajo de los tres. UPS: '
                . 'intermedio, sube según la potencia y los minutos de autonomía. Inversor con '
                . 'baterías: el más alto, porque el banco de baterías es más grande.'],
            ['title' => 'Ideal para', 'text' => 'Estabilizador: proteger un equipo puntual de la '
                . 'tensión de la red. UPS: dar tiempo a apagar computadoras o sostener equipos '
                . 'sensibles en un microcorte. Inversor con baterías: sostener circuitos elegidos '
                . '—heladera, iluminación, internet— durante horas de corte.'],
        ],
    ],
    [
        'h2'   => 'Cuándo alcanza con un estabilizador',
        'body' => [
            'Si el problema que se quiere resolver son las bajas de tensión —equipos que se apagan '
                . 'o funcionan mal cuando la tensión de la red baja, algo común en líneas largas o '
                . 'con caídas de tensión— y no la falta total de energía durante un corte, un '
                . 'estabilizador resuelve exactamente eso, sin necesidad de batería.',
        ],
    ],
    [
        'h2'   => 'Cuándo conviene un UPS y cuándo un inversor con baterías',
        'body' => [
            'El UPS tiene sentido para proteger computadoras, routers o equipos que necesitan un '
                . 'tiempo corto para apagarse sin perder información o sin reiniciarse con cada '
                . 'microcorte de la red.',
            'El inversor con baterías conviene cuando lo que se necesita es seguir con luz, heladera '
                . 'o internet durante horas de corte, no minutos. Para equipos con motor como la '
                . 'heladera o el motor de un portón automático, es importante que el inversor entregue '
                . 'onda senoidal pura: un motor alimentado con onda modificada puede funcionar mal o '
                . 'dañarse con el tiempo.',
        ],
    ],
    [
        'h2'   => 'Cómo elegir sin comprar de más ni de menos',
        'body' => [
            'La forma más simple de no equivocarse es empezar por el problema real, no por el '
                . 'equipo: si lo que se rompe son artefactos por variaciones de tensión mientras hay '
                . 'luz, el estabilizador resuelve eso solo; si lo que preocupa es perder trabajo o '
                . 'que se reinicien equipos con microcortes, el UPS es la pieza que falta; si lo que '
                . 'se necesita es no quedarse sin heladera ni internet durante horas de corte, hace '
                . 'falta un inversor con baterías, y recién ahí conviene dimensionarlo según los '
                . 'circuitos que se quieran sostener.',
            'También se pueden combinar: un estabilizador a la entrada de la instalación y un '
                . 'inversor con baterías para los circuitos críticos cubren dos problemas distintos '
                . 'con dos equipos, cada uno haciendo lo que le corresponde. Antes de definir el '
                . 'equipo, conviene relevar qué artefactos hay que sostener y por cuánto tiempo, '
                . 'porque esa lista es la que determina si alcanza con un UPS chico o hace falta un '
                . 'banco de baterías más grande.',
        ],
    ],
];

$faq = [
    [
        'q' => '¿Un estabilizador me da luz si se corta la energía?',
        'a' => 'No. El estabilizador corrige la tensión de la red, pero no tiene batería: si la '
             . 'ANDE corta el suministro, el equipo se apaga igual.',
    ],
    [
        'q' => '¿Cuánto tiempo aguanta un UPS en un corte?',
        'a' => 'En general minutos, pensado para apagar equipos sensibles de forma ordenada o cubrir '
             . 'microcortes, no para sostener la casa durante horas.',
    ],
    [
        'q' => '¿Por qué la heladera necesita onda senoidal pura?',
        'a' => 'Porque tiene motor, y una onda modificada puede hacer que funcione mal o que se '
             . 'desgaste antes; un inversor o UPS con onda senoidal pura evita ese problema.',
    ],
    [
        'q' => '¿Puedo combinar estabilizador e inversor con baterías?',
        'a' => 'Sí, y es habitual: el estabilizador corrige la tensión de entrada y el inversor da '
             . 'respaldo durante el corte, cada uno resolviendo su parte del problema.',
    ],
];

$toolLink = [
    'path'  => '/herramientas/que-ups-necesito/',
    'label' => 'Vea qué equipo se ajusta a su caso',
    'text'  => 'Revise qué necesita sostener durante un corte para elegir entre UPS e inversor con '
             . 'baterías.',
];

require ROOT_DIR . '/templates/article.php';
