<?php
/** Editorial review 2026-10-05. Scope for consultation, not an unverified offer. */
declare(strict_types=1);
return [
    'paneles-solares' => [
        'path' => '/servicios/paneles-solares/',
        'title' => 'Paneles solares',
        'navLabel' => 'Paneles solares',
        'cluster' => 'energia',
        'parent' => null,
        'seoTitle' => 'Paneles solares en Paraguay: presupuesto',
        'metaDescription' => 'Paneles solares: qué consultar, alcance posible y datos útiles. Disponibilidad, cobertura y condiciones a confirmar.',
        'hero' => [
            'eyebrow' => 'Energía solar',
            'h1' => 'Paneles solares con presupuesto a medida',
            'h2' => 'Alcance y condiciones a confirmar con un prestador.',
            'lead' => 'Use su consumo en kWh y el objetivo del proyecto para preparar la consulta solar. La calculadora es orientativa: no confirma equipos, precio ni ahorro.',
        ],
        'includes' => [
            'Visita técnica y relevamiento del techo y del tablero',
            'Cálculo de los kWp necesarios a partir de su consumo mensual',
            'Cotización detallada de paneles, inversor, estructura y protecciones DC/AC',
            'Gestión del trámite de autogeneración ante la ANDE',
        ],
        'excludes' => [
            'Reparación o refuerzo del techo, si la estructura no soporta el peso',
            'Baterías de respaldo, si busca energía durante un corte (se cotiza aparte)',
            'Aumento de la potencia contratada ante la ANDE, si su medidor no alcanza',
        ],
        'weNeed' => [
            'Sus últimas facturas de la ANDE',
            'Si busca un sistema on-grid, híbrido u off-grid',
            'Ciudad o zona y tipo de inmueble',
            'Descripción breve; no abra tableros ni manipule cables para obtener información',
        ],
        'sections' => [
            [
                'h2' => 'Qué conviene definir',
                'body' => [
                    'Use su consumo en kWh y el objetivo del proyecto para preparar la consulta solar. La calculadora es orientativa: no confirma equipos, precio ni ahorro.',
                    'Los puntos de alcance indicados son temas para consultar, no prestaciones confirmadas de Electricidad PY. El prestador debe evaluar el caso y aclarar qué incluye, qué queda fuera y si hace falta una visita técnica.',
                ],
            ],
            [
                'h2' => 'Cómo comparar una propuesta',
                'body' => [
                    'Pida que la cotización identifique al prestador, los equipos o materiales, la mano de obra y las condiciones aplicables. Confirme también la zona, los traslados, el costo de evaluación y la fecha posible.',
                    'Una consulta no es una reserva y una estimación de una calculadora no reemplaza una cotización del trabajo.',
                ],
            ],
        ],
        'benefits' => [
        ],
        'faq' => [
            [
                'q' => '¿Electricidad PY ofrece este trabajo ahora?',
                'a' => 'No hay un operador ni una cobertura de atención confirmados para recibir pedidos desde esta versión. Esta página sirve para preparar la consulta.',
            ],
            [
                'q' => '¿Qué información conviene preparar?',
                'a' => 'La ciudad o zona, el tipo de inmueble, el problema o proyecto y los equipos involucrados. No incluya documentos ni una dirección exacta en el resumen.',
            ],
            [
                'q' => '¿El resumen confirma una visita o un precio?',
                'a' => 'No. El alcance, el costo y la fecha deben acordarse expresamente con el prestador.',
            ],
        ],
        'cta' => [
            'label' => 'Preparar consulta',
            'whatsappText' => '',
        ],
        'related' => [
            'generadores',
            'baterias-respaldo',
            'tablero-electrico-disyuntores',
        ],
        'guides' => [
            'autogeneracion-ley-7599-que-cambia',
            'cuanto-cuesta-instalar-paneles-solares-en-paraguay',
        ],
        'articles' => [
            'paneles-solares-cuando-se-pagan',
        ],
        'toolLinks' => [
            [
                'path' => '/herramientas/cuanto-solar-necesito/',
                'label' => 'Calcule cuánto solar necesita',
                'text' => 'Estime los kWp y la cantidad de paneles a partir de su factura de la ANDE.',
            ],
        ],
    ],
    'generadores' => [
        'path' => '/servicios/generadores/',
        'title' => 'Generadores',
        'navLabel' => 'Generadores',
        'cluster' => 'energia',
        'parent' => null,
        'seoTitle' => 'Generadores eléctricos en Paraguay',
        'metaDescription' => 'Generadores: qué consultar, alcance posible y datos útiles. Disponibilidad, cobertura y condiciones a confirmar.',
        'hero' => [
            'eyebrow' => 'Energía de respaldo',
            'h1' => 'Generadores con transferencia automática',
            'h2' => 'Alcance y condiciones a confirmar con un prestador.',
            'lead' => 'Enumere qué equipos quiere respaldar y durante cuánto tiempo. La selección y la instalación del generador requieren una evaluación del lugar.',
        ],
        'includes' => [
            'Relevamiento de los equipos a respaldar durante un corte',
            'Cálculo de la potencia en kVA, incluido el arranque de motores y aires',
            'Cotización del generador, el tablero de transferencia y la instalación',
            'Conexión al tablero con transferencia automática (ATS) o manual',
            'Prueba de arranque y de transferencia en un corte simulado',
        ],
        'excludes' => [
            'El mantenimiento periódico posterior a la instalación (se cotiza aparte)',
            'El combustible del generador',
            'La obra civil de un bunker o caseta, si el equipo lo requiere',
        ],
        'weNeed' => [
            'Lista de los equipos a respaldar (aires, heladera, bombas, etc.)',
            'Sus últimas facturas de la ANDE',
            'Ubicación disponible para instalar el generador',
            'Ciudad o zona y tipo de inmueble',
            'Descripción breve; no abra tableros ni manipule cables para obtener información',
        ],
        'sections' => [
            [
                'h2' => 'Qué conviene definir',
                'body' => [
                    'Enumere qué equipos quiere respaldar y durante cuánto tiempo. La selección y la instalación del generador requieren una evaluación del lugar.',
                    'Los puntos de alcance indicados son temas para consultar, no prestaciones confirmadas de Electricidad PY. El prestador debe evaluar el caso y aclarar qué incluye, qué queda fuera y si hace falta una visita técnica.',
                ],
            ],
            [
                'h2' => 'Cómo comparar una propuesta',
                'body' => [
                    'Pida que la cotización identifique al prestador, los equipos o materiales, la mano de obra y las condiciones aplicables. Confirme también la zona, los traslados, el costo de evaluación y la fecha posible.',
                    'Una consulta no es una reserva y una estimación de una calculadora no reemplaza una cotización del trabajo.',
                ],
            ],
        ],
        'benefits' => [
        ],
        'faq' => [
            [
                'q' => '¿Electricidad PY ofrece este trabajo ahora?',
                'a' => 'No hay un operador ni una cobertura de atención confirmados para recibir pedidos desde esta versión. Esta página sirve para preparar la consulta.',
            ],
            [
                'q' => '¿Qué información conviene preparar?',
                'a' => 'La ciudad o zona, el tipo de inmueble, el problema o proyecto y los equipos involucrados. No incluya documentos ni una dirección exacta en el resumen.',
            ],
            [
                'q' => '¿El resumen confirma una visita o un precio?',
                'a' => 'No. El alcance, el costo y la fecha deben acordarse expresamente con el prestador.',
            ],
        ],
        'cta' => [
            'label' => 'Preparar consulta',
            'whatsappText' => '',
        ],
        'related' => [
            'ups-estabilizadores',
            'paneles-solares',
            'puesta-a-tierra',
        ],
        'guides' => [
            'como-elegir-un-generador',
            'que-hacer-cuando-se-corta-la-luz',
        ],
        'articles' => [
            'mantenimiento-del-generador',
        ],
        'toolLinks' => [
            [
                'path' => '/herramientas/que-generador-necesito/',
                'label' => 'Calcule qué generador necesita',
                'text' => 'Estime los kVA a partir de la lista de equipos que quiere respaldar.',
            ],
        ],
    ],
    'ups-estabilizadores' => [
        'path' => '/servicios/ups-estabilizadores/',
        'title' => 'UPS y estabilizadores',
        'navLabel' => 'UPS y estabilizadores',
        'cluster' => 'energia',
        'parent' => null,
        'seoTitle' => 'UPS y estabilizadores en Paraguay',
        'metaDescription' => 'UPS y estabilizadores: qué consultar, alcance posible y datos útiles. Disponibilidad, cobertura y condiciones a confirmar.',
        'hero' => [
            'eyebrow' => 'Protección eléctrica',
            'h1' => 'UPS y estabilizadores para equipos sensibles',
            'h2' => 'Alcance y condiciones a confirmar con un prestador.',
            'lead' => 'Indique los equipos que desea proteger, sus potencias de placa y el tiempo de respaldo buscado. Un UPS y un estabilizador tienen funciones distintas.',
        ],
        'includes' => [
            'Relevamiento de los equipos a proteger',
            'Cálculo de la potencia en VA/W y del factor de potencia',
            'Cálculo de la autonomía necesaria en minutos',
            'Cotización del UPS o estabilizador',
            'Instalación en circuito dedicado, con sus protecciones',
            'Prueba de corte simulado e informe escrito',
        ],
        'excludes' => [
            'Baterías de respaldo para toda la vivienda (se cotiza como servicio aparte)',
            'El generador, si busca autonomía de varias horas',
        ],
        'weNeed' => [
            'Lista de equipos a proteger y su consumo, si lo tiene',
            'Tiempo de autonomía que necesita',
            'Ciudad o zona y tipo de inmueble',
            'Descripción breve; no abra tableros ni manipule cables para obtener información',
        ],
        'sections' => [
            [
                'h2' => 'Qué conviene definir',
                'body' => [
                    'Indique los equipos que desea proteger, sus potencias de placa y el tiempo de respaldo buscado. Un UPS y un estabilizador tienen funciones distintas.',
                    'Los puntos de alcance indicados son temas para consultar, no prestaciones confirmadas de Electricidad PY. El prestador debe evaluar el caso y aclarar qué incluye, qué queda fuera y si hace falta una visita técnica.',
                ],
            ],
            [
                'h2' => 'Cómo comparar una propuesta',
                'body' => [
                    'Pida que la cotización identifique al prestador, los equipos o materiales, la mano de obra y las condiciones aplicables. Confirme también la zona, los traslados, el costo de evaluación y la fecha posible.',
                    'Una consulta no es una reserva y una estimación de una calculadora no reemplaza una cotización del trabajo.',
                ],
            ],
        ],
        'benefits' => [
        ],
        'faq' => [
            [
                'q' => '¿Electricidad PY ofrece este trabajo ahora?',
                'a' => 'No hay un operador ni una cobertura de atención confirmados para recibir pedidos desde esta versión. Esta página sirve para preparar la consulta.',
            ],
            [
                'q' => '¿Qué información conviene preparar?',
                'a' => 'La ciudad o zona, el tipo de inmueble, el problema o proyecto y los equipos involucrados. No incluya documentos ni una dirección exacta en el resumen.',
            ],
            [
                'q' => '¿El resumen confirma una visita o un precio?',
                'a' => 'No. El alcance, el costo y la fecha deben acordarse expresamente con el prestador.',
            ],
        ],
        'cta' => [
            'label' => 'Preparar consulta',
            'whatsappText' => '',
        ],
        'related' => [
            'generadores',
            'baterias-respaldo',
            'tablero-electrico-disyuntores',
        ],
        'guides' => [
            'por-que-salta-el-disyuntor',
            'que-hacer-cuando-se-corta-la-luz',
        ],
        'articles' => [
            'temporada-de-cortes-como-preparar-su-casa',
        ],
        'toolLinks' => [
            [
                'path' => '/herramientas/que-ups-necesito/',
                'label' => 'Calcule qué UPS necesita',
                'text' => 'Marque sus equipos y los minutos de respaldo: le decimos los VA y la batería.',
            ],
        ],
    ],
    'cargadores-vehiculos-electricos' => [
        'path' => '/servicios/cargadores-vehiculos-electricos/',
        'title' => 'Cargadores para vehículos eléctricos',
        'navLabel' => 'Carga de autos eléctricos',
        'cluster' => 'energia',
        'parent' => null,
        'seoTitle' => 'Cargador de auto eléctrico en casa',
        'metaDescription' => 'Cargadores para vehículos eléctricos: qué consultar, alcance posible y datos útiles. Disponibilidad, cobertura y condiciones a confirmar.',
        'hero' => [
            'eyebrow' => 'Movilidad eléctrica',
            'h1' => 'Cargador de auto eléctrico instalado con seguridad',
            'h2' => 'Alcance y condiciones a confirmar con un prestador.',
            'lead' => 'Indique el vehículo, el cargador previsto y el lugar de estacionamiento. La capacidad disponible y la instalación deben evaluarse antes de elegir el equipo.',
        ],
        'includes' => [
            'Relevamiento del tablero y de la potencia contratada disponible',
            'Cálculo de la sección de cable y del diferencial según la carga',
            'Cotización de la instalación del cargador',
            'Circuito dedicado con protección termomagnética y diferencial propios',
            'Puesta a tierra verificada del circuito',
        ],
        'excludes' => [
            'El cargador en sí, si usted ya cuenta con el equipo',
            'El aumento de la potencia contratada ante la ANDE, si el tablero no alcanza (se gestiona aparte)',
        ],
        'weNeed' => [
            'Modelo del auto y del cargador, si ya lo tiene',
            'Ubicación deseada del cargador',
            'Ciudad o zona y tipo de inmueble',
            'Descripción breve; no abra tableros ni manipule cables para obtener información',
        ],
        'sections' => [
            [
                'h2' => 'Qué conviene definir',
                'body' => [
                    'Indique el vehículo, el cargador previsto y el lugar de estacionamiento. La capacidad disponible y la instalación deben evaluarse antes de elegir el equipo.',
                    'Los puntos de alcance indicados son temas para consultar, no prestaciones confirmadas de Electricidad PY. El prestador debe evaluar el caso y aclarar qué incluye, qué queda fuera y si hace falta una visita técnica.',
                ],
            ],
            [
                'h2' => 'Cómo comparar una propuesta',
                'body' => [
                    'Pida que la cotización identifique al prestador, los equipos o materiales, la mano de obra y las condiciones aplicables. Confirme también la zona, los traslados, el costo de evaluación y la fecha posible.',
                    'Una consulta no es una reserva y una estimación de una calculadora no reemplaza una cotización del trabajo.',
                ],
            ],
        ],
        'benefits' => [
        ],
        'faq' => [
            [
                'q' => '¿Electricidad PY ofrece este trabajo ahora?',
                'a' => 'No hay un operador ni una cobertura de atención confirmados para recibir pedidos desde esta versión. Esta página sirve para preparar la consulta.',
            ],
            [
                'q' => '¿Qué información conviene preparar?',
                'a' => 'La ciudad o zona, el tipo de inmueble, el problema o proyecto y los equipos involucrados. No incluya documentos ni una dirección exacta en el resumen.',
            ],
            [
                'q' => '¿El resumen confirma una visita o un precio?',
                'a' => 'No. El alcance, el costo y la fecha deben acordarse expresamente con el prestador.',
            ],
        ],
        'cta' => [
            'label' => 'Preparar consulta',
            'whatsappText' => '',
        ],
        'related' => [
            'tablero-electrico-disyuntores',
            'paneles-solares',
            'puesta-a-tierra',
        ],
        'guides' => [
            'como-pedir-aumento-de-carga-ande',
            'senales-de-una-instalacion-electrica-peligrosa',
        ],
        'articles' => [
            'cargar-auto-electrico-en-casa',
        ],
        'toolLinks' => [
            [
                'path' => '/herramientas/consumo-electrico/',
                'label' => 'Calcule su consumo eléctrico',
                'text' => 'Estime cuánto suma el cargador a su consumo mensual y a la factura.',
            ],
        ],
    ],
    'baterias-respaldo' => [
        'path' => '/servicios/baterias-respaldo/',
        'title' => 'Baterías de respaldo',
        'navLabel' => 'Baterías de respaldo',
        'cluster' => 'energia',
        'parent' => null,
        'seoTitle' => 'Baterías de respaldo en Paraguay',
        'metaDescription' => 'Baterías de respaldo: qué consultar, alcance posible y datos útiles. Disponibilidad, cobertura y condiciones a confirmar.',
        'hero' => [
            'eyebrow' => 'Energía de respaldo',
            'h1' => 'Baterías de respaldo para sus cargas críticas',
            'h2' => 'Alcance y condiciones a confirmar con un prestador.',
            'lead' => 'Prepare una lista de cargas prioritarias y las horas de autonomía buscadas. La batería, el inversor y sus condiciones deben evaluarse como un sistema.',
        ],
        'includes' => [
            'Relevamiento de las cargas críticas a respaldar',
            'Cálculo de los kWh útiles según la profundidad de descarga admitida',
            'Cotización de las baterías y del inversor o cargador',
            'Instalación con protecciones y cableado dedicado',
            'Prueba de autonomía real',
        ],
        'excludes' => [
            'Los paneles solares, si no cuenta con ellos (se cotizan aparte)',
            'El generador, si busca autonomía de varios días',
        ],
        'weNeed' => [
            'Lista de equipos críticos y horas de autonomía deseadas',
            'Si ya cuenta con paneles solares instalados',
            'Ciudad o zona y tipo de inmueble',
            'Descripción breve; no abra tableros ni manipule cables para obtener información',
        ],
        'sections' => [
            [
                'h2' => 'Qué conviene definir',
                'body' => [
                    'Prepare una lista de cargas prioritarias y las horas de autonomía buscadas. La batería, el inversor y sus condiciones deben evaluarse como un sistema.',
                    'Los puntos de alcance indicados son temas para consultar, no prestaciones confirmadas de Electricidad PY. El prestador debe evaluar el caso y aclarar qué incluye, qué queda fuera y si hace falta una visita técnica.',
                ],
            ],
            [
                'h2' => 'Cómo comparar una propuesta',
                'body' => [
                    'Pida que la cotización identifique al prestador, los equipos o materiales, la mano de obra y las condiciones aplicables. Confirme también la zona, los traslados, el costo de evaluación y la fecha posible.',
                    'Una consulta no es una reserva y una estimación de una calculadora no reemplaza una cotización del trabajo.',
                ],
            ],
        ],
        'benefits' => [
        ],
        'faq' => [
            [
                'q' => '¿Electricidad PY ofrece este trabajo ahora?',
                'a' => 'No hay un operador ni una cobertura de atención confirmados para recibir pedidos desde esta versión. Esta página sirve para preparar la consulta.',
            ],
            [
                'q' => '¿Qué información conviene preparar?',
                'a' => 'La ciudad o zona, el tipo de inmueble, el problema o proyecto y los equipos involucrados. No incluya documentos ni una dirección exacta en el resumen.',
            ],
            [
                'q' => '¿El resumen confirma una visita o un precio?',
                'a' => 'No. El alcance, el costo y la fecha deben acordarse expresamente con el prestador.',
            ],
        ],
        'cta' => [
            'label' => 'Preparar consulta',
            'whatsappText' => '',
        ],
        'related' => [
            'paneles-solares',
            'ups-estabilizadores',
            'generadores',
        ],
        'guides' => [
            'que-hacer-cuando-se-corta-la-luz',
            'autogeneracion-ley-7599-que-cambia',
        ],
        'articles' => [
            'paneles-solares-cuando-se-pagan',
        ],
        'toolLinks' => [
            [
                'path' => '/herramientas/cuanto-solar-necesito/',
                'label' => 'Calcule su sistema solar y de respaldo',
                'text' => 'Estime los kWp y el respaldo que necesita a partir de su consumo.',
            ],
        ],
    ],
    'medidor-ande-tramites' => [
        'path' => '/servicios/medidor-ande-tramites/',
        'title' => 'Trámites de medidor ante la ANDE',
        'navLabel' => 'Trámites ante la ANDE',
        'cluster' => 'energia',
        'parent' => null,
        'seoTitle' => 'Trámites de medidor ANDE en Paraguay',
        'metaDescription' => 'Trámites de medidor ante la ANDE: qué consultar, alcance posible y datos útiles. Disponibilidad, cobertura y condiciones a confirmar.',
        'hero' => [
            'eyebrow' => 'Trámites eléctricos',
            'h1' => 'Trámites de medidor ante la ANDE',
            'h2' => 'Alcance y condiciones a confirmar con un prestador.',
            'lead' => 'Consulte directamente con la ANDE los requisitos vigentes del trámite. Una asistencia profesional no sustituye la aprobación de la distribuidora.',
        ],
        'includes' => [
            'Relevamiento de la necesidad: aumento de carga, cambio de categoría o autogeneración',
            'Armado del expediente técnico requerido por la ANDE',
            'Presentación y gestión del trámite',
            'Seguimiento activo del expediente hasta la aprobación',
            'Informe escrito con el nuevo NIS o categoría habilitada',
        ],
        'excludes' => [
            'El monto de la tasa o del cargo de conexión, que se abona directamente a la ANDE',
            'La obra civil o eléctrica que el trámite pudiera originar (se cotiza aparte)',
        ],
        'weNeed' => [
            'Su última factura de la ANDE, con el NIS',
            'El motivo del trámite (aumento de carga, cambio de categoría, autogeneración)',
            'Planos o presupuesto del proyecto que origina el trámite, si corresponde',
            'Ciudad o zona y tipo de inmueble',
            'Descripción breve; no abra tableros ni manipule cables para obtener información',
        ],
        'sections' => [
            [
                'h2' => 'Qué conviene definir',
                'body' => [
                    'Consulte directamente con la ANDE los requisitos vigentes del trámite. Una asistencia profesional no sustituye la aprobación de la distribuidora.',
                    'Los puntos de alcance indicados son temas para consultar, no prestaciones confirmadas de Electricidad PY. El prestador debe evaluar el caso y aclarar qué incluye, qué queda fuera y si hace falta una visita técnica.',
                ],
            ],
            [
                'h2' => 'Cómo comparar una propuesta',
                'body' => [
                    'Pida que la cotización identifique al prestador, los equipos o materiales, la mano de obra y las condiciones aplicables. Confirme también la zona, los traslados, el costo de evaluación y la fecha posible.',
                    'Una consulta no es una reserva y una estimación de una calculadora no reemplaza una cotización del trabajo.',
                ],
            ],
        ],
        'benefits' => [
        ],
        'faq' => [
            [
                'q' => '¿Electricidad PY ofrece este trabajo ahora?',
                'a' => 'No hay un operador ni una cobertura de atención confirmados para recibir pedidos desde esta versión. Esta página sirve para preparar la consulta.',
            ],
            [
                'q' => '¿Qué información conviene preparar?',
                'a' => 'La ciudad o zona, el tipo de inmueble, el problema o proyecto y los equipos involucrados. No incluya documentos ni una dirección exacta en el resumen.',
            ],
            [
                'q' => '¿El resumen confirma una visita o un precio?',
                'a' => 'No. El alcance, el costo y la fecha deben acordarse expresamente con el prestador.',
            ],
        ],
        'cta' => [
            'label' => 'Preparar consulta',
            'whatsappText' => '',
        ],
        'related' => [
            'paneles-solares',
            'cargadores-vehiculos-electricos',
            'tablero-electrico-disyuntores',
        ],
        'guides' => [
            'como-pedir-aumento-de-carga-ande',
            'autogeneracion-ley-7599-que-cambia',
        ],
        'articles' => [
            'tarifa-ande-explicada',
        ],
        'toolLinks' => [
            [
                'path' => '/herramientas/consumo-electrico/',
                'label' => 'Calcule su consumo eléctrico',
                'text' => 'Estime si su potencia contratada alcanza antes de iniciar el trámite.',
            ],
        ],
    ],
    'planes-de-mantenimiento' => [
        'path' => '/servicios/planes-de-mantenimiento/',
        'title' => 'Planes de mantenimiento',
        'navLabel' => 'Planes de mantenimiento',
        'cluster' => 'energia',
        'parent' => null,
        'seoTitle' => 'Plan de mantenimiento anual en Paraguay',
        'metaDescription' => 'Planes de mantenimiento: qué consultar, alcance posible y datos útiles. Disponibilidad, cobertura y condiciones a confirmar.',
        'hero' => [
            'eyebrow' => 'Mantenimiento programado',
            'h1' => 'Mantenimiento programado: defina el alcance',
            'h2' => 'Alcance y condiciones a confirmar con un prestador.',
            'lead' => 'Información para definir un posible mantenimiento programado. No hay un contrato anual, frecuencia, precio ni prioridad de atención confirmados.',
        ],
        'includes' => [
            'Inventario de equipos y antecedentes',
            'Tareas y frecuencia a definir con el prestador',
            'Registro de revisiones, si se acuerda por escrito',
        ],
        'excludes' => [
            'El repuesto o el equipo que haya que reemplazar (se cotiza aparte, según lo que aparezca)',
            'La primera instalación del tablero, generador, paneles solares o UPS',
        ],
        'weNeed' => [
            'Lista de los equipos que quiere incluir en el plan (generador con su kVA y marca, paneles solares, UPS o baterías)',
            'Ciudad o zona y tipo de inmueble',
            'Descripción breve; no abra tableros ni manipule cables para obtener información',
        ],
        'sections' => [
            [
                'h2' => 'Qué debe acordarse antes de un plan',
                'body' => [
                    'No hay precios, número de visitas ni prioridad de atención confirmados. Esta página no constituye una oferta de suscripción.',
                    'Una propuesta debe indicar equipos incluidos, tareas, frecuencia, costo, exclusiones y condiciones de cancelación. No se adquiere un plan desde esta web.',
                ],
            ],
        ],
        'benefits' => [
        ],
        'faq' => [
            [
                'q' => '¿Electricidad PY ofrece este trabajo ahora?',
                'a' => 'No hay un operador ni una cobertura de atención confirmados para recibir pedidos desde esta versión. Esta página sirve para preparar la consulta.',
            ],
            [
                'q' => '¿Qué información conviene preparar?',
                'a' => 'La ciudad o zona, el tipo de inmueble, el problema o proyecto y los equipos involucrados. No incluya documentos ni una dirección exacta en el resumen.',
            ],
            [
                'q' => '¿El resumen confirma una visita o un precio?',
                'a' => 'No. El alcance, el costo y la fecha deben acordarse expresamente con el prestador.',
            ],
        ],
        'cta' => [
            'label' => 'Preparar consulta',
            'whatsappText' => '',
        ],
        'related' => [
            'generadores',
            'paneles-solares',
            'mantenimiento-electrico',
            'ups-estabilizadores',
        ],
        'guides' => [
        ],
        'articles' => [
            'mantenimiento-del-generador',
            'temporada-de-cortes-como-preparar-su-casa',
        ],
        'toolLinks' => [
        ],
    ],
    'paneles-solares-en-cuotas' => [
        'path' => '/servicios/paneles-solares-en-cuotas/',
        'title' => 'Paneles solares en cuotas',
        'navLabel' => 'Paneles solares en cuotas',
        'cluster' => 'energia',
        'parent' => 'paneles-solares',
        'seoTitle' => 'Paneles solares a cuotas en Paraguay',
        'metaDescription' => 'Paneles solares en cuotas: qué consultar, alcance posible y datos útiles. Disponibilidad, cobertura y condiciones a confirmar.',
        'hero' => [
            'eyebrow' => 'Energía solar',
            'h1' => 'Financiación solar: prepare sus preguntas',
            'h2' => 'Alcance y condiciones a confirmar con un prestador.',
            'lead' => 'Información para preparar una consulta sobre financiación de un proyecto solar. Esta web no ofrece créditos, cuotas ni una entidad financiera asociada.',
        ],
        'includes' => [
            'Consumo mensual en kWh y objetivo del proyecto',
            'Presupuesto del sistema desglosado por equipos e instalación',
            'Condiciones de financiación emitidas por la entidad, si existe una oferta verificable',
        ],
        'excludes' => [
            'El préstamo o crédito en sí: lo otorga el banco o la financiera que usted elija',
            'Baterías de respaldo, si busca energía durante un corte (se cotiza aparte)',
        ],
        'weNeed' => [
            'Sus últimas facturas de la ANDE o su consumo mensual en kWh',
            'Ciudad o zona y tipo de inmueble',
            'Descripción breve; no abra tableros ni manipule cables para obtener información',
        ],
        'sections' => [
            [
                'h2' => 'Sin una oferta de financiación confirmada',
                'body' => [
                    'Electricidad PY no otorga préstamos ni publica tasas, plazos, cuotas o aprobación de crédito. Tampoco hay una entidad asociada confirmada.',
                    'Para evaluar una propuesta real, solicite a la entidad el costo total, los intereses, las comisiones, el plazo y las condiciones por escrito. El ahorro estimado de una calculadora no garantiza que pueda pagar una cuota.',
                ],
            ],
        ],
        'benefits' => [
        ],
        'faq' => [
            [
                'q' => '¿Electricidad PY ofrece este trabajo ahora?',
                'a' => 'No hay un operador ni una cobertura de atención confirmados para recibir pedidos desde esta versión. Esta página sirve para preparar la consulta.',
            ],
            [
                'q' => '¿Qué información conviene preparar?',
                'a' => 'La ciudad o zona, el tipo de inmueble, el problema o proyecto y los equipos involucrados. No incluya documentos ni una dirección exacta en el resumen.',
            ],
            [
                'q' => '¿El resumen confirma una visita o un precio?',
                'a' => 'No. El alcance, el costo y la fecha deben acordarse expresamente con el prestador.',
            ],
        ],
        'cta' => [
            'label' => 'Preparar consulta',
            'whatsappText' => '',
        ],
        'related' => [
            'paneles-solares',
            'baterias-respaldo',
            'medidor-ande-tramites',
        ],
        'guides' => [
        ],
        'articles' => [
            'paneles-solares-cuando-se-pagan',
            'on-grid-hibrido-u-off-grid',
        ],
        'toolLinks' => [
            [
                'path' => '/herramientas/cuanto-solar-necesito/',
                'label' => 'Calcule cuánto solar necesita',
                'text' => 'Estime los kWp y la cantidad de paneles a partir de su factura de la ANDE.',
            ],
        ],
    ],
];
