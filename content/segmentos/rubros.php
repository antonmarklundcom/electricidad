<?php
/** Editorial review 2026-10-05. Scope for consultation, not an unverified offer. */
declare(strict_types=1);
return [
    'hogar' => [
        'path' => '/segmentos/hogar/',
        'kind' => 'rubro',
        'navLabel' => 'Hogar',
        'seoTitle' => 'Electricista para el hogar',
        'metaDescription' => 'Hogar: información, temas eléctricos y servicios relacionados para preparar una consulta. Cobertura y atención pendientes de confirmación.',
        'hero' => [
            'eyebrow' => 'Para su rubro',
            'h1' => 'Electricista para el hogar',
            'lead' => 'Temas para preparar una consulta de electricidad o energía según el inmueble y los equipos. El alcance, la cobertura y la atención están pendientes de confirmación.',
        ],
        'leadSlug' => 'instalacion-electrica-residencial',
        'bundle' => [
            'instalacion-electrica-residencial',
            'tablero-electrico-disyuntores',
            'cortocircuito-y-fallas',
            'puesta-a-tierra',
            'instalacion-aire-acondicionado',
        ],
        'traps' => [
            [
                'title' => 'Tablero viejo con carga nueva',
                'text' => 'La casa creció (aire acondicionado, más artefactos) pero el tablero sigue siendo el original. El disyuntor salta seguido porque está al límite de su capacidad, no porque esté fallado.',
            ],
            [
                'title' => 'Sin puesta a tierra o con jabalina deteriorada',
                'text' => 'Muchas casas antiguas no tienen jabalina, o la tienen corroída. El diferencial (DDR) no protege igual sin una tierra en buen estado.',
            ],
            [
                'title' => 'Aire acondicionado en un circuito compartido',
                'text' => 'Conectar el split al mismo circuito que otros artefactos sobrecarga el cable y el disyuntor, y calienta las conexiones con el uso diario.',
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
    'comercio-y-locales' => [
        'path' => '/segmentos/comercio-y-locales/',
        'kind' => 'rubro',
        'navLabel' => 'Comercios y locales',
        'seoTitle' => 'Electricista para comercios en Asunción',
        'metaDescription' => 'Comercios y locales: información, temas eléctricos y servicios relacionados para preparar una consulta. Cobertura y atención pendientes de confirmación.',
        'hero' => [
            'eyebrow' => 'Para su rubro',
            'h1' => 'Electricista para comercios y locales',
            'lead' => 'Temas para preparar una consulta de electricidad o energía según el inmueble y los equipos. El alcance, la cobertura y la atención están pendientes de confirmación.',
        ],
        'leadSlug' => 'instalacion-electrica-comercial',
        'bundle' => [
            'instalacion-electrica-comercial',
            'tablero-electrico-disyuntores',
            'iluminacion-led',
            'cortocircuito-y-fallas',
            'mantenimiento-electrico',
        ],
        'traps' => [
            [
                'title' => 'Heladeras y freezers en el mismo circuito que la iluminación',
                'text' => 'Si un disyuntor salta y apaga heladeras junto con las luces, la mercadería se pierde antes de que alguien note el corte.',
            ],
            [
                'title' => 'Tablero pensado para un local más chico',
                'text' => 'Locales que fueron ampliando equipos (más heladeras, más aire acondicionado) sin ampliar el tablero terminan con disyuntores que saltan en las horas de más consumo.',
            ],
            [
                'title' => 'Iluminación vieja que consume y calienta de más',
                'text' => 'Tubos fluorescentes viejos consumen más y generan calor extra en el local, un costo que se nota mes a mes en la factura.',
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
    'edificios-y-consorcios' => [
        'path' => '/segmentos/edificios-y-consorcios/',
        'kind' => 'rubro',
        'navLabel' => 'Edificios y consorcios',
        'seoTitle' => 'Electricista para consorcios',
        'metaDescription' => 'Edificios y consorcios: información, temas eléctricos y servicios relacionados para preparar una consulta. Cobertura y atención pendientes de confirmación.',
        'hero' => [
            'eyebrow' => 'Para su rubro',
            'h1' => 'Electricista para edificios y consorcios',
            'lead' => 'Temas para preparar una consulta de electricidad o energía según el inmueble y los equipos. El alcance, la cobertura y la atención están pendientes de confirmación.',
        ],
        'leadSlug' => 'mantenimiento-electrico',
        'bundle' => [
            'mantenimiento-electrico',
            'tablero-electrico-disyuntores',
            'iluminacion-led',
            'cortocircuito-y-fallas',
        ],
        'traps' => [
            [
                'title' => 'Tablero general sin revisión periódica',
                'text' => 'El tablero general de un edificio suministra a varias unidades y a los servicios comunes; un disyuntor gastado ahí afecta a todos los propietarios a la vez, no a una sola unidad.',
            ],
            [
                'title' => 'Bombas de agua sin protección adecuada',
                'text' => 'Una bomba de agua sin el disyuntor y la protección correctos puede dejar sin agua a todo el edificio cuando falla, además del riesgo eléctrico.',
            ],
            [
                'title' => 'Iluminación de áreas comunes como gasto que se posterga',
                'text' => 'Cambiar la iluminación de pasillos y cocheras a LED suele quedar como gasto postergable, aunque es de los rubros que más consumo acumula por estar encendido muchas horas.',
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
    'industria-y-depositos' => [
        'path' => '/segmentos/industria-y-depositos/',
        'kind' => 'rubro',
        'navLabel' => 'Industria y depósitos',
        'seoTitle' => 'Electricista para industria y depósitos',
        'metaDescription' => 'Industria y depósitos: información, temas eléctricos y servicios relacionados para preparar una consulta. Cobertura y atención pendientes de confirmación.',
        'hero' => [
            'eyebrow' => 'Para su rubro',
            'h1' => 'Electricista para industria y depósitos',
            'lead' => 'Temas para preparar una consulta de electricidad o energía según el inmueble y los equipos. El alcance, la cobertura y la atención están pendientes de confirmación.',
        ],
        'leadSlug' => 'instalacion-electrica-comercial',
        'bundle' => [
            'instalacion-electrica-comercial',
            'tablero-electrico-disyuntores',
            'mantenimiento-electrico',
            'iluminacion-led',
            'medidor-ande-tramites',
        ],
        'traps' => [
            [
                'title' => 'Maquinaria nueva sobre una instalación pensada para otra carga',
                'text' => 'Sumar máquinas o cámaras de frío sobre un tablero dimensionado para otro uso hace que los disyuntores salten justo en el momento de mayor producción.',
            ],
            [
                'title' => 'Aumento de carga no tramitado ante la ANDE',
                'text' => 'Ampliar la instalación sin actualizar la potencia contratada en el NIS termina en cortes recurrentes que parecen fallas eléctricas y en realidad son de suministro.',
            ],
            [
                'title' => 'Iluminación industrial vieja en galpones altos',
                'text' => 'Cambiar luminarias en techos altos se posterga por la dificultad de acceso, aunque son las que más consumen por las horas de uso continuo.',
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
    'campo-y-estancias' => [
        'path' => '/segmentos/campo-y-estancias/',
        'kind' => 'rubro',
        'navLabel' => 'Campo y estancias',
        'seoTitle' => 'Electricista para campo y estancias',
        'metaDescription' => 'Campo y estancias: información, temas eléctricos y servicios relacionados para preparar una consulta. Cobertura y atención pendientes de confirmación.',
        'hero' => [
            'eyebrow' => 'Para su rubro',
            'h1' => 'Electricista para campo y estancias',
            'lead' => 'Temas para preparar una consulta de electricidad o energía según el inmueble y los equipos. El alcance, la cobertura y la atención están pendientes de confirmación.',
        ],
        'leadSlug' => 'paneles-solares',
        'bundle' => [
            'paneles-solares',
            'generadores',
            'baterias-respaldo',
            'ups-estabilizadores',
            'puesta-a-tierra',
        ],
        'traps' => [
            [
                'title' => 'Línea larga con caídas de tensión',
                'text' => 'A mayor distancia del poste transformador, más baja llega la tensión en la punta de línea. Motores y bombas sufren ese desnivel aunque el resto de la instalación esté bien hecha.',
            ],
            [
                'title' => 'Bomba de agua sin protección contra tormentas',
                'text' => 'Un rayo cercano o una sobretensión de la línea puede quemar el motor de la bomba si no hay protección adecuada, dejando la estancia sin agua hasta conseguir repuesto.',
            ],
            [
                'title' => 'Sistema off-grid dimensionado por debajo del consumo real',
                'text' => 'Armar el banco de baterías y los paneles según el consumo de un día despejado deja al sistema corto en días nublados seguidos, justo cuando más se necesita.',
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
