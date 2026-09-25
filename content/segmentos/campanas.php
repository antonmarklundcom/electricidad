<?php
/**
 * Campaign segment pages: seasonal or situational landing pages, same record
 * shape as content/segmentos/rubros.php, distinguished by 'kind' => 'campana'.
 * See content/segmentos.php for the full field documentation.
 */

declare(strict_types=1);

return [

    'temporada-de-cortes' => [
        'path'            => '/temporada-de-cortes/',
        'kind'            => 'campana',
        'navLabel'        => 'Temporada de cortes',
        'seoTitle'        => 'Cortes de luz en verano: prepárese',
        'metaDescription' => 'Cómo preparar su casa o negocio para los cortes de luz y las bajas de '
                           . 'tensión del verano en Paraguay. Presupuesto por WhatsApp antes de la '
                           . 'visita.',
        'hero' => [
            'eyebrow' => 'Antes del verano',
            'h1'      => 'Prepare su casa o negocio para la temporada de cortes',
            'lead'    => 'El calor, el aire acondicionado y las tormentas suben la probabilidad de '
                       . 'cortes y de bajas de tensión. Revisamos el tablero, la instalación y qué '
                       . 'equipo de respaldo le conviene antes de que empiece la temporada.',
        ],
        'leadSlug' => 'generadores',
        'bundle'   => [
            'generadores',
            'ups-estabilizadores',
            'tablero-electrico-disyuntores',
            'baterias-respaldo',
            'paneles-solares',
            'planes-de-mantenimiento',
        ],
        'traps' => [
            [
                'title' => 'Comprar el generador el día del corte',
                'text'  => 'Elegir el equipo con urgencia, sin comparar potencia ni revisar si el '
                         . 'tablero admite la transferencia, suele terminar en un generador que '
                         . 'queda corto o mal conectado.',
            ],
            [
                'title' => 'Un tablero que no aguanta el aire acondicionado en pleno verano',
                'text'  => 'El mismo tablero que funcionó bien en invierno puede no sostener el '
                         . 'consumo sumado del aire acondicionado en los días de más calor, y el '
                         . 'disyuntor empieza a saltar justo cuando más se lo necesita.',
            ],
            [
                'title' => 'Equipos quemados por bajas de tensión',
                'text'  => 'Las bajas de tensión que suelen acompañar los picos de consumo del '
                         . 'verano dañan motores y electrónica sin necesidad de un corte total; un '
                         . 'estabilizador o un inversor con protección adecuada evita ese daño.',
            ],
        ],
        'sections' => [
            [
                'h2'   => 'Por qué el verano trae más cortes y más bajas de tensión',
                'body' => [
                    'El calor sube el consumo de toda la red al mismo tiempo, principalmente por el '
                    . 'aire acondicionado, y una red más exigida es una red con más probabilidad de '
                    . 'cortes y de bajas de tensión en los momentos de mayor demanda.',
                    'A eso se suman las tormentas de verano, que pueden provocar cortes puntuales o '
                    . 'sobretensiones en la línea. La combinación de mayor demanda y más tormentas es '
                    . 'la razón por la que la temporada de calor concentra la mayoría de los cortes '
                    . 'del año.',
                ],
            ],
            [
                'h2'   => 'Un plan de cuatro semanas antes de que empiece la temporada',
                'body' => [
                    'Conviene empezar con tiempo, no la semana en que ya hace calor: primero, una '
                    . 'revisión del tablero y de la puesta a tierra para confirmar que soporta la '
                    . 'carga que va a tener en verano, incluido el aire acondicionado.',
                    'Después, definir qué equipo de respaldo corresponde según la frecuencia y '
                    . 'duración de los cortes en la zona: un estabilizador si el problema son las '
                    . 'bajas de tensión, un UPS para equipos sensibles, o un generador o baterías si '
                    . 'lo que se necesita es seguir con energía durante horas de corte.',
                    'Por último, coordinar la instalación y una prueba de funcionamiento antes de que '
                    . 'llegue el primer corte largo, para que la puesta a punto no coincida con una '
                    . 'urgencia.',
                ],
            ],
        ],
        'weNeed' => [
            'Frecuencia y duración aproximada de los cortes en su zona',
            'Si va a sumar o ya tiene aire acondicionado para esta temporada',
            'Si busca respaldo para toda la casa o solo para equipos críticos',
            'Si ya cuenta con generador, UPS o baterías instalados',
        ],
        'faq' => [
            [
                'q' => '¿Con cuánta anticipación conviene prepararse para la temporada de cortes?',
                'a' => 'Antes de que empiece el calor fuerte, para tener tiempo de revisar el '
                     . 'tablero y coordinar el equipo de respaldo sin la presión de un corte en '
                     . 'curso.',
            ],
            [
                'q' => '¿El aire acondicionado puede hacer que el disyuntor salte más seguido en '
                     . 'verano?',
                'a' => 'Sí, si el tablero está al límite de su capacidad; revisamos el circuito antes '
                     . 'de la temporada para confirmar que lo sostiene.',
            ],
            [
                'q' => '¿Qué diferencia hay entre proteger de bajas de tensión y tener respaldo en '
                     . 'un corte?',
                'a' => 'Son cosas distintas: un estabilizador corrige la tensión mientras hay red, '
                     . 'pero solo un generador, UPS o baterías mantienen equipos encendidos cuando la '
                     . 'red se corta.',
            ],
            [
                'q' => '¿Pueden ayudar a elegir entre generador y baterías con paneles solares?',
                'a' => 'Sí, evaluamos la frecuencia y duración de los cortes en su zona antes de '
                     . 'recomendar una opción.',
            ],
        ],
    ],

];
