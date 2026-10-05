<?php
/** Editorial review 2026-10-05. Scope for consultation, not an unverified offer. */
declare(strict_types=1);
return [
    'temporada-de-cortes' => [
        'path' => '/temporada-de-cortes/',
        'kind' => 'campana',
        'navLabel' => 'Temporada de cortes',
        'seoTitle' => 'Cortes de luz en verano: prepárese',
        'metaDescription' => 'Temporada de cortes: información, temas eléctricos y servicios relacionados para preparar una consulta. Cobertura y atención pendientes de confirmación.',
        'hero' => [
            'eyebrow' => 'Antes del verano',
            'h1' => 'Prepare su casa o negocio para la temporada de cortes',
            'lead' => 'Temas para preparar una consulta de electricidad o energía según el inmueble y los equipos. El alcance, la cobertura y la atención están pendientes de confirmación.',
        ],
        'leadSlug' => 'generadores',
        'bundle' => [
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
                'text' => 'Elegir el equipo con urgencia, sin comparar potencia ni revisar si el tablero admite la transferencia, suele terminar en un generador que queda corto o mal conectado.',
            ],
            [
                'title' => 'Un tablero que no aguanta el aire acondicionado en pleno verano',
                'text' => 'El mismo tablero que funcionó bien en invierno puede no sostener el consumo sumado del aire acondicionado en los días de más calor, y el disyuntor empieza a saltar justo cuando más se lo necesita.',
            ],
            [
                'title' => 'Equipos quemados por bajas de tensión',
                'text' => 'Las bajas de tensión que suelen acompañar los picos de consumo del verano dañan motores y electrónica sin necesidad de un corte total; un estabilizador o un inversor con protección adecuada evita ese daño.',
            ],
        ],
        'sections' => [
            [
                'h2' => 'Prepare el contexto del trabajo',
                'body' => [
                    'Indique el tipo de inmueble, la zona y los equipos que deben funcionar. Si hay actividades con horarios fijos, inclúyalos en el alcance que quiere evaluar.',
                    'La selección de servicios relacionados ayuda a ordenar la consulta; no confirma disponibilidad ni una visita de Electricidad PY.',
                ],
            ],
        ],
        'weNeed' => [
            'Zona y tipo de inmueble',
            'Problema o proyecto y equipos involucrados',
            'Horarios o restricciones relevantes para evaluar el trabajo',
        ],
        'faq' => [
            [
                'q' => '¿Enviar una consulta confirma la atención?',
                'a' => 'No. La atención, la zona, el alcance, el precio y la fecha deben confirmarse con un prestador. Esta versión no tiene una red de atención verificada.',
            ],
        ],
    ],
];
