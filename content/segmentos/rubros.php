<?php
/** Segment landing pages by rubro (sector); shape documented in content/segmentos.php. */

declare(strict_types=1);

return [

    'hogar' => [
        'path'            => '/segmentos/hogar/',
        'kind'            => 'rubro',
        'navLabel'        => 'Hogar',
        'seoTitle'        => 'Electricista para el hogar',
        'metaDescription' => 'Instalación eléctrica residencial, tableros, cortocircuitos y aire '
                           . 'acondicionado. Presupuesto por WhatsApp antes de la visita, sin cargo.',
        'hero' => [
            'eyebrow' => 'Para su rubro',
            'h1'      => 'Electricista para el hogar',
            'lead'    => 'Desde una llave que salta seguido hasta una casa nueva que necesita el '
                       . 'cableado completo: armamos el trabajo con presupuesto detallado antes de '
                       . 'empezar.',
        ],
        'leadSlug' => 'instalacion-electrica-residencial',
        'bundle'   => [
            'instalacion-electrica-residencial',
            'tablero-electrico-disyuntores',
            'cortocircuito-y-fallas',
            'puesta-a-tierra',
            'instalacion-aire-acondicionado',
        ],
        'traps' => [
            [
                'title' => 'Tablero viejo con carga nueva',
                'text'  => 'La casa creció (aire acondicionado, más artefactos) pero el tablero sigue '
                         . 'siendo el original. El disyuntor salta seguido porque está al límite de su '
                         . 'capacidad, no porque esté fallado.',
            ],
            [
                'title' => 'Sin puesta a tierra o con jabalina deteriorada',
                'text'  => 'Muchas casas antiguas no tienen jabalina, o la tienen corroída. El '
                         . 'diferencial (DDR) no protege igual sin una tierra en buen estado.',
            ],
            [
                'title' => 'Aire acondicionado en un circuito compartido',
                'text'  => 'Conectar el split al mismo circuito que otros artefactos sobrecarga el '
                         . 'cable y el disyuntor, y calienta las conexiones con el uso diario.',
            ],
        ],
        'sections' => [
            [
                'h2'   => 'Qué revisamos antes de presupuestar',
                'body' => [
                    'Miramos el tablero (cantidad y estado de los disyuntores, si hay diferencial), '
                    . 'el estado de la puesta a tierra y qué circuitos están sobrecargados antes de '
                    . 'armar el presupuesto.',
                    'Si la instalación es de obra nueva, coordinamos el cableado completo con la '
                    . 'sección de cable adecuada para cada ambiente.',
                ],
            ],
        ],
        'weNeed' => [
            'Antigüedad aproximada de la instalación',
            'Si el tablero tiene diferencial (DDR) instalado',
            'Qué artefactos nuevos planea sumar (aire acondicionado, por ejemplo)',
        ],
        'faq' => [
            [
                'q' => '¿Atienden casas con instalación antigua?',
                'a' => 'Sí, es de los pedidos más comunes: relevamos el tablero y el cableado visible '
                     . 'antes de decir qué conviene cambiar.',
            ],
            [
                'q' => '¿Pueden instalar el aire acondicionado y revisar el tablero en la misma '
                     . 'visita?',
                'a' => 'Sí, coordinamos ambas cosas juntas cuando el circuito que va a alimentar el '
                     . 'equipo necesita revisión.',
            ],
            [
                'q' => '¿Dan un informe de lo que hicieron?',
                'a' => 'Sí, entregamos un informe escrito de lo realizado con garantía por escrito.',
            ],
        ],
    ],

    'comercio-y-locales' => [
        'path'            => '/segmentos/comercio-y-locales/',
        'kind'            => 'rubro',
        'navLabel'        => 'Comercios y locales',
        'seoTitle'        => 'Electricista para comercios en Asunción',
        'metaDescription' => 'Instalación eléctrica comercial, tableros e iluminación LED para '
                           . 'locales. Presupuesto por WhatsApp antes de la visita, sin cargo.',
        'hero' => [
            'eyebrow' => 'Para su rubro',
            'h1'      => 'Electricista para comercios y locales',
            'lead'    => 'Un local que no puede quedarse sin luz ni sin heladera: trabajamos con '
                       . 'presupuesto detallado y, cuando hace falta, en el horario que menos '
                       . 'afecta la atención.',
        ],
        'leadSlug' => 'instalacion-electrica-comercial',
        'bundle'   => [
            'instalacion-electrica-comercial',
            'tablero-electrico-disyuntores',
            'iluminacion-led',
            'cortocircuito-y-fallas',
            'mantenimiento-electrico',
        ],
        'traps' => [
            [
                'title' => 'Heladeras y freezers en el mismo circuito que la iluminación',
                'text'  => 'Si un disyuntor salta y apaga heladeras junto con las luces, la mercadería '
                         . 'se pierde antes de que alguien note el corte.',
            ],
            [
                'title' => 'Tablero pensado para un local más chico',
                'text'  => 'Locales que fueron ampliando equipos (más heladeras, más aire '
                         . 'acondicionado) sin ampliar el tablero terminan con disyuntores que saltan '
                         . 'en las horas de más consumo.',
            ],
            [
                'title' => 'Iluminación vieja que consume y calienta de más',
                'text'  => 'Tubos fluorescentes viejos consumen más y generan calor extra en el local, '
                         . 'un costo que se nota mes a mes en la factura.',
            ],
        ],
        'sections' => [
            [
                'h2'   => 'Trabajo que no interrumpe la atención',
                'body' => [
                    'Coordinamos la visita en el horario acordado y, si el trabajo requiere cortar '
                    . 'la luz del local, lo avisamos con anticipación para que pueda organizarse.',
                ],
            ],
        ],
        'weNeed' => [
            'Rubro del local y equipos críticos (heladeras, freezers, cámaras de frío)',
            'Horario en que el local puede quedar sin energía, si hace falta cortar',
            'Si el local es monofásico o trifásico',
        ],
        'faq' => [
            [
                'q' => '¿Pueden trabajar fuera del horario de atención?',
                'a' => 'Coordinamos la visita en el horario que la agenda permite, incluyendo horarios '
                     . 'fuera de atención cuando el trabajo lo requiere.',
            ],
            [
                'q' => '¿Separan el circuito de las heladeras del resto?',
                'a' => 'Sí, es una de las mejoras más comunes que proponemos para locales con '
                     . 'mercadería que no puede perder frío.',
            ],
            [
                'q' => '¿Trabajan con instalaciones trifásicas?',
                'a' => 'Sí, tenemos electricistas con experiencia en instalaciones comerciales '
                     . 'monofásicas y trifásicas.',
            ],
            [
                'q' => '¿El presupuesto detalla materiales y mano de obra por separado?',
                'a' => 'Sí, siempre entregamos materiales y mano de obra detallados por separado.',
            ],
        ],
    ],

    'edificios-y-consorcios' => [
        'path'            => '/segmentos/edificios-y-consorcios/',
        'kind'            => 'rubro',
        'navLabel'        => 'Edificios y consorcios',
        'seoTitle'        => 'Electricista para consorcios',
        'metaDescription' => 'Mantenimiento eléctrico de áreas comunes, tableros generales e '
                           . 'iluminación para edificios y consorcios. Presupuesto por WhatsApp.',
        'hero' => [
            'eyebrow' => 'Para su rubro',
            'h1'      => 'Electricista para edificios y consorcios',
            'lead'    => 'Áreas comunes, tablero general y bombas de agua: un plan de mantenimiento '
                       . 'para que el edificio no dependa de resolver todo como urgencia.',
        ],
        'leadSlug' => 'mantenimiento-electrico',
        'bundle'   => [
            'mantenimiento-electrico',
            'tablero-electrico-disyuntores',
            'iluminacion-led',
            'cortocircuito-y-fallas',
        ],
        'traps' => [
            [
                'title' => 'Tablero general sin revisión periódica',
                'text'  => 'El tablero general de un edificio suministra a varias unidades y a los '
                         . 'servicios comunes; un disyuntor gastado ahí afecta a todos los propietarios '
                         . 'a la vez, no a una sola unidad.',
            ],
            [
                'title' => 'Bombas de agua sin protección adecuada',
                'text'  => 'Una bomba de agua sin el disyuntor y la protección correctos puede dejar '
                         . 'sin agua a todo el edificio cuando falla, además del riesgo eléctrico.',
            ],
            [
                'title' => 'Iluminación de áreas comunes como gasto que se posterga',
                'text'  => 'Cambiar la iluminación de pasillos y cocheras a LED suele quedar como '
                         . 'gasto postergable, aunque es de los rubros que más consumo acumula por '
                         . 'estar encendido muchas horas.',
            ],
        ],
        'sections' => [
            [
                'h2'   => 'Cómo trabajamos con administraciones y consorcios',
                'body' => [
                    'Coordinamos con el administrador o el consejo de propietarios, y entregamos un '
                    . 'informe escrito de lo realizado que sirve como respaldo para el consorcio.',
                    'El presupuesto detalla materiales y mano de obra por separado, útil para '
                    . 'presentarlo en asamblea.',
                ],
            ],
        ],
        'weNeed' => [
            'Cantidad de unidades y si hay tablero general único o por unidad',
            'Si el edificio tiene bombas de agua u otros equipos comunes',
            'Contacto de la administración o del consejo de propietarios',
        ],
        'faq' => [
            [
                'q' => '¿Trabajan directamente con la administración del consorcio?',
                'a' => 'Sí, coordinamos con quien el consorcio designe: administración o consejo de '
                     . 'propietarios.',
            ],
            [
                'q' => '¿Pueden armar un plan de mantenimiento periódico?',
                'a' => 'Sí, además de resolver fallas puntuales podemos coordinar revisiones '
                     . 'periódicas del tablero general y las áreas comunes.',
            ],
            [
                'q' => '¿El informe sirve para presentar en asamblea?',
                'a' => 'Sí, entregamos un informe escrito de lo realizado con garantía por escrito.',
            ],
        ],
    ],

    'industria-y-depositos' => [
        'path'            => '/segmentos/industria-y-depositos/',
        'kind'            => 'rubro',
        'navLabel'        => 'Industria y depósitos',
        'seoTitle'        => 'Electricista para industria y depósitos',
        'metaDescription' => 'Instalación trifásica, tableros e iluminación LED para plantas y '
                           . 'depósitos. Presupuesto por WhatsApp antes de la visita, sin cargo.',
        'hero' => [
            'eyebrow' => 'Para su rubro',
            'h1'      => 'Electricista para industria y depósitos',
            'lead'    => 'Instalaciones trifásicas 220/380 V, tableros de mayor capacidad y '
                       . 'depósitos que no pueden parar por una falla eléctrica.',
        ],
        'leadSlug' => 'instalacion-electrica-comercial',
        'bundle'   => [
            'instalacion-electrica-comercial',
            'tablero-electrico-disyuntores',
            'mantenimiento-electrico',
            'iluminacion-led',
            'medidor-ande-tramites',
        ],
        'traps' => [
            [
                'title' => 'Maquinaria nueva sobre una instalación pensada para otra carga',
                'text'  => 'Sumar máquinas o cámaras de frío sobre un tablero dimensionado para otro '
                         . 'uso hace que los disyuntores salten justo en el momento de mayor '
                         . 'producción.',
            ],
            [
                'title' => 'Aumento de carga no tramitado ante la ANDE',
                'text'  => 'Ampliar la instalación sin actualizar la potencia contratada en el NIS '
                         . 'termina en cortes recurrentes que parecen fallas eléctricas y en realidad '
                         . 'son de suministro.',
            ],
            [
                'title' => 'Iluminación industrial vieja en galpones altos',
                'text'  => 'Cambiar luminarias en techos altos se posterga por la dificultad de '
                         . 'acceso, aunque son las que más consumen por las horas de uso continuo.',
            ],
        ],
        'sections' => [
            [
                'h2'   => 'Trabajo coordinado con la producción',
                'body' => [
                    'Coordinamos la visita en el horario acordado para no interrumpir turnos de '
                    . 'producción, y separamos materiales y mano de obra en el presupuesto para que '
                    . 'pueda evaluarlo con su equipo.',
                ],
            ],
        ],
        'weNeed' => [
            'Tipo de instalación (monofásica o trifásica) y potencia contratada aproximada',
            'Equipos o maquinaria que se van a sumar',
            'Horarios de producción a respetar en la visita',
        ],
        'faq' => [
            [
                'q' => '¿Trabajan con instalaciones trifásicas de 380 V?',
                'a' => 'Sí, tenemos electricistas con experiencia en instalaciones comerciales e '
                     . 'industriales trifásicas.',
            ],
            [
                'q' => '¿Ayudan con el trámite de aumento de carga ante la ANDE?',
                'a' => 'Ayudamos a coordinar el trámite; los montos y plazos vigentes los define la '
                     . 'ANDE.',
            ],
            [
                'q' => '¿Pueden coordinar la visita fuera del horario de producción?',
                'a' => 'Sí, coordinamos en el horario acordado cuando la agenda lo permite.',
            ],
        ],
    ],

    'campo-y-estancias' => [
        'path'            => '/segmentos/campo-y-estancias/',
        'kind'            => 'rubro',
        'navLabel'        => 'Campo y estancias',
        'seoTitle'        => 'Electricista para campo y estancias',
        'metaDescription' => 'Solar off-grid, bombeo solar y generadores para estancias sin ANDE '
                           . 'cerca o con líneas largas. Presupuesto por WhatsApp antes de la visita.',
        'hero' => [
            'eyebrow' => 'Para su rubro',
            'h1'      => 'Electricista para campo y estancias',
            'lead'    => 'Cuando la línea de la ANDE está lejos o llega débil, solar con baterías, '
                       . 'bombeo solar y un generador bien elegido resuelven lo que la red no cubre.',
        ],
        'leadSlug' => 'paneles-solares',
        'bundle'   => [
            'paneles-solares',
            'generadores',
            'baterias-respaldo',
            'ups-estabilizadores',
            'puesta-a-tierra',
        ],
        'traps' => [
            [
                'title' => 'Línea larga con caídas de tensión',
                'text'  => 'A mayor distancia del poste transformador, más baja llega la tensión en la '
                         . 'punta de línea. Motores y bombas sufren ese desnivel aunque el resto de la '
                         . 'instalación esté bien hecha.',
            ],
            [
                'title' => 'Bomba de agua sin protección contra tormentas',
                'text'  => 'Un rayo cercano o una sobretensión de la línea puede quemar el motor de la '
                         . 'bomba si no hay protección adecuada, dejando la estancia sin agua hasta '
                         . 'conseguir repuesto.',
            ],
            [
                'title' => 'Sistema off-grid dimensionado por debajo del consumo real',
                'text'  => 'Armar el banco de baterías y los paneles según el consumo de un día '
                         . 'despejado deja al sistema corto en días nublados seguidos, justo cuando '
                         . 'más se necesita.',
            ],
        ],
        'sections' => [
            [
                'h2'   => 'Solar off-grid y bombeo solar',
                'body' => [
                    'Para estancias sin línea de la ANDE cerca, armamos sistemas solares con baterías '
                    . 'dimensionados según el consumo real, no solo el pico de un buen día de sol.',
                    'El bombeo solar permite sacar agua de pozo sin depender de un generador '
                    . 'funcionando todo el día.',
                ],
            ],
            [
                'h2'   => 'Generadores y protección contra tormentas',
                'body' => [
                    'Un generador bien elegido cubre lo que el solar no alcanza a respaldar en días '
                    . 'sin sol seguidos, y una buena puesta a tierra reduce el daño de rayos y '
                    . 'sobretensiones en zonas con tormentas frecuentes.',
                ],
            ],
        ],
        'weNeed' => [
            'Si hay línea de la ANDE cerca o la estancia es totalmente off-grid',
            'Consumo diario aproximado (bomba de agua, heladera, iluminación, otros equipos)',
            'Si ya cuenta con generador o baterías instaladas',
            'Frecuencia de tormentas o rayos en la zona',
        ],
        'faq' => [
            [
                'q' => '¿Arman sistemas solares sin conexión a la ANDE?',
                'a' => 'Sí, armamos sistemas off-grid con baterías dimensionados según el consumo '
                     . 'real de la estancia.',
            ],
            [
                'q' => '¿Instalan bombeo solar para pozos?',
                'a' => 'Sí, es una de las soluciones más pedidas para estancias que no quieren '
                     . 'depender de un generador para sacar agua.',
            ],
            [
                'q' => '¿Qué hacen para proteger la instalación de rayos y tormentas?',
                'a' => 'Revisamos la puesta a tierra y la protección contra sobretensiones, puntos '
                     . 'clave en zonas con tormentas frecuentes.',
            ],
            [
                'q' => '¿Pueden combinar generador y paneles solares?',
                'a' => 'Sí, es habitual combinar ambos para cubrir días sin sol sin depender del '
                     . 'generador todo el tiempo.',
            ],
        ],
    ],

];
