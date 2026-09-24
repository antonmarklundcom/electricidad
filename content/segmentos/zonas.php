<?php
/** Zone landing pages, one per city; shape documented in content/segmentos.php. */

declare(strict_types=1);

return [

    'electricista-asuncion' => [
        'path'            => '/electricista/asuncion/',
        'kind'            => 'zona',
        'city'            => 'Asunción',
        'navLabel'        => 'Asunción',
        'seoTitle'        => 'Electricista en Asunción',
        'metaDescription' => 'Electricista en Asunción para cortocircuitos, tableros e instalaciones '
                           . 'en casas y edificios antiguos. Presupuesto por WhatsApp antes de la '
                           . 'visita.',
        'hero' => [
            'eyebrow' => 'Electricista en Asunción',
            'h1'      => 'Electricista en Asunción',
            'lead'    => 'Del centro a los barrios tradicionales: casas con instalación original y '
                       . 'edificios de departamentos que necesitan un electricista que entienda ese '
                       . 'tipo de cableado.',
        ],
        'leadSlug' => 'cortocircuito-y-fallas',
        'bundle'   => [
            'cortocircuito-y-fallas',
            'tablero-electrico-disyuntores',
            'instalacion-electrica-residencial',
            'puesta-a-tierra',
            'instalacion-electrica-comercial',
        ],
        'traps' => [
            [
                'title' => 'Cableado original en casas y edificios antiguos',
                'text'  => 'Muchas construcciones del centro y de barrios tradicionales conservan '
                         . 'tramos del cableado original, con secciones de cable que no alcanzan para '
                         . 'la carga actual de una vivienda.',
            ],
            [
                'title' => 'Edificios de departamentos con tablero general compartido',
                'text'  => 'En edificios de departamentos, una falla en el tablero general puede '
                         . 'afectar a varias unidades a la vez, no solo a la que reporta el problema.',
            ],
            [
                'title' => 'Locales comerciales que renuevan equipos sin revisar el tablero',
                'text'  => 'El comercio del centro suma heladeras, aires acondicionados y equipos '
                         . 'nuevos sobre tableros que no se actualizaron al mismo ritmo.',
            ],
        ],
        'sections' => [
            [
                'h2'   => 'Instalaciones antiguas y edificios',
                'body' => [
                    'Relevamos el tablero y el cableado visible antes de presupuestar, algo especialmente '
                    . 'importante en construcciones antiguas donde no siempre hay planos actualizados.',
                ],
            ],
        ],
        'weNeed' => [
            'Antigüedad aproximada de la construcción',
            'Si es casa, departamento o local comercial',
            'Si hay tablero general compartido con otras unidades',
        ],
        'faq' => [
            [
                'q' => '¿Trabajan en edificios de departamentos del centro?',
                'a' => 'Sí, coordinamos tanto con propietarios individuales como con la '
                     . 'administración del edificio cuando el trabajo es en áreas comunes.',
            ],
            [
                'q' => '¿Pueden revisar una instalación antigua sin saber qué tiene?',
                'a' => 'Sí, la primera visita incluye relevar el tablero y el cableado visible antes '
                     . 'de armar el presupuesto.',
            ],
            [
                'q' => '¿Atienden locales comerciales además de viviendas?',
                'a' => 'Sí, trabajamos tanto instalaciones residenciales como comerciales en '
                     . 'Asunción.',
            ],
        ],
    ],

    'electricista-san-lorenzo' => [
        'path'            => '/electricista/san-lorenzo/',
        'kind'            => 'zona',
        'city'            => 'San Lorenzo',
        'navLabel'        => 'San Lorenzo',
        'seoTitle'        => 'Electricista en San Lorenzo',
        'metaDescription' => 'Electricista en San Lorenzo para viviendas, comercios y locales cerca '
                           . 'de la zona universitaria. Presupuesto por WhatsApp antes de la visita, '
                           . 'sin cargo.',
        'hero' => [
            'eyebrow' => 'Electricista en San Lorenzo',
            'h1'      => 'Electricista en San Lorenzo',
            'lead'    => 'Zona de mucho comercio y movimiento por la actividad universitaria: '
                       . 'locales que necesitan resolver rápido y viviendas familiares en los barrios '
                       . 'alrededor.',
        ],
        'leadSlug' => 'cortocircuito-y-fallas',
        'bundle'   => [
            'cortocircuito-y-fallas',
            'instalacion-electrica-comercial',
            'tablero-electrico-disyuntores',
            'iluminacion-led',
        ],
        'traps' => [
            [
                'title' => 'Locales con alta rotación de equipos e iluminación encendida muchas horas',
                'text'  => 'El comercio de la zona suele tener vidrieras y carteles encendidos buena '
                         . 'parte del día, lo que exige un circuito de iluminación separado del resto.',
            ],
            [
                'title' => 'Viviendas con inquilinos que rotan y suman equipos sin avisar',
                'text'  => 'En zonas con alquileres frecuentes, cada inquilino nuevo suma artefactos '
                         . 'sin que nadie revise si el tablero sigue estando bien dimensionado.',
            ],
            [
                'title' => 'Locales gastronómicos con heladeras y freezers en un mismo circuito',
                'text'  => 'Perder ese circuito por una sobrecarga significa perder mercadería '
                         . 'refrigerada, un riesgo frecuente en bares y locales de comida de la zona.',
            ],
        ],
        'sections' => [
            [
                'h2'   => 'Comercio con mucho movimiento',
                'body' => [
                    'Coordinamos visitas en el horario que menos afecta la atención al público, algo '
                    . 'clave en una zona con locales que abren muchas horas seguidas.',
                ],
            ],
        ],
        'weNeed' => [
            'Rubro del local (comercio, gastronomía, servicios)',
            'Equipos críticos que no pueden quedar sin energía',
            'Horario de menor afluencia para coordinar la visita',
        ],
        'faq' => [
            [
                'q' => '¿Atienden locales comerciales cerca de la zona universitaria?',
                'a' => 'Sí, es una de las zonas donde más trabajamos con locales de comercio y '
                     . 'gastronomía.',
            ],
            [
                'q' => '¿Pueden separar el circuito de las heladeras del resto del local?',
                'a' => 'Sí, es una mejora común para locales que no pueden perder mercadería '
                     . 'refrigerada.',
            ],
            [
                'q' => '¿Trabajan también en casas de familia?',
                'a' => 'Sí, atendemos tanto locales comerciales como viviendas en San Lorenzo.',
            ],
        ],
    ],

    'electricista-luque' => [
        'path'            => '/electricista/luque/',
        'kind'            => 'zona',
        'city'            => 'Luque',
        'navLabel'        => 'Luque',
        'seoTitle'        => 'Electricista en Luque',
        'metaDescription' => 'Electricista en Luque para viviendas, quintas y locales cerca del '
                           . 'aeropuerto. Presupuesto por WhatsApp antes de la visita, sin cargo.',
        'hero' => [
            'eyebrow' => 'Electricista en Luque',
            'h1'      => 'Electricista en Luque',
            'lead'    => 'Entre zonas residenciales consolidadas y quintas con más terreno: '
                       . 'instalaciones que van desde el tablero de una casa hasta la bomba de agua '
                       . 'de una quinta.',
        ],
        'leadSlug' => 'cortocircuito-y-fallas',
        'bundle'   => [
            'cortocircuito-y-fallas',
            'tablero-electrico-disyuntores',
            'puesta-a-tierra',
            'instalacion-electrica-residencial',
        ],
        'traps' => [
            [
                'title' => 'Quintas con bomba de agua en un circuito sin protección adecuada',
                'text'  => 'La bomba que abastece a toda la vivienda queda expuesta si su circuito no '
                         . 'tiene el disyuntor y la puesta a tierra correctos, y una falla ahí deja '
                         . 'sin agua a toda la casa.',
            ],
            [
                'title' => 'Ampliaciones progresivas sobre el tablero original',
                'text'  => 'Las viviendas que se van ampliando de a partes (un cuarto, un garaje, un '
                         . 'depósito) suelen sumar carga al mismo tablero sin que nadie lo revise en '
                         . 'conjunto.',
            ],
            [
                'title' => 'Instalaciones cerca de zonas de mucho movimiento sin mantenimiento',
                'text'  => 'Locales y depósitos que funcionan a full por la actividad de la zona '
                         . 'postergan el mantenimiento eléctrico hasta que ya hay una falla.',
            ],
        ],
        'sections' => [
            [
                'h2'   => 'Quintas y bombas de agua',
                'body' => [
                    'Revisamos el circuito de la bomba de agua como parte del presupuesto cuando la '
                    . 'vivienda depende de ella para el suministro, un caso frecuente en las quintas '
                    . 'de la zona.',
                ],
            ],
        ],
        'weNeed' => [
            'Si la vivienda tiene bomba de agua y en qué circuito está',
            'Si hubo ampliaciones de la casa desde la instalación original',
            'Uso del inmueble: vivienda, quinta o local',
        ],
        'faq' => [
            [
                'q' => '¿Revisan el circuito de la bomba de agua en quintas?',
                'a' => 'Sí, es parte del relevamiento cuando la vivienda depende de una bomba para el '
                     . 'suministro de agua.',
            ],
            [
                'q' => '¿Atienden viviendas que se fueron ampliando con el tiempo?',
                'a' => 'Sí, revisamos el tablero completo para ver si sigue siendo adecuado después '
                     . 'de las ampliaciones.',
            ],
            [
                'q' => '¿Trabajan también en locales y depósitos?',
                'a' => 'Sí, atendemos viviendas, quintas y locales comerciales en Luque.',
            ],
        ],
    ],

    'electricista-fernando-de-la-mora' => [
        'path'            => '/electricista/fernando-de-la-mora/',
        'kind'            => 'zona',
        'city'            => 'Fernando de la Mora',
        'navLabel'        => 'Fernando de la Mora',
        'seoTitle'        => 'Electricista en Fernando de la Mora',
        'metaDescription' => 'Electricista en Fernando de la Mora para viviendas y comercios en una '
                           . 'zona densa junto a Asunción. Presupuesto por WhatsApp antes de la '
                           . 'visita.',
        'hero' => [
            'eyebrow' => 'Electricista en Fernando de la Mora',
            'h1'      => 'Electricista en Fernando de la Mora',
            'lead'    => 'Zona densa, con viviendas y locales muy cerca unos de otros: fallas que '
                       . 'conviene resolver rápido porque afectan a varios vecinos a la vez.',
        ],
        'leadSlug' => 'cortocircuito-y-fallas',
        'bundle'   => [
            'cortocircuito-y-fallas',
            'tablero-electrico-disyuntores',
            'instalacion-electrica-comercial',
            'iluminacion-led',
        ],
        'traps' => [
            [
                'title' => 'Viviendas y locales construidos muy próximos entre sí',
                'text'  => 'En una trama tan densa, una instalación exterior mal protegida queda más '
                         . 'expuesta a la humedad y al contacto accidental que en zonas con más '
                         . 'espacio entre construcciones.',
            ],
            [
                'title' => 'Locales que comparten acometida con la vivienda de al lado',
                'text'  => 'Es común encontrar ampliaciones donde un local comercial terminó '
                         . 'compartiendo parte de la instalación con la vivienda original, algo que '
                         . 'complica cualquier ampliación de carga.',
            ],
            [
                'title' => 'Tableros viejos en casas que hoy funcionan también como comercio',
                'text'  => 'Muchas viviendas de la zona alquilan un frente para un local, y el tablero '
                         . 'sigue pensado solo para el uso residencial original.',
            ],
        ],
        'sections' => [
            [
                'h2'   => 'Vivienda y comercio en el mismo predio',
                'body' => [
                    'Cuando una parte de la vivienda funciona como local, revisamos si conviene '
                    . 'separar los circuitos para que una falla comercial no afecte a la vivienda, o '
                    . 'viceversa.',
                ],
            ],
        ],
        'weNeed' => [
            'Si el inmueble combina vivienda y local comercial',
            'Si comparte acometida o tablero con una propiedad vecina',
            'Antigüedad aproximada de la instalación',
        ],
        'faq' => [
            [
                'q' => '¿Atienden casas que también funcionan como local comercial?',
                'a' => 'Sí, es un caso frecuente en la zona y evaluamos si conviene separar los '
                     . 'circuitos.',
            ],
            [
                'q' => '¿Qué hacen si la instalación comparte acometida con otra propiedad?',
                'a' => 'Lo relevamos en la visita y explicamos qué opciones hay antes de presupuestar '
                     . 'el trabajo.',
            ],
            [
                'q' => '¿Responden rápido cuando es una falla que afecta a varios vecinos?',
                'a' => 'Coordinamos la visita en el horario que la agenda permite, priorizando cuando '
                     . 'se describe como una falla activa.',
            ],
        ],
    ],

    'electricista-lambare' => [
        'path'            => '/electricista/lambare/',
        'kind'            => 'zona',
        'city'            => 'Lambaré',
        'navLabel'        => 'Lambaré',
        'seoTitle'        => 'Electricista en Lambaré',
        'metaDescription' => 'Electricista en Lambaré para viviendas residenciales cerca del río. '
                           . 'Presupuesto por WhatsApp antes de la visita, sin cargo, con informe '
                           . 'escrito.',
        'hero' => [
            'eyebrow' => 'Electricista en Lambaré',
            'h1'      => 'Electricista en Lambaré',
            'lead'    => 'Barrios residenciales cerca del río, con viviendas que conviven con más '
                       . 'humedad ambiente de lo habitual y necesitan instalaciones pensadas para '
                       . 'eso.',
        ],
        'leadSlug' => 'cortocircuito-y-fallas',
        'bundle'   => [
            'cortocircuito-y-fallas',
            'puesta-a-tierra',
            'tablero-electrico-disyuntores',
            'instalacion-electrica-residencial',
        ],
        'traps' => [
            [
                'title' => 'Humedad cercana al río afecta tomas y cajas exteriores',
                'text'  => 'La cercanía al río suma humedad ambiente que acelera el deterioro de '
                         . 'tomas y cajas de conexión mal selladas, sobre todo en instalaciones al '
                         . 'aire libre.',
            ],
            [
                'title' => 'Diferencial (DDR) ausente en viviendas más antiguas',
                'text'  => 'En una zona con más humedad, no tener diferencial instalado aumenta el '
                         . 'riesgo de una descarga si algún cable pierde aislación.',
            ],
            [
                'title' => 'Jabalina corroída por la humedad del suelo',
                'text'  => 'El suelo más húmedo cerca del río puede acelerar la corrosión de la '
                         . 'jabalina de puesta a tierra si no es del material adecuado.',
            ],
        ],
        'sections' => [
            [
                'h2'   => 'Instalaciones pensadas para la humedad de la zona',
                'body' => [
                    'Revisamos el estado de tomas exteriores, cajas de conexión y la jabalina de '
                    . 'puesta a tierra, puntos que se deterioran más rápido en barrios cercanos al '
                    . 'río.',
                ],
            ],
        ],
        'weNeed' => [
            'Si la vivienda tiene instalaciones o tomas al aire libre',
            'Si cuenta con diferencial (DDR) instalado',
            'Antigüedad aproximada de la jabalina de puesta a tierra, si la conoce',
        ],
        'faq' => [
            [
                'q' => '¿La humedad de la zona afecta la instalación eléctrica?',
                'a' => 'Puede acelerar el deterioro de tomas exteriores y de la jabalina si no son '
                     . 'del material adecuado; lo revisamos en la visita.',
            ],
            [
                'q' => '¿Instalan diferencial (DDR) en viviendas que no lo tienen?',
                'a' => 'Sí, es una de las mejoras más pedidas en instalaciones residenciales sin '
                     . 'diferencial.',
            ],
            [
                'q' => '¿Revisan la puesta a tierra aunque no haya una falla visible?',
                'a' => 'Sí, se puede pedir como revisión preventiva, no solo cuando hay un problema.',
            ],
        ],
    ],

    'electricista-capiata' => [
        'path'            => '/electricista/capiata/',
        'kind'            => 'zona',
        'city'            => 'Capiatá',
        'navLabel'        => 'Capiatá',
        'seoTitle'        => 'Electricista en Capiatá',
        'metaDescription' => 'Electricista en Capiatá para comercios sobre la ruta y viviendas de la '
                           . 'zona. Presupuesto por WhatsApp antes de la visita, sin cargo.',
        'hero' => [
            'eyebrow' => 'Electricista en Capiatá',
            'h1'      => 'Electricista en Capiatá',
            'lead'    => 'Comercio en crecimiento sobre las rutas principales y viviendas en los '
                       . 'barrios alrededor: instalaciones que necesitan estar a la altura de un '
                       . 'negocio que sigue sumando equipos.',
        ],
        'leadSlug' => 'cortocircuito-y-fallas',
        'bundle'   => [
            'cortocircuito-y-fallas',
            'instalacion-electrica-comercial',
            'tablero-electrico-disyuntores',
            'iluminacion-led',
        ],
        'traps' => [
            [
                'title' => 'Locales sobre la ruta que crecen más rápido que su tablero',
                'text'  => 'El comercio sobre las rutas principales de la zona va sumando equipos '
                         . '(heladeras, aire acondicionado, cartelería) más rápido que lo que el '
                         . 'tablero original fue pensado para soportar.',
            ],
            [
                'title' => 'Viviendas nuevas con tablero mínimo de origen',
                'text'  => 'Casas construidas recientemente a veces salen con el tablero mínimo '
                         . 'exigido, sin margen para sumar aire acondicionado u otros equipos más '
                         . 'adelante.',
            ],
            [
                'title' => 'Carteles e iluminación exterior sin circuito propio',
                'text'  => 'La cartelería de locales sobre la ruta suele conectarse al mismo circuito '
                         . 'que el resto del local, lo que hace que una falla del cartel corte '
                         . 'también la iluminación interior.',
            ],
        ],
        'sections' => [
            [
                'h2'   => 'Comercio sobre la ruta',
                'body' => [
                    'Para locales sobre las rutas principales, evaluamos si conviene separar el '
                    . 'circuito de la cartelería del resto del local antes de que crezca la carga '
                    . 'general.',
                ],
            ],
        ],
        'weNeed' => [
            'Si el local está sobre la ruta o en una calle interna',
            'Equipos que planea sumar en los próximos meses',
            'Si la vivienda o el local es de construcción reciente',
        ],
        'faq' => [
            [
                'q' => '¿Atienden comercios sobre la ruta?',
                'a' => 'Sí, es una de las zonas donde más trabajamos con locales comerciales.',
            ],
            [
                'q' => '¿Revisan si el tablero alcanza para equipos que quiero sumar?',
                'a' => 'Sí, evaluamos la carga actual y la que planea agregar antes de recomendar '
                     . 'una ampliación.',
            ],
            [
                'q' => '¿Trabajan en viviendas de construcción reciente?',
                'a' => 'Sí, atendemos tanto construcciones nuevas como instalaciones más antiguas.',
            ],
        ],
    ],

    'electricista-nemby' => [
        'path'            => '/electricista/nemby/',
        'kind'            => 'zona',
        'city'            => 'Ñemby',
        'navLabel'        => 'Ñemby',
        'seoTitle'        => 'Electricista en Ñemby',
        'metaDescription' => 'Electricista en Ñemby para viviendas nuevas y ampliaciones en una zona '
                           . 'residencial en crecimiento. Presupuesto por WhatsApp antes de la '
                           . 'visita.',
        'hero' => [
            'eyebrow' => 'Electricista en Ñemby',
            'h1'      => 'Electricista en Ñemby',
            'lead'    => 'Barrios residenciales en pleno crecimiento: casas nuevas que necesitan el '
                       . 'cableado completo y familias que van ampliando la vivienda de a etapas.',
        ],
        'leadSlug' => 'cortocircuito-y-fallas',
        'bundle'   => [
            'cortocircuito-y-fallas',
            'instalacion-electrica-residencial',
            'cableado-obra-nueva',
            'tablero-electrico-disyuntores',
        ],
        'traps' => [
            [
                'title' => 'Obra nueva con cableado hecho antes de definir todos los ambientes',
                'text'  => 'En construcciones nuevas, cablear antes de terminar de definir la '
                         . 'distribución de ambientes obliga después a parches que no siguen el mismo '
                         . 'criterio de sección de cable.',
            ],
            [
                'title' => 'Ampliaciones por etapas sin plan conjunto',
                'text'  => 'Familias que construyen de a poco (un dormitorio este año, un garaje el '
                         . 'próximo) suelen sumar cada ampliación al tablero existente sin revisar si '
                         . 'sigue alcanzando.',
            ],
            [
                'title' => 'Aire acondicionado agregado después de la obra',
                'text'  => 'Sumar aire acondicionado en una casa ya terminada, sobre un circuito no '
                         . 'pensado para esa carga, es de los motivos más comunes de disyuntores que '
                         . 'saltan seguido.',
            ],
        ],
        'sections' => [
            [
                'h2'   => 'Obra nueva y ampliaciones',
                'body' => [
                    'Para obra nueva, coordinamos el cableado completo con la sección de cable '
                    . 'adecuada para cada ambiente; para ampliaciones, revisamos si el tablero '
                    . 'existente sigue siendo suficiente antes de sumar carga.',
                ],
            ],
        ],
        'weNeed' => [
            'Etapa de la obra (recién iniciada, a medio terminar, ampliación de una vivienda existente)',
            'Cantidad de ambientes y equipos previstos',
            'Si ya cuenta con tablero instalado o parte de la instalación',
        ],
        'faq' => [
            [
                'q' => '¿Trabajan con obras nuevas desde el cableado inicial?',
                'a' => 'Sí, coordinamos el cableado completo de obra nueva según los ambientes '
                     . 'definidos.',
            ],
            [
                'q' => '¿Pueden revisar si el tablero alcanza para una ampliación?',
                'a' => 'Sí, evaluamos la carga actual y la que sumaría la ampliación antes de '
                     . 'presupuestar.',
            ],
            [
                'q' => '¿Atienden viviendas construidas por etapas?',
                'a' => 'Sí, es un caso frecuente en la zona y lo tenemos en cuenta al armar el '
                     . 'presupuesto.',
            ],
        ],
    ],

    'electricista-mariano-roque-alonso' => [
        'path'            => '/electricista/mariano-roque-alonso/',
        'kind'            => 'zona',
        'city'            => 'Mariano Roque Alonso',
        'navLabel'        => 'Mariano Roque Alonso',
        'seoTitle'        => 'Electricista en Mariano R. Alonso',
        'metaDescription' => 'Electricista en Mariano Roque Alonso para depósitos y locales sobre la '
                           . 'Ruta Transchaco. Presupuesto por WhatsApp antes de la visita, sin '
                           . 'cargo.',
        'hero' => [
            'eyebrow' => 'Electricista en Mariano Roque Alonso',
            'h1'      => 'Electricista en Mariano Roque Alonso',
            'lead'    => 'Zona con fuerte actividad industrial y logística sobre la Ruta Transchaco: '
                       . 'depósitos y locales que necesitan una instalación trifásica confiable.',
        ],
        'leadSlug' => 'instalacion-electrica-comercial',
        'bundle'   => [
            'instalacion-electrica-comercial',
            'tablero-electrico-disyuntores',
            'cortocircuito-y-fallas',
            'mantenimiento-electrico',
        ],
        'traps' => [
            [
                'title' => 'Depósitos con equipos trifásicos sumados de a poco',
                'text'  => 'Montacargas eléctricos, compresores u otros equipos trifásicos que se '
                         . 'suman con el tiempo suelen terminar sobre un tablero pensado para menos '
                         . 'carga.',
            ],
            [
                'title' => 'Locales logísticos sin mantenimiento preventivo del tablero',
                'text'  => 'La actividad continua de depósitos y locales de logística hace que el '
                         . 'tablero trabaje muchas horas seguidas, y sin mantenimiento preventivo una '
                         . 'falla se detecta recién cuando ya frenó la operación.',
            ],
            [
                'title' => 'Iluminación de galpones sin circuito separado del resto',
                'text'  => 'En galpones grandes, tener toda la iluminación en un solo circuito con '
                         . 'otros equipos hace que una falla deje a oscuras toda la nave.',
            ],
        ],
        'sections' => [
            [
                'h2'   => 'Instalación trifásica para depósitos y logística',
                'body' => [
                    'Relevamos la carga trifásica actual y la que se sumaría con nuevos equipos antes '
                    . 'de presupuestar, para que el tablero no vuelva a quedar corto en poco tiempo.',
                ],
            ],
        ],
        'weNeed' => [
            'Tipo de equipos que alimenta la instalación (montacargas, compresores, cámaras de frío)',
            'Si la instalación es monofásica o trifásica',
            'Horarios de operación a respetar en la visita',
        ],
        'faq' => [
            [
                'q' => '¿Trabajan con instalaciones trifásicas de depósitos?',
                'a' => 'Sí, tenemos electricistas con experiencia en instalaciones comerciales e '
                     . 'industriales trifásicas.',
            ],
            [
                'q' => '¿Pueden coordinar la visita sin frenar la operación del depósito?',
                'a' => 'Sí, coordinamos en el horario acordado cuando la agenda lo permite.',
            ],
            [
                'q' => '¿Ofrecen mantenimiento preventivo, no solo reparación de fallas?',
                'a' => 'Sí, podemos coordinar revisiones periódicas del tablero para depósitos con '
                     . 'uso continuo.',
            ],
        ],
    ],

    'electricista-villa-elisa' => [
        'path'            => '/electricista/villa-elisa/',
        'kind'            => 'zona',
        'city'            => 'Villa Elisa',
        'navLabel'        => 'Villa Elisa',
        'seoTitle'        => 'Electricista en Villa Elisa',
        'metaDescription' => 'Electricista en Villa Elisa para viviendas familiares en una zona '
                           . 'residencial en crecimiento. Presupuesto por WhatsApp antes de la '
                           . 'visita.',
        'hero' => [
            'eyebrow' => 'Electricista en Villa Elisa',
            'h1'      => 'Electricista en Villa Elisa',
            'lead'    => 'Barrios residenciales familiares que siguen creciendo: instalaciones de '
                       . 'casas nuevas y revisiones para viviendas que van sumando comodidades.',
        ],
        'leadSlug' => 'cortocircuito-y-fallas',
        'bundle'   => [
            'cortocircuito-y-fallas',
            'instalacion-electrica-residencial',
            'instalacion-aire-acondicionado',
            'tablero-electrico-disyuntores',
        ],
        'traps' => [
            [
                'title' => 'Casas nuevas con aire acondicionado sumado después',
                'text'  => 'En viviendas de construcción reciente, agregar aire acondicionado sobre '
                         . 'un circuito ya ocupado por otros artefactos es una de las causas más '
                         . 'comunes de disyuntores que saltan en verano.',
            ],
            [
                'title' => 'Instalaciones exteriores para patios y galpones caseros',
                'text'  => 'Sumar tomas o iluminación en el patio sin la protección adecuada expone la '
                         . 'instalación a la humedad y al uso al aire libre.',
            ],
            [
                'title' => 'Tablero mínimo de una casa que fue creciendo con la familia',
                'text'  => 'Muchas viviendas familiares de la zona fueron sumando dormitorios y '
                         . 'equipos con los años sobre el mismo tablero de origen.',
            ],
        ],
        'sections' => [
            [
                'h2'   => 'Aire acondicionado y crecimiento de la vivienda',
                'body' => [
                    'Antes de instalar un nuevo split, revisamos si el circuito que va a alimentarlo '
                    . 'tiene margen, o si conviene sumar un circuito dedicado.',
                ],
            ],
        ],
        'weNeed' => [
            'Cantidad de equipos de aire acondicionado instalados o previstos',
            'Antigüedad aproximada del tablero',
            'Si hay instalaciones exteriores (patio, garaje) a revisar',
        ],
        'faq' => [
            [
                'q' => '¿Revisan el circuito antes de instalar un aire acondicionado nuevo?',
                'a' => 'Sí, es parte del presupuesto verificar si el circuito existente alcanza o '
                     . 'conviene uno dedicado.',
            ],
            [
                'q' => '¿Atienden viviendas que fueron creciendo con los años?',
                'a' => 'Sí, es un caso frecuente y revisamos el tablero completo antes de recomendar '
                     . 'cambios.',
            ],
            [
                'q' => '¿Instalan tomas e iluminación para el patio?',
                'a' => 'Sí, con la protección adecuada para instalaciones al aire libre.',
            ],
        ],
    ],

    'electricista-limpio' => [
        'path'            => '/electricista/limpio/',
        'kind'            => 'zona',
        'city'            => 'Limpio',
        'navLabel'        => 'Limpio',
        'seoTitle'        => 'Electricista en Limpio',
        'metaDescription' => 'Electricista en Limpio para casas nuevas y barrios residenciales en '
                           . 'expansión. Presupuesto por WhatsApp antes de la visita, sin cargo.',
        'hero' => [
            'eyebrow' => 'Electricista en Limpio',
            'h1'      => 'Electricista en Limpio',
            'lead'    => 'Barrios residenciales en plena expansión: obra nueva que necesita el '
                       . 'cableado completo desde cero y viviendas recientes que ya piden alguna '
                       . 'ampliación.',
        ],
        'leadSlug' => 'cortocircuito-y-fallas',
        'bundle'   => [
            'cortocircuito-y-fallas',
            'cableado-obra-nueva',
            'instalacion-electrica-residencial',
            'tablero-electrico-disyuntores',
        ],
        'traps' => [
            [
                'title' => 'Obra nueva cableada con apuro para adelantar la mudanza',
                'text'  => 'Con la expansión de la zona, es común apurar el cableado para mudarse '
                         . 'antes, dejando puntos que después hay que corregir o completar.',
            ],
            [
                'title' => 'Tablero mínimo en casas recién entregadas',
                'text'  => 'Viviendas nuevas que salen con el tablero justo para lo exigido, sin '
                         . 'margen para sumar aire acondicionado u otros equipos apenas se instala la '
                         . 'familia.',
            ],
            [
                'title' => 'Puesta a tierra pendiente de terminar en obras nuevas',
                'text'  => 'En construcciones nuevas, a veces la jabalina queda como un detalle para '
                         . '"después", cuando en realidad protege desde el primer día que se usa la '
                         . 'instalación.',
            ],
        ],
        'sections' => [
            [
                'h2'   => 'Obra nueva en zona de expansión',
                'body' => [
                    'Coordinamos el cableado completo de obra nueva, incluida la puesta a tierra '
                    . 'desde el inicio, para que la familia no tenga que resolver ampliaciones apenas '
                    . 'se muda.',
                ],
            ],
        ],
        'weNeed' => [
            'Etapa de la obra y fecha estimada de mudanza',
            'Cantidad de ambientes y equipos previstos (aire acondicionado, entre otros)',
            'Si la puesta a tierra ya está instalada',
        ],
        'faq' => [
            [
                'q' => '¿Trabajan con obra nueva desde el inicio del cableado?',
                'a' => 'Sí, coordinamos el cableado completo, incluida la puesta a tierra, antes de '
                     . 'la mudanza.',
            ],
            [
                'q' => '¿Revisan si el tablero de una casa nueva alcanza para sumar equipos?',
                'a' => 'Sí, evaluamos la carga prevista antes de recomendar cambios en el tablero.',
            ],
            [
                'q' => '¿Pueden coordinar la visita según el avance de la obra?',
                'a' => 'Sí, coordinamos la visita en el horario y la etapa de obra que corresponda.',
            ],
        ],
    ],

];
