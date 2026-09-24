<?php
/** Services in the `electricista` cluster. Shape documented in content/services.php. */

declare(strict_types=1);

return [

    'electricista-24-horas' => [
        'path'            => '/servicios/electricista-24-horas/',
        'title'           => 'Electricista para urgencias eléctricas',
        'navLabel'        => 'Urgencias eléctricas',
        'cluster'         => 'electricista',
        'parent'          => null,
        'seoTitle'        => 'Electricista de urgencias en Asunción',
        'metaDescription' => 'Olor a quemado, chispas o disyuntor que no levanta: escríbanos por '
                           . 'WhatsApp, le decimos qué apagar ya y coordinamos la visita más '
                           . 'próxima posible.',
        'hero' => [
            'eyebrow' => 'Servicios',
            'h1'      => 'Electricista para urgencias eléctricas en Asunción y Central',
            'h2'      => 'Le decimos por WhatsApp qué es peligroso ahora y qué puede esperar.',
            'lead'    => 'Cuando algo huele a quemado, un tomacorriente chispea o el disyuntor '
                       . 'general no levanta más, escríbanos por WhatsApp con fotos o un video '
                       . 'corto. Un electricista revisa el caso, le indica qué llave cortar '
                       . 'mientras tanto y coordinamos la visita en el horario más próximo que '
                       . 'la agenda permita.',
        ],
        'includes' => [
            'Triaje por WhatsApp: qué es peligroso ahora y qué puede esperar',
            'Indicación de qué llave o disyuntor cortar mientras llega el electricista',
            'Presupuesto por WhatsApp antes de la visita, sin cargo',
            'Diagnóstico en el lugar del origen de la falla',
            'Reparación con materiales y mano de obra detallados por separado',
            'Informe escrito de lo realizado, con garantía por escrito',
        ],
        'excludes' => [
            'Traslado fuera de Asunción y Departamento Central',
            'Repuestos o equipos que no estén en stock del proveedor al momento de la visita',
        ],
        'weNeed' => [
            'Fotos o un video corto de lo que está pasando',
            'Si hay olor a quemado, humo o chispas visibles',
            'Si ya cortó la llave general o el disyuntor del circuito afectado',
        ],
        'sections' => [
            [
                'h2'   => 'Qué hacer mientras coordinamos la visita',
                'body' => [
                    'Si nota olor a quemado, humo, chispas o un tablero caliente al tacto, corte '
                        . 'la llave general y no vuelva a energizar el circuito hasta que un '
                        . 'electricista lo revise. Un disyuntor termomagnético que salta una vez '
                        . 'puede ser una sobrecarga puntual; uno que salta apenas se levanta suele '
                        . 'indicar un cortocircuito o una falla a tierra, y ahí conviene no '
                        . 'insistir.',
                    'No abra el tablero ni toque conductores. Cuéntenos por WhatsApp qué '
                        . 'artefacto estaba en uso cuando pasó, si el corte afectó a toda la casa '
                        . 'o a un ambiente, y si es una vivienda, un local o un edificio.',
                ],
            ],
            [
                'h2'   => 'Cómo respondemos',
                'body' => [
                    'No prometemos un horario fijo de atención: respondemos por WhatsApp, '
                        . 'evaluamos la urgencia real del caso y coordinamos la visita en el día '
                        . 'cuando la agenda lo permite. Lo que sí garantizamos es que le vamos a '
                        . 'decir con qué contamos y qué no, para que usted decida.',
                ],
                'items' => [
                    ['title' => 'Casos de riesgo inmediato', 'text' => 'Olor a quemado, chispas o tablero caliente: se prioriza el diagnóstico.'],
                    ['title' => 'Casos que pueden esperar', 'text' => 'Un circuito sin luz sin señales de daño: se agenda con el resto de la ruta del día.'],
                ],
            ],
        ],
        'benefits' => [
            ['title' => 'Triaje real, no una promesa vacía', 'text' => 'Le decimos qué apagar y qué esperar antes de que llegue nadie.'],
            ['title' => 'Presupuesto antes de tocar nada', 'text' => 'Ve el costo por WhatsApp antes de autorizar la visita.'],
            ['title' => 'Informe con garantía por escrito', 'text' => 'Queda constancia de lo que se hizo y con qué garantía.'],
        ],
        'faq' => [
            [
                'q' => '¿Atienden las 24 horas?',
                'a' => 'Respondemos por WhatsApp y evaluamos cada caso; si hay riesgo real (olor '
                     . 'a quemado, chispas, tablero caliente) priorizamos el diagnóstico, y '
                     . 'coordinamos la visita en el horario más próximo que la agenda permita. No '
                     . 'garantizamos un horario fijo de atención.',
            ],
            [
                'q' => 'Se cortó la luz solo en mi casa, ¿qué reviso antes de escribir?',
                'a' => 'Fíjese si el disyuntor general o alguno de los circuitos del tablero está '
                     . 'bajado. Si al subirlo vuelve a saltar en seguida, no insista: es señal de '
                     . 'cortocircuito o falla a tierra y hace falta un electricista.',
            ],
            [
                'q' => '¿Puedo subir el disyuntor si vuelve a saltar?',
                'a' => 'No lo intente varias veces. Un disyuntor que salta apenas se levanta está '
                     . 'protegiendo la instalación de una falla activa; insistir puede agravar el '
                     . 'daño o el riesgo.',
            ],
            [
                'q' => '¿Cobran algo solo por venir a evaluar?',
                'a' => 'El presupuesto se envía por WhatsApp antes de la visita, sin cargo, en '
                     . 'base a lo que usted nos cuenta y a las fotos o el video que comparta.',
            ],
            [
                'q' => 'Vivo fuera de Asunción, ¿cubren mi zona?',
                'a' => 'Cubrimos Asunción y el Departamento Central (Gran Asunción). Cuéntenos su '
                     . 'zona por WhatsApp y le confirmamos.',
            ],
        ],
        'cta'       => ['label' => 'Escribir por WhatsApp ahora', 'whatsappText' => ''],
        'related'   => ['cortocircuito-y-fallas', 'tablero-electrico-disyuntores', 'mantenimiento-electrico'],
        'guides'    => ['senales-de-una-instalacion-electrica-peligrosa', 'por-que-salta-el-disyuntor'],
        'articles'  => ['temporada-de-cortes-como-preparar-su-casa'],
        'toolLinks' => [],
    ],

    'instalacion-electrica-residencial' => [
        'path'            => '/servicios/instalacion-electrica-residencial/',
        'title'           => 'Instalación eléctrica residencial',
        'navLabel'        => 'Instalación residencial',
        'cluster'         => 'electricista',
        'parent'          => null,
        'seoTitle'        => 'Electricista a domicilio en Asunción',
        'metaDescription' => 'Instalación y reforma eléctrica residencial en Asunción y Central: '
                           . 'tablero, circuitos y puesta a tierra, con presupuesto por WhatsApp '
                           . 'antes de empezar.',
        'hero' => [
            'eyebrow' => 'Servicios',
            'h1'      => 'Electricista a domicilio en Asunción y Central',
            'h2'      => 'Instalación y reforma eléctrica para su vivienda, de punta a punta.',
            'lead'    => 'Ya sea una casa nueva, una ampliación o una reforma de una instalación '
                       . 'vieja, trabajamos desde el tablero hasta el último tomacorriente: '
                       . 'circuitos separados por uso, puesta a tierra, protección diferencial y '
                       . 'terminaciones prolijas. Presupuesto por WhatsApp antes de empezar.',
        ],
        'includes' => [
            'Relevamiento de la instalación existente o del plano de la obra',
            'Tablero seccional con disyuntores termomagnéticos por circuito',
            'Protección diferencial (DDR) donde corresponda',
            'Puesta a tierra con jabalina',
            'Circuitos separados para iluminación, tomas y artefactos de mayor consumo',
            'Cableado con sección de cable adecuada a cada circuito',
            'Colocación de tomacorrientes, llaves y bocas de luz',
            'Informe escrito de lo realizado, con garantía por escrito',
        ],
        'excludes' => [
            'Trámites de aumento de carga o nuevo suministro ante la ANDE (se cotizan aparte)',
            'Obra civil: roturas, canalizaciones en mampostería y su reposición',
            'Artefactos y luminarias, salvo que se cotice su provisión',
        ],
        'weNeed' => [
            'Cantidad de ambientes y metros cuadrados aproximados',
            'Si es instalación nueva, ampliación o reforma sobre una existente',
            'Plano de la vivienda, si lo tiene',
            'Fotos del tablero actual, si ya existe',
        ],
        'sections' => [
            [
                'h2'   => 'Cómo trabajamos la instalación',
                'body' => [
                    'Empezamos por el tablero: cuántos circuitos necesita la vivienda según sus '
                        . 'ambientes y artefactos, y qué sección de cable corresponde a cada uno. '
                        . 'Un circuito de tomas de cocina no lleva el mismo cable que uno de '
                        . 'iluminación, y mezclarlos es una de las causas más comunes de '
                        . 'disyuntores que saltan.',
                    'En una reforma, relevamos primero la instalación existente: estado del '
                        . 'cableado, si hay puesta a tierra, si el tablero tiene disyuntor '
                        . 'diferencial. A partir de ahí definimos qué se reutiliza y qué conviene '
                        . 'rehacer, y se lo mostramos antes de cotizar.',
                ],
                'items' => [
                    ['title' => 'Vivienda nueva', 'text' => 'Instalación completa desde cero, coordinada con el resto de la obra.'],
                    ['title' => 'Ampliación', 'text' => 'Circuitos nuevos sumados al tablero existente, sin sobrecargarlo.'],
                    ['title' => 'Reforma', 'text' => 'Reemplazo de cableado e instalación vieja, manteniendo terminaciones ya hechas donde se pueda.'],
                ],
            ],
            [
                'h2'   => 'Terminaciones y entrega',
                'body' => [
                    'Antes de cerrar la obra le mostramos el tablero rotulado, probamos cada '
                        . 'circuito y verificamos la puesta a tierra. Queda un informe escrito de '
                        . 'lo realizado, con garantía por escrito sobre el trabajo entregado.',
                ],
            ],
        ],
        'benefits' => [
            ['title' => 'Un solo interlocutor', 'text' => 'Desde el tablero hasta la última boca de luz, un mismo equipo.'],
            ['title' => 'Circuitos pensados para su consumo', 'text' => 'Aire acondicionado, cocina y iluminación en circuitos separados.'],
            ['title' => 'Todo por escrito', 'text' => 'Presupuesto antes de empezar e informe de lo entregado al terminar.'],
        ],
        'faq' => [
            [
                'q' => '¿Cuánto tarda una instalación completa?',
                'a' => 'Depende de la superficie y de si es obra nueva o reforma sobre una '
                     . 'instalación existente. Se lo estimamos al ver el relevamiento o el plano.',
            ],
            [
                'q' => '¿Necesito puesta a tierra si mi casa nunca la tuvo?',
                'a' => 'Sí conviene incorporarla: la puesta a tierra, junto con el disyuntor '
                     . 'diferencial, es lo que corta la corriente ante una fuga antes de que '
                     . 'llegue a una persona.',
            ],
            [
                'q' => '¿Puedo hacer la reforma por etapas?',
                'a' => 'Sí, se puede planificar por ambientes o por circuitos, siempre partiendo '
                     . 'de un tablero que soporte la carga final prevista.',
            ],
            [
                'q' => '¿Se ocupan de pedir el aumento de carga a la ANDE?',
                'a' => 'Ese trámite se cotiza aparte; lo acompañamos, pero el monto y los pasos '
                     . 'vigentes se consultan en la ANDE.',
            ],
            [
                'q' => '¿Trabajan en edificios además de casas?',
                'a' => 'Sí, para instalaciones en unidades de edificios y consorcios tenemos un '
                     . 'servicio específico, con sus propias consideraciones de medidores y áreas '
                     . 'comunes.',
            ],
        ],
        'cta'       => ['label' => 'Pedir presupuesto', 'whatsappText' => ''],
        'related'   => ['tablero-electrico-disyuntores', 'puesta-a-tierra', 'cableado-obra-nueva'],
        'guides'    => ['senales-de-una-instalacion-electrica-peligrosa'],
        'articles'  => ['como-se-arma-el-presupuesto-de-un-electricista'],
        'toolLinks' => [],
    ],

    'tablero-electrico-disyuntores' => [
        'path'            => '/servicios/tablero-electrico-disyuntores/',
        'title'           => 'Cambio y reforma de tablero eléctrico',
        'navLabel'        => 'Tablero y disyuntores',
        'cluster'         => 'electricista',
        'parent'          => null,
        'seoTitle'        => 'Cambio de tablero eléctrico y disyuntores',
        'metaDescription' => 'Tablero viejo o sin diferencial: lo reemplazamos o ampliamos con '
                           . 'disyuntores termomagnéticos y DDR dimensionados a su carga. '
                           . 'Presupuesto por WhatsApp.',
        'hero' => [
            'eyebrow' => 'Servicios',
            'h1'      => 'Cambio de tablero eléctrico y disyuntores',
            'h2'      => 'Un tablero acorde a los circuitos y la carga que realmente tiene.',
            'lead'    => 'Un tablero de porcelana con fusibles, sin diferencial, o con menos '
                       . 'llaves que circuitos en la casa, es de las causas más comunes de '
                       . 'disyuntores que saltan seguido o de instalaciones sin protección real. '
                       . 'Evaluamos su tablero actual y le cotizamos el cambio o la ampliación.',
        ],
        'includes' => [
            'Evaluación del tablero actual: estado, cantidad de circuitos y protección existente',
            'Tablero seccional nuevo, dimensionado a la carga de la vivienda o el local',
            'Disyuntores termomagnéticos por circuito',
            'Protección diferencial (DDR)',
            'Rotulado de cada llave según el circuito que protege',
            'Prueba de cada circuito antes de la entrega',
            'Informe escrito de lo realizado, con garantía por escrito',
        ],
        'excludes' => [
            'Recableado de circuitos existentes, salvo que se cotice junto con el tablero',
            'Trámites ante la ANDE',
        ],
        'weNeed' => [
            'Fotos del tablero actual, abierto y cerrado',
            'Cantidad aproximada de circuitos o ambientes',
            'Si tiene aire acondicionado, horno eléctrico u otro artefacto de alto consumo',
        ],
        'sections' => [
            [
                'h2'   => 'Cuándo conviene cambiar el tablero',
                'body' => [
                    'Si su tablero es de fusibles o de "tapitas", no tiene diferencial, o le '
                        . 'agregaron circuitos con el tiempo hasta quedarse sin lugar, ya no '
                        . 'protege como debería. Un disyuntor termomagnético corta ante '
                        . 'sobrecarga o cortocircuito; el diferencial corta ante una fuga a '
                        . 'tierra, que es lo que protege a las personas. Sin ambos, la '
                        . 'instalación funciona, pero no está protegida.',
                    'También conviene revisarlo antes de sumar aire acondicionado u otros '
                        . 'artefactos de alto consumo: cada circuito nuevo necesita su propio '
                        . 'disyuntor dimensionado, y el tablero tiene que tener lugar y capacidad '
                        . 'para recibirlo.',
                ],
            ],
            [
                'h2'   => 'Qué le entregamos',
                'body' => [
                    'Un tablero rotulado, con cada disyuntor identificado por el circuito que '
                        . 'protege, y un informe escrito de lo realizado con garantía por '
                        . 'escrito. Le mostramos el resultado antes de cerrar el trabajo.',
                ],
            ],
        ],
        'benefits' => [
            ['title' => 'Diferencial incluido en la propuesta', 'text' => 'No dejamos la protección de personas como opcional.'],
            ['title' => 'Dimensionado a su carga real', 'text' => 'Consideramos qué artefactos usa hoy y cuáles planea sumar.'],
            ['title' => 'Tablero rotulado', 'text' => 'Sabe qué llave corresponde a qué ambiente o circuito.'],
        ],
        'faq' => [
            [
                'q' => '¿Cómo sé si mi tablero necesita cambio?',
                'a' => 'Si es de fusibles, no tiene disyuntor diferencial, o el disyuntor general '
                     . 'salta seguido sin causa clara, conviene evaluarlo. Mándenos fotos del '
                     . 'tablero abierto por WhatsApp y le decimos qué observamos.',
            ],
            [
                'q' => '¿Qué diferencia hay entre disyuntor termomagnético y diferencial?',
                'a' => 'El termomagnético corta el circuito ante sobrecarga o cortocircuito. El '
                     . 'diferencial (DDR) corta ante una fuga de corriente a tierra, que es lo que '
                     . 'evita un choque eléctrico a una persona. Un tablero completo tiene ambos.',
            ],
            [
                'q' => '¿Se queda la casa sin luz mientras hacen el cambio?',
                'a' => 'Sí, durante el cambio del tablero se corta el suministro general por el '
                     . 'tiempo que dura el trabajo; se lo coordinamos con anticipación.',
            ],
            [
                'q' => '¿Puedo agrandar el tablero sin cambiarlo entero?',
                'a' => 'Depende del modelo y de si tiene espacio físico disponible; si no lo '
                     . 'tiene, conviene reemplazarlo por uno con más capacidad.',
            ],
        ],
        'cta'       => ['label' => 'Pedir presupuesto', 'whatsappText' => ''],
        'related'   => ['cortocircuito-y-fallas', 'puesta-a-tierra', 'instalacion-electrica-residencial'],
        'guides'    => ['por-que-salta-el-disyuntor', 'senales-de-una-instalacion-electrica-peligrosa'],
        'articles'  => ['aire-acondicionado-y-tablero-electrico'],
        'toolLinks' => [],
    ],

    'cortocircuito-y-fallas' => [
        'path'            => '/servicios/cortocircuito-y-fallas/',
        'title'           => 'Reparación de cortocircuitos y fallas eléctricas',
        'navLabel'        => 'Cortocircuitos y fallas',
        'cluster'         => 'electricista',
        'parent'          => null,
        'seoTitle'        => 'Reparación de cortocircuitos en Asunción',
        'metaDescription' => 'Disyuntor que salta o circuito sin luz: buscamos el origen de la '
                           . 'falla, se lo mostramos y reparamos, con presupuesto por WhatsApp '
                           . 'antes de intervenir.',
        'hero' => [
            'eyebrow' => 'Servicios',
            'h1'      => 'Reparación de cortocircuitos y fallas eléctricas',
            'h2'      => 'Buscamos el origen, no solo apagamos el síntoma.',
            'lead'    => 'Un disyuntor que salta apenas se levanta, un tomacorriente que no '
                       . 'funciona o un circuito que se calienta tienen una causa concreta: un '
                       . 'cable dañado, una conexión floja, un empalme mal hecho o un artefacto en '
                       . 'falla. La ubicamos, se la mostramos y reparamos.',
        ],
        'includes' => [
            'Diagnóstico del circuito afectado en el lugar',
            'Localización del punto de la falla (cortocircuito, fuga a tierra o sobrecarga)',
            'Reparación o reemplazo del tramo de cable, conexión o accesorio dañado',
            'Verificación del resto del circuito antes de reenergizarlo',
            'Presupuesto por WhatsApp antes de intervenir',
            'Informe escrito de lo realizado, con garantía por escrito',
        ],
        'excludes' => [
            'Reemplazo de artefactos o electrodomésticos en falla (se recomienda su revisión aparte)',
            'Recableado completo de la instalación, salvo que la falla lo requiera y se cotice',
        ],
        'weNeed' => [
            'Qué disyuntor salta y con qué frecuencia',
            'Si el problema empezó después de instalar o usar algún artefacto nuevo',
            'Fotos del tablero, si es posible',
        ],
        'sections' => [
            [
                'h2'   => 'Cómo encontramos la falla',
                'body' => [
                    'Empezamos por el tablero: qué disyuntor protege el circuito afectado y en qué '
                        . 'condición está. De ahí seguimos el circuito hasta ubicar el punto exacto '
                        . 'de la falla, sea un cable con el aislamiento dañado, un empalme suelto o '
                        . 'un artefacto que está derivando corriente a tierra.',
                    'No reemplazamos el disyuntor por uno de mayor amperaje para que "deje de '
                        . 'saltar": eso quita protección en lugar de resolver la causa. El objetivo '
                        . 'es reparar el origen y dejar el circuito protegido como corresponde.',
                ],
            ],
            [
                'h2'   => 'Qué le mostramos',
                'body' => [
                    'Antes de cerrar el trabajo le mostramos dónde estaba la falla y qué se hizo, '
                        . 'con el circuito ya probado y reenergizado. Queda constancia por escrito '
                        . 'de lo realizado y su garantía.',
                ],
            ],
        ],
        'benefits' => [
            ['title' => 'Se busca la causa, no el parche', 'text' => 'Reparamos el origen del problema, no solo cambiamos el disyuntor.'],
            ['title' => 'Presupuesto antes de intervenir', 'text' => 'Sabe el alcance del trabajo antes de autorizarlo.'],
            ['title' => 'Circuito verificado al terminar', 'text' => 'Se prueba antes de reenergizar, no se entrega "a ver si funciona".'],
        ],
        'faq' => [
            [
                'q' => '¿Por qué mi disyuntor salta apenas lo levanto?',
                'a' => 'Suele indicar un cortocircuito o una fuga a tierra activa en ese circuito, '
                     . 'no una sobrecarga puntual. Conviene que lo revise un electricista antes de '
                     . 'seguir insistiendo con la llave.',
            ],
            [
                'q' => '¿Puede ser un solo tomacorriente el que causa el problema?',
                'a' => 'Sí, un tomacorriente o un empalme dañado en cualquier punto del circuito '
                     . 'puede tirar abajo todo el circuito, aunque el resto de la instalación esté '
                     . 'bien.',
            ],
            [
                'q' => '¿Es peligroso seguir usando la casa hasta que vengan?',
                'a' => 'Si el disyuntor ya está cortando el circuito, déjelo apagado hasta la '
                     . 'visita; no lo levante varias veces intentando que quede arriba.',
            ],
            [
                'q' => '¿Cambian el artefacto que causó la falla?',
                'a' => 'No reparamos electrodomésticos; si la falla está en el artefacto y no en '
                     . 'la instalación, se lo indicamos para que lo revise quien corresponda.',
            ],
        ],
        'cta'       => ['label' => 'Pedir presupuesto', 'whatsappText' => ''],
        'related'   => ['electricista-24-horas', 'tablero-electrico-disyuntores', 'mantenimiento-electrico'],
        'guides'    => ['por-que-salta-el-disyuntor', 'senales-de-una-instalacion-electrica-peligrosa'],
        'articles'  => [],
        'toolLinks' => [],
    ],

    'puesta-a-tierra' => [
        'path'            => '/servicios/puesta-a-tierra/',
        'title'           => 'Puesta a tierra',
        'navLabel'        => 'Puesta a tierra',
        'cluster'         => 'electricista',
        'parent'          => null,
        'seoTitle'        => 'Instalación de puesta a tierra Asunción',
        'metaDescription' => 'Instalación o revisión de la puesta a tierra con jabalina: la base '
                           . 'para que el disyuntor diferencial corte antes de que una fuga llegue '
                           . 'a una persona.',
        'hero' => [
            'eyebrow' => 'Servicios',
            'h1'      => 'Instalación y revisión de puesta a tierra',
            'h2'      => 'La base para que la protección diferencial funcione de verdad.',
            'lead'    => 'Muchas instalaciones viejas en Asunción y Central no tienen puesta a '
                       . 'tierra, o la tienen mal hecha. Sin ella, el disyuntor diferencial no '
                       . 'tiene contra qué comparar la corriente y no corta como debería. '
                       . 'Instalamos la jabalina y conectamos el circuito de tierra a su tablero.',
        ],
        'includes' => [
            'Evaluación de si la vivienda o el local ya tiene puesta a tierra y en qué estado',
            'Colocación de jabalina de puesta a tierra',
            'Conexión del circuito de tierra al tablero y a los tomacorrientes con polo a tierra',
            'Verificación de continuidad del circuito de tierra',
            'Coordinación con el disyuntor diferencial existente o su instalación si falta',
            'Informe escrito de lo realizado, con garantía por escrito',
        ],
        'excludes' => [
            'Medición de resistencia de puesta a tierra con instrumento certificado (se cotiza aparte si se requiere para un trámite)',
            'Recableado general de la instalación',
        ],
        'weNeed' => [
            'Si la instalación ya tiene algún tipo de puesta a tierra',
            'Si el tablero tiene disyuntor diferencial instalado',
            'Tipo de terreno del patio o jardín, si lo sabe',
        ],
        'sections' => [
            [
                'h2'   => 'Por qué hace falta',
                'body' => [
                    'La puesta a tierra le da un camino seguro a la corriente de fuga, y es lo '
                        . 'que permite que el disyuntor diferencial (DDR) detecte esa fuga y corte '
                        . 'el circuito. Sin puesta a tierra, la carcasa metálica de un '
                        . 'electrodoméstico dañado puede quedar energizada sin que nada lo avise.',
                    'En casas construidas hace varios años, o con ampliaciones hechas por etapas, '
                        . 'es común que la tierra falte o esté conectada solo en parte de la '
                        . 'instalación. Lo revisamos junto con el estado del tablero.',
                ],
            ],
            [
                'h2'   => 'Cómo lo instalamos',
                'body' => [
                    'Colocamos la jabalina en un punto adecuado del terreno, conectamos el '
                        . 'circuito de tierra hasta el tablero y verificamos que llegue a los '
                        . 'tomacorrientes con polo a tierra. Si el tablero no tiene disyuntor '
                        . 'diferencial, se lo señalamos como complemento necesario.',
                ],
            ],
        ],
        'benefits' => [
            ['title' => 'Protección real para las personas', 'text' => 'La tierra es lo que hace posible que el diferencial corte a tiempo.'],
            ['title' => 'Se verifica, no se supone', 'text' => 'Comprobamos continuidad antes de dar el trabajo por terminado.'],
            ['title' => 'Se revisa junto con el tablero', 'text' => 'No se instala aislada de la protección que ya tiene o le falta.'],
        ],
        'faq' => [
            [
                'q' => '¿Cómo sé si mi casa tiene puesta a tierra?',
                'a' => 'Fíjese si los tomacorrientes tienen el tercer polo conectado y si hay un '
                     . 'cable identificado como tierra en el tablero; si tiene dudas, lo '
                     . 'revisamos nosotros.',
            ],
            [
                'q' => '¿Alcanza con tener disyuntor diferencial sin puesta a tierra?',
                'a' => 'El diferencial protege mejor con una puesta a tierra correcta; sin ella, '
                     . 'su capacidad de detectar una fuga se reduce.',
            ],
            [
                'q' => '¿La jabalina se instala adentro o afuera de la casa?',
                'a' => 'Se instala enterrada, normalmente en el patio o jardín, en un punto '
                     . 'cercano al tablero, y se conecta a él mediante un conductor dedicado.',
            ],
            [
                'q' => '¿Sirve para un local comercial o solo para viviendas?',
                'a' => 'Sirve para ambos; en locales comerciales y edificios suele combinarse con '
                     . 'una revisión más amplia del tablero y los circuitos existentes.',
            ],
        ],
        'cta'       => ['label' => 'Pedir presupuesto', 'whatsappText' => ''],
        'related'   => ['tablero-electrico-disyuntores', 'instalacion-electrica-residencial', 'cortocircuito-y-fallas'],
        'guides'    => ['senales-de-una-instalacion-electrica-peligrosa'],
        'articles'  => [],
        'toolLinks' => [],
    ],

    'instalacion-aire-acondicionado' => [
        'path'            => '/servicios/instalacion-aire-acondicionado/',
        'title'           => 'Instalación eléctrica para aire acondicionado',
        'navLabel'        => 'Aire acondicionado',
        'cluster'         => 'electricista',
        'parent'          => null,
        'seoTitle'        => 'Instalación eléctrica aire acondicionado',
        'metaDescription' => 'Circuito independiente con disyuntor propio para su aire '
                           . 'acondicionado, dimensionado a los BTU del equipo. Presupuesto por '
                           . 'WhatsApp antes de instalar.',
        'hero' => [
            'eyebrow' => 'Servicios',
            'h1'      => 'Instalación eléctrica para aire acondicionado',
            'h2'      => 'Un circuito propio, con el disyuntor y el cable que el equipo necesita.',
            'lead'    => 'En verano, el aire acondicionado suele ser el artefacto que más carga '
                       . 'agrega a una instalación. Cada equipo necesita su propio circuito, con '
                       . 'sección de cable y disyuntor dimensionados a sus BTU, para no '
                       . 'sobrecargar un circuito que ya tiene otros usos.',
        ],
        'includes' => [
            'Cálculo del circuito según los BTU y la potencia del equipo',
            'Tendido de cable con sección adecuada desde el tablero hasta el equipo',
            'Disyuntor termomagnético independiente para el circuito',
            'Verificación de que el tablero tenga lugar y capacidad para el nuevo circuito',
            'Conexión eléctrica del equipo (no incluye la instalación frigorífica)',
            'Informe escrito de lo realizado, con garantía por escrito',
        ],
        'excludes' => [
            'Instalación frigorífica del equipo (cañerías, gas, soporte): se coordina con el instalador del equipo',
            'El equipo de aire acondicionado en sí',
        ],
        'weNeed' => [
            'Capacidad del equipo en BTU',
            'Si va a sumar uno o varios equipos',
            'Fotos del tablero actual',
        ],
        'sections' => [
            [
                'h2'   => 'Por qué necesita un circuito propio',
                'body' => [
                    'Un aire acondicionado conectado a un circuito compartido con otros '
                        . 'tomacorrientes es una causa frecuente de disyuntores que saltan al '
                        . 'arrancar el compresor. El circuito independiente, con su propio '
                        . 'disyuntor y sección de cable, evita esa sobrecarga y protege el equipo.',
                    'Antes de instalar, revisamos si el tablero tiene lugar para un disyuntor más '
                        . 'y si la instalación general soporta la carga adicional, sobre todo '
                        . 'cuando ya hay otros equipos de aire acondicionado en la vivienda.',
                ],
            ],
            [
                'h2'   => 'Varios equipos en la misma vivienda',
                'body' => [
                    'Si va a instalar aire acondicionado en más de un ambiente, conviene planificar '
                        . 'los circuitos juntos: cuántos equipos, en qué ambientes y con qué BTU '
                        . 'cada uno, para dimensionar el tablero de una sola vez en lugar de ir '
                        . 'ampliando equipo por equipo.',
                ],
            ],
        ],
        'benefits' => [
            ['title' => 'Circuito dimensionado al equipo', 'text' => 'Cable y disyuntor calculados según los BTU, no "a ojo".'],
            ['title' => 'No sobrecarga otros circuitos', 'text' => 'El aire acondicionado no comparte llave con tomas ya en uso.'],
            ['title' => 'Se revisa el tablero antes de sumar carga', 'text' => 'Evitamos instalar un circuito que el tablero no puede sostener.'],
        ],
        'faq' => [
            [
                'q' => '¿Necesito un disyuntor por cada equipo de aire acondicionado?',
                'a' => 'Sí, cada equipo va en su propio circuito con su propio disyuntor, '
                     . 'dimensionado a su potencia.',
            ],
            [
                'q' => '¿Se puede usar un tomacorriente existente?',
                'a' => 'No se recomienda si ese tomacorriente comparte circuito con otros usos; '
                     . 'la instalación correcta es un circuito independiente desde el tablero.',
            ],
            [
                'q' => '¿Instalan también la parte frigorífica del equipo?',
                'a' => 'Nos ocupamos de la parte eléctrica: cable, disyuntor y conexión. La '
                     . 'instalación frigorífica se coordina con el instalador del equipo.',
            ],
            [
                'q' => '¿Cómo sé cuánto va a consumir el equipo al mes?',
                'a' => 'Puede estimarlo con nuestra calculadora de consumo eléctrico antes de '
                     . 'decidir el equipo.',
            ],
        ],
        'cta'       => ['label' => 'Pedir presupuesto', 'whatsappText' => ''],
        'related'   => ['tablero-electrico-disyuntores', 'instalacion-electrica-residencial', 'mantenimiento-electrico'],
        'guides'    => ['por-que-salta-el-disyuntor'],
        'articles'  => ['aire-acondicionado-y-tablero-electrico'],
        'toolLinks' => [
            [
                'path'  => '/herramientas/consumo-electrico/',
                'label' => 'Calcule el consumo',
                'text'  => 'Estime cuánto va a sumar el aire acondicionado a su factura mensual.',
            ],
        ],
    ],

    'iluminacion-led' => [
        'path'            => '/servicios/iluminacion-led/',
        'title'           => 'Cambio de iluminación a LED',
        'navLabel'        => 'Iluminación LED',
        'cluster'         => 'electricista',
        'parent'          => null,
        'seoTitle'        => 'Instalación de iluminación LED Asunción',
        'metaDescription' => 'Cambio de luminarias a LED en su vivienda o local, con revisión del '
                           . 'circuito de iluminación incluida. Presupuesto por WhatsApp antes de '
                           . 'empezar.',
        'hero' => [
            'eyebrow' => 'Servicios',
            'h1'      => 'Cambio de iluminación a LED',
            'h2'      => 'Menos consumo en el circuito de iluminación, con la instalación revisada.',
            'lead'    => 'Cambiamos luminarias incandescentes, halógenas o fluorescentes por LED '
                       . 'en viviendas y locales, y de paso revisamos el estado del circuito de '
                       . 'iluminación: portalámparas, llaves y conexiones que suelen quedar sin '
                       . 'atención por años.',
        ],
        'includes' => [
            'Relevamiento de las luminarias actuales y su tipo de conexión',
            'Reemplazo de luminarias por LED, en las mismas bocas o con las que se acuerden',
            'Revisión de portalámparas, llaves y conexiones del circuito de iluminación',
            'Ajuste del circuito si la carga actual quedó sobredimensionada para LED',
            'Informe escrito de lo realizado, con garantía por escrito',
        ],
        'excludes' => [
            'Las luminarias LED en sí, salvo que se cotice su provisión',
            'Obra civil o cambios de diseño lumínico',
        ],
        'weNeed' => [
            'Cantidad aproximada de bocas o luminarias a cambiar',
            'Si busca solo el cambio de lámparas o también un rediseño de la iluminación',
            'Ambientes involucrados: casa completa, algunos ambientes, o un local',
        ],
        'sections' => [
            [
                'h2'   => 'Qué revisamos al cambiar a LED',
                'body' => [
                    'El cambio a LED reduce el consumo del circuito de iluminación, pero también '
                        . 'es una buena oportunidad para revisar portalámparas viejos, conexiones '
                        . 'sueltas o llaves gastadas que quedaron sin atención mientras las '
                        . 'lámparas incandescentes seguían funcionando.',
                    'En locales comerciales, además del cambio de luminarias, evaluamos si el '
                        . 'circuito de iluminación está bien separado de los circuitos de fuerza, '
                        . 'para no depender de una sola llave para todo el local.',
                ],
            ],
        ],
        'benefits' => [
            ['title' => 'Menos carga en el circuito', 'text' => 'El LED consume menos, lo que alivia el circuito de iluminación.'],
            ['title' => 'Se revisa la instalación de paso', 'text' => 'Aprovechamos la visita para chequear portalámparas y conexiones.'],
            ['title' => 'Sirve para casa o local', 'text' => 'Mismo servicio adaptado a viviendas y a comercios.'],
        ],
        'faq' => [
            [
                'q' => '¿El cambio a LED baja mi factura de la ANDE?',
                'a' => 'La iluminación LED consume menos que la incandescente o fluorescente, así '
                     . 'que aporta al ahorro; el impacto exacto en su factura depende de cuánto '
                     . 'usa esas luces y del resto de su consumo.',
            ],
            [
                'q' => '¿Sirven las mismas bocas y portalámparas?',
                'a' => 'En la mayoría de los casos sí; si algún portalámparas está dañado o no es '
                     . 'compatible, se lo indicamos antes de cambiar la luminaria.',
            ],
            [
                'q' => '¿Hacen solo el cambio o también diseño de iluminación?',
                'a' => 'Hacemos el cambio de luminarias y la revisión eléctrica; si busca un '
                     . 'rediseño más completo de la iluminación, cuéntenos y vemos el alcance.',
            ],
            [
                'q' => '¿Conviene hacerlo junto con otra revisión eléctrica?',
                'a' => 'Sí, si ya va a tener un electricista en casa por otro motivo, es un buen '
                     . 'momento para sumar el cambio de luminarias en la misma visita.',
            ],
        ],
        'cta'       => ['label' => 'Pedir presupuesto', 'whatsappText' => ''],
        'related'   => ['mantenimiento-electrico', 'instalacion-electrica-residencial', 'instalacion-electrica-comercial'],
        'guides'    => [],
        'articles'  => ['led-vs-incandescente-cuanto-ahorra'],
        'toolLinks' => [
            [
                'path'  => '/herramientas/consumo-electrico/',
                'label' => 'Calcule el consumo',
                'text'  => 'Compare cuánto consume su iluminación actual frente a LED.',
            ],
        ],
    ],

    'cableado-obra-nueva' => [
        'path'            => '/servicios/cableado-obra-nueva/',
        'title'           => 'Cableado eléctrico para obra nueva',
        'navLabel'        => 'Cableado obra nueva',
        'cluster'         => 'electricista',
        'parent'          => null,
        'seoTitle'        => 'Cableado eléctrico para obra nueva',
        'metaDescription' => 'Cableado eléctrico completo para obra nueva, coordinado con el avance '
                           . 'de la construcción: canalización, circuitos y tablero, con presupuesto '
                           . 'por WhatsApp.',
        'hero' => [
            'eyebrow' => 'Servicios',
            'h1'      => 'Cableado eléctrico para obra nueva',
            'h2'      => 'La instalación eléctrica planificada desde el plano, no improvisada.',
            'lead'    => 'En obra nueva, el cableado eléctrico se define junto con el plano: por '
                       . 'dónde pasan las canalizaciones, cuántos circuitos separan iluminación, '
                       . 'tomas y artefactos de mayor consumo, y dónde va el tablero. Coordinamos '
                       . 'el trabajo con el avance de la construcción.',
        ],
        'includes' => [
            'Lectura del plano y definición de circuitos según ambientes y usos',
            'Canalización y tendido de cable en la etapa de obra que corresponde',
            'Tablero seccional con disyuntores termomagnéticos y diferencial',
            'Puesta a tierra con jabalina',
            'Colocación de tomacorrientes, llaves y bocas de luz en la etapa de terminaciones',
            'Prueba de cada circuito antes de la entrega',
            'Informe escrito de lo realizado, con garantía por escrito',
        ],
        'excludes' => [
            'Obra civil: rotura, mampostería y su reposición',
            'Artefactos y luminarias, salvo que se cotice su provisión',
            'Trámites de nuevo suministro ante la ANDE',
        ],
        'weNeed' => [
            'Plano de la obra',
            'Etapa actual de la construcción',
            'Lista de artefactos previstos de mayor consumo (aire acondicionado, horno, etc.)',
        ],
        'sections' => [
            [
                'h2'   => 'Coordinación con la obra',
                'body' => [
                    'El cableado eléctrico tiene su momento dentro del cronograma de obra: '
                        . 'canalización antes del revoque, tendido de cable antes de cerrar '
                        . 'paredes y cielorrasos, y colocación de tomacorrientes y llaves en la '
                        . 'etapa de terminaciones. Coordinamos cada etapa con el resto de los '
                        . 'gremios para no atrasar el avance general.',
                    'Definir los circuitos desde el plano evita después tener que abrir pared '
                        . 'para sumar un tomacorriente que faltó, o descubrir que el tablero '
                        . 'previsto quedó chico para los artefactos que finalmente se instalaron.',
                ],
            ],
            [
                'h2'   => 'Qué queda listo al entregar',
                'body' => [
                    'Un tablero rotulado, cada circuito probado y la puesta a tierra verificada, '
                        . 'con informe escrito de lo realizado y garantía por escrito, listo para '
                        . 'que se conecte el suministro.',
                ],
            ],
        ],
        'benefits' => [
            ['title' => 'Circuitos definidos desde el plano', 'text' => 'Evita aberturas y modificaciones después de terminada la obra.'],
            ['title' => 'Coordinado con el cronograma', 'text' => 'Trabajamos en la etapa de obra que corresponde a cada tarea.'],
            ['title' => 'Tablero pensado para el uso final', 'text' => 'Considera los artefactos previstos, no solo los de hoy.'],
        ],
        'faq' => [
            [
                'q' => '¿En qué etapa de la obra empiezan a trabajar?',
                'a' => 'La canalización se hace antes del revoque; el tendido de cable, antes de '
                     . 'cerrar paredes y cielorrasos; y la colocación de tomas y llaves, en '
                     . 'terminaciones. Nos coordinamos con el resto de la obra.',
            ],
            [
                'q' => '¿Pueden trabajar directamente con mi arquitecto o maestro de obra?',
                'a' => 'Sí, coordinamos con quien esté a cargo de la obra para ajustar el plano '
                     . 'eléctrico al avance real de la construcción.',
            ],
            [
                'q' => '¿Qué pasa si sumo un artefacto nuevo después de definido el plano?',
                'a' => 'Es mejor avisarnos antes de cerrar paredes, para sumar el circuito '
                     . 'necesario sin tener que abrir después.',
            ],
            [
                'q' => '¿Dejan la instalación lista para pedir el suministro a la ANDE?',
                'a' => 'Dejamos la instalación terminada y probada; el trámite de nuevo suministro '
                     . 'ante la ANDE se gestiona aparte, con los requisitos vigentes que se '
                     . 'consultan en la ANDE.',
            ],
        ],
        'cta'       => ['label' => 'Pedir presupuesto', 'whatsappText' => ''],
        'related'   => ['instalacion-electrica-residencial', 'tablero-electrico-disyuntores', 'puesta-a-tierra'],
        'guides'    => ['como-pedir-aumento-de-carga-ande'],
        'articles'  => [],
        'toolLinks' => [],
    ],

    'instalacion-electrica-comercial' => [
        'path'            => '/servicios/instalacion-electrica-comercial/',
        'title'           => 'Instalación eléctrica comercial',
        'navLabel'        => 'Instalación comercial',
        'cluster'         => 'electricista',
        'parent'          => null,
        'seoTitle'        => 'Electricista para locales y comercios',
        'metaDescription' => 'Instalación eléctrica para locales, oficinas y depósitos: circuitos '
                           . 'monofásicos y trifásicos, tablero y protección, con presupuesto por '
                           . 'WhatsApp.',
        'hero' => [
            'eyebrow' => 'Servicios',
            'h1'      => 'Instalación eléctrica para locales y comercios',
            'h2'      => 'Circuitos pensados para el equipamiento y el horario de su negocio.',
            'lead'    => 'Un local, una oficina o un depósito tiene una carga distinta a una '
                       . 'vivienda: heladeras, equipos de aire acondicionado que corren todo el '
                       . 'día, cartelería, puntos de venta. Diseñamos y mantenemos la instalación '
                       . 'monofásica o trifásica según lo que su negocio realmente usa.',
        ],
        'includes' => [
            'Relevamiento del equipamiento eléctrico actual o previsto',
            'Definición de circuitos monofásicos o trifásicos según la carga',
            'Tablero seccional con disyuntores termomagnéticos y diferencial',
            'Puesta a tierra con jabalina',
            'Circuitos separados por área o por tipo de carga (heladeras, climatización, iluminación)',
            'Informe escrito de lo realizado, con garantía por escrito',
        ],
        'excludes' => [
            'Trámites de aumento de carga o cambio de categoría de suministro ante la ANDE',
            'Cartelería y sus conexiones eléctricas específicas, salvo que se cotice aparte',
        ],
        'weNeed' => [
            'Rubro del local o negocio',
            'Lista de equipamiento eléctrico principal (heladeras, aires, equipos de cocina, etc.)',
            'Si el suministro actual es monofásico o trifásico',
        ],
        'sections' => [
            [
                'h2'   => 'Cargas propias de un local comercial',
                'body' => [
                    'Un comercio suele tener equipos que funcionan de forma continua durante todo '
                        . 'el horario de atención: heladeras, freezers, aire acondicionado. Esa '
                        . 'carga sostenida requiere circuitos dimensionados para trabajar horas '
                        . 'seguidas, no solo picos puntuales como en una vivienda.',
                    'Si el consumo previsto es alto, puede corresponder un suministro trifásico '
                        . '220/380 V en lugar de monofásico; eso lo evaluamos junto con la ANDE '
                        . 'según su categoría de consumo.',
                ],
            ],
            [
                'h2'   => 'Mantenimiento del local',
                'body' => [
                    'Además de la instalación inicial, ofrecemos revisiones periódicas para locales '
                        . 'que operan muchas horas al día, donde una falla eléctrica significa '
                        . 'horas de negocio cerrado.',
                ],
            ],
        ],
        'benefits' => [
            ['title' => 'Pensado para carga continua', 'text' => 'Circuitos que soportan heladeras y climatización funcionando horas seguidas.'],
            ['title' => 'Monofásico o trifásico según su consumo', 'text' => 'Evaluamos qué suministro corresponde a su negocio.'],
            ['title' => 'Menos horas de local cerrado', 'text' => 'Mantenimiento preventivo pensado para reducir imprevistos.'],
        ],
        'faq' => [
            [
                'q' => '¿Cómo sé si necesito trifásico en lugar de monofásico?',
                'a' => 'Depende de la potencia total de su equipamiento; si tiene varios equipos '
                     . 'de alto consumo funcionando a la vez, conviene evaluarlo. Cuéntenos su '
                     . 'equipamiento y lo revisamos.',
            ],
            [
                'q' => '¿Trabajan fuera del horario de atención para no afectar el negocio?',
                'a' => 'Coordinamos la visita en el horario que le resulte más conveniente, dentro '
                     . 'de la disponibilidad de agenda.',
            ],
            [
                'q' => '¿Hacen mantenimiento periódico para locales?',
                'a' => 'Sí, ofrecemos revisiones periódicas como servicio aparte; puede consultar '
                     . 'el detalle en mantenimiento eléctrico.',
            ],
            [
                'q' => '¿Se ocupan del trámite de cambio de categoría ante la ANDE?',
                'a' => 'Ese trámite se cotiza aparte y lo acompañamos, pero los requisitos y '
                     . 'montos vigentes se consultan en la ANDE.',
            ],
        ],
        'cta'       => ['label' => 'Pedir presupuesto', 'whatsappText' => ''],
        'related'   => ['mantenimiento-electrico', 'tablero-electrico-disyuntores', 'iluminacion-led'],
        'guides'    => ['como-pedir-aumento-de-carga-ande'],
        'articles'  => [],
        'toolLinks' => [],
    ],

    'mantenimiento-electrico' => [
        'path'            => '/servicios/mantenimiento-electrico/',
        'title'           => 'Mantenimiento eléctrico preventivo',
        'navLabel'        => 'Mantenimiento eléctrico',
        'cluster'         => 'electricista',
        'parent'          => null,
        'seoTitle'        => 'Mantenimiento eléctrico preventivo',
        'metaDescription' => 'Revisión periódica del tablero, circuitos y puesta a tierra para '
                             . 'detectar fallas antes de que corten la luz o generen riesgo, con '
                             . 'presupuesto por WhatsApp.',
        'hero' => [
            'eyebrow' => 'Servicios',
            'h1'      => 'Mantenimiento eléctrico preventivo',
            'h2'      => 'Revisamos antes de que el problema se note.',
            'lead'    => 'Un tablero se recalienta, un empalme se afloja o un disyuntor se '
                       . 'desgasta sin que se note hasta que falla. La revisión periódica detecta '
                       . 'esos puntos antes de que se conviertan en un corte de luz o un riesgo '
                       . 'real. Aplica a viviendas, locales, edificios y depósitos.',
        ],
        'includes' => [
            'Revisión visual y funcional del tablero y sus disyuntores',
            'Verificación de ajuste de conexiones y empalmes accesibles',
            'Prueba del disyuntor diferencial (DDR)',
            'Verificación de la puesta a tierra',
            'Detección de puntos de calentamiento o desgaste',
            'Informe escrito con lo revisado y lo que requiere atención',
        ],
        'excludes' => [
            'Reparaciones detectadas durante la revisión (se cotizan aparte)',
            'Medición con instrumentos certificados para trámites específicos',
        ],
        'weNeed' => [
            'Tipo de propiedad: vivienda, local, edificio o depósito',
            'Antigüedad aproximada de la instalación',
            'Si hubo disyuntores que saltaron con frecuencia en los últimos meses',
        ],
        'sections' => [
            [
                'h2'   => 'Qué se revisa',
                'body' => [
                    'Recorremos el tablero, probamos el disyuntor diferencial (que conviene '
                        . 'probar periódicamente con su propio botón de test), revisamos '
                        . 'conexiones accesibles y buscamos señales de calentamiento en llaves y '
                        . 'empalmes. Le entregamos un informe escrito con lo que está bien y lo que '
                        . 'requiere atención, para que decida cuándo actuar.',
                    'Es especialmente útil antes del verano, cuando el aire acondicionado suma '
                        . 'carga a la instalación, y en propiedades con instalaciones de varios '
                        . 'años sin revisión.',
                ],
            ],
            [
                'h2'   => 'Para edificios y consorcios',
                'body' => [
                    'En edificios, además del tablero de cada unidad, revisamos los tableros de '
                        . 'áreas comunes, un punto que suele quedar sin mantenimiento por no ser '
                        . 'responsabilidad clara de ningún propietario en particular.',
                ],
            ],
        ],
        'benefits' => [
            ['title' => 'Detecta antes de que falle', 'text' => 'Encuentra puntos de riesgo antes de que corten la luz.'],
            ['title' => 'Informe con lo que requiere atención', 'text' => 'Sabe qué está bien y qué conviene resolver, con prioridad.'],
            ['title' => 'Sirve para cualquier tipo de propiedad', 'text' => 'Vivienda, local, edificio o depósito.'],
        ],
        'faq' => [
            [
                'q' => '¿Cada cuánto conviene hacer el mantenimiento?',
                'a' => 'Depende de la antigüedad de la instalación y de cuánta carga soporta; se '
                     . 'lo recomendamos según lo que encontramos en la primera revisión.',
            ],
            [
                'q' => '¿Qué pasa si encuentran una falla durante la revisión?',
                'a' => 'Se la mostramos y le cotizamos la reparación aparte; el mantenimiento en '
                     . 'sí es la revisión, no incluye reparaciones no acordadas de antemano.',
            ],
            [
                'q' => '¿Sirve para prevenir cortes en verano?',
                'a' => 'Ayuda a detectar puntos débiles antes de que el aire acondicionado sume '
                     . 'carga en la época de más consumo, aunque no elimina los cortes que '
                     . 'dependen de la red de la ANDE.',
            ],
            [
                'q' => '¿Revisan también las áreas comunes de un edificio?',
                'a' => 'Sí, en edificios y consorcios incluimos los tableros de áreas comunes '
                     . 'además de las unidades que lo soliciten.',
            ],
        ],
        'cta'       => ['label' => 'Pedir presupuesto', 'whatsappText' => ''],
        'related'   => ['tablero-electrico-disyuntores', 'instalacion-electrica-comercial', 'electricista-24-horas'],
        'guides'    => ['senales-de-una-instalacion-electrica-peligrosa', 'por-que-salta-el-disyuntor'],
        'articles'  => ['mantenimiento-del-generador'],
        'toolLinks' => [],
    ],

];
