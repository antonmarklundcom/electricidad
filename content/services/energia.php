<?php
/** The energia-cluster service pages, keyed by slug. Shape: content/services.php. */

declare(strict_types=1);

return [

    'paneles-solares' => [
        'path'            => '/servicios/paneles-solares/',
        'title'           => 'Paneles solares',
        'navLabel'        => 'Paneles solares',
        'cluster'         => 'energia',
        'parent'          => null,
        'seoTitle'        => 'Paneles solares en Paraguay: presupuesto',
        'metaDescription' => 'Presupuesto de paneles solares a medida: calculamos los kWp según su '
                           . 'consumo, definimos on-grid o híbrido y gestionamos la autogeneración '
                           . 'ante la ANDE.',
        'hero' => [
            'eyebrow' => 'Energía solar',
            'h1'      => 'Paneles solares con presupuesto a medida',
            'h2'      => 'El sistema se dimensiona según su consumo real, no según un kit genérico.',
            'lead'    => 'Le cotizamos un sistema solar calculado a partir de sus últimas facturas '
                       . 'de la ANDE: cuántos kWp necesita, qué tipo de inversor le conviene y si '
                       . 'vale la pena registrarse como autogenerador para inyectar el excedente a '
                       . 'la red.',
        ],
        'includes' => [
            'Visita técnica y relevamiento del techo y del tablero',
            'Cálculo de los kWp necesarios a partir de su consumo mensual',
            'Cotización detallada de paneles, inversor, estructura y protecciones DC/AC',
            'Instalación con puesta a tierra y protecciones normadas',
            'Gestión del trámite de autogeneración ante la ANDE',
            'Informe escrito de lo instalado, con garantía por escrito',
        ],
        'excludes' => [
            'Reparación o refuerzo del techo, si la estructura no soporta el peso',
            'Baterías de respaldo, si busca energía durante un corte (se cotiza aparte)',
            'Aumento de la potencia contratada ante la ANDE, si su medidor no alcanza',
        ],
        'weNeed' => [
            'Sus últimas facturas de la ANDE',
            'Fotos del techo y del tablero eléctrico actual',
            'Si busca un sistema on-grid, híbrido u off-grid',
        ],
        'sections' => [
            [
                'h2'   => 'Cómo se dimensiona un sistema solar',
                'body' => [
                    'Partimos de su consumo mensual en kWh, tal como figura en la factura de la '
                        . 'ANDE. En Asunción se estima un promedio de aproximadamente 4,5 horas '
                        . 'solares pico por día, y con ese dato calculamos cuántos kWp de paneles '
                        . 'hacen falta para cubrir la parte del consumo que usted quiere reemplazar.',
                    'Un sistema mal dimensionado sale caro dos veces: uno chico no baja la factura '
                        . 'lo esperado, y uno sobredimensionado paga equipo que nunca se aprovecha. '
                        . 'Por eso la cotización parte siempre del relevamiento, no de un kit '
                        . 'estándar publicado en internet.',
                ],
            ],
            [
                'h2'   => 'On-grid, híbrido u off-grid',
                'body' => [
                    'Un sistema on-grid inyecta a la red de la ANDE y no funciona durante un corte, '
                        . 'porque el inversor se desconecta por seguridad. Un sistema híbrido suma '
                        . 'baterías y sigue dando energía a los circuitos críticos cuando se corta '
                        . 'la luz. Un sistema off-grid no depende de la ANDE en absoluto, algo '
                        . 'frecuente en estancias del Chaco sin conexión cercana.',
                ],
                'items' => [
                    ['title' => 'On-grid', 'text' => 'Menor costo, pero sin respaldo ante un corte.'],
                    ['title' => 'Híbrido', 'text' => 'Suma baterías para los circuitos críticos.'],
                    ['title' => 'Off-grid', 'text' => 'Independiente de la red, para donde no llega la ANDE.'],
                ],
            ],
            [
                'h2'   => 'Instalación y trámite ante la ANDE',
                'body' => [
                    'La instalación incluye la estructura de fijación al techo, el cableado DC hasta '
                        . 'el inversor, las protecciones DC/AC y la puesta a tierra del sistema. Si '
                        . 'quiere inyectar el excedente a la red, la Ley 7599/2025 de energías '
                        . 'renovables no convencionales, reglamentada por el Decreto 6034/2026, '
                        . 'permite registrarse como autogenerador ante la ANDE.',
                    'Los pasos, plazos y la forma de compensación del excedente los define la '
                        . 'reglamentación de la ANDE; nosotros armamos el expediente técnico y hacemos '
                        . 'el seguimiento con usted. Vea la guía sobre la Ley 7599 para entender qué '
                        . 'cambia.',
                ],
            ],
        ],
        'benefits' => [
            ['title' => 'Sistema a su medida', 'text' => 'Ni sobredimensionado ni corto: calculado con su consumo real.'],
            ['title' => 'Trámite incluido', 'text' => 'Gestionamos el registro de autogenerador con la ANDE.'],
            ['title' => 'Garantía por escrito', 'text' => 'Informe de lo instalado, con garantía documentada.'],
        ],
        'faq' => [
            [
                'q' => '¿Cuánto demora la instalación?',
                'a' => 'Depende del tamaño del sistema y de la estructura del techo; se lo indicamos '
                     . 'en la visita técnica, antes de confirmar la cotización.',
            ],
            [
                'q' => '¿Necesito baterías para que funcione durante un corte?',
                'a' => 'Solo si elige un sistema híbrido u off-grid. Un sistema on-grid se desconecta '
                     . 'de forma automática cuando se corta la luz, por seguridad de la red.',
            ],
            [
                'q' => '¿Qué pasa en días nublados?',
                'a' => 'La generación baja, pero no se detiene. El dimensionamiento contempla un '
                     . 'promedio de horas solares pico, no el mejor día del año.',
            ],
            [
                'q' => '¿Puedo inyectar el excedente a la red de la ANDE?',
                'a' => 'Sí, registrándose como autogenerador bajo la Ley 7599/2025 y su reglamentación. '
                     . 'Nosotros gestionamos ese trámite junto con la instalación.',
            ],
            [
                'q' => '¿Cuánto cuesta un sistema solar residencial?',
                'a' => 'Según publicaciones de prensa de 2026, los kits solares de entrada se '
                     . 'comercializan desde unos G. 12.500.000, y los sistemas residenciales '
                     . 'completos rondan los USD 10.000 a 15.000, de forma orientativa. El monto '
                     . 'exacto depende de su consumo y del sistema elegido.',
            ],
        ],
        'cta'       => ['label' => 'Pedir presupuesto de paneles solares', 'whatsappText' => ''],
        'related'   => ['generadores', 'baterias-respaldo', 'tablero-electrico-disyuntores'],
        'guides'    => ['autogeneracion-ley-7599-que-cambia', 'cuanto-cuesta-instalar-paneles-solares-en-paraguay'],
        'articles'  => ['paneles-solares-cuando-se-pagan'],
        'toolLinks' => [
            [
                'path'  => '/herramientas/cuanto-solar-necesito/',
                'label' => 'Calcule cuánto solar necesita',
                'text'  => 'Estime los kWp y la cantidad de paneles a partir de su factura de la ANDE.',
            ],
        ],
    ],

    'generadores' => [
        'path'            => '/servicios/generadores/',
        'title'           => 'Generadores',
        'navLabel'        => 'Generadores',
        'cluster'         => 'energia',
        'parent'          => null,
        'seoTitle'        => 'Generadores eléctricos en Paraguay',
        'metaDescription' => 'Cotizamos generadores dimensionados en kVA según el arranque de sus '
                           . 'equipos, con transferencia automática (ATS) e instalación con '
                           . 'protecciones.',
        'hero' => [
            'eyebrow' => 'Energía de respaldo',
            'h1'      => 'Generadores con transferencia automática',
            'h2'      => 'Dimensionados por el arranque de sus equipos, no solo por su consumo normal.',
            'lead'    => 'Un generador mal dimensionado se apaga apenas arranca el aire acondicionado '
                       . 'o la bomba de agua. Calculamos los kVA a partir de la lista real de equipos '
                       . 'a respaldar, incluido el pico de arranque, y cotizamos la instalación con '
                       . 'transferencia automática (ATS).',
        ],
        'includes' => [
            'Relevamiento de los equipos a respaldar durante un corte',
            'Cálculo de la potencia en kVA, incluido el arranque de motores y aires',
            'Cotización del generador, el tablero de transferencia y la instalación',
            'Conexión al tablero con transferencia automática (ATS) o manual',
            'Prueba de arranque y de transferencia en un corte simulado',
            'Informe escrito de lo instalado, con garantía por escrito',
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
        ],
        'sections' => [
            [
                'h2'   => 'Cómo se calculan los kVA',
                'body' => [
                    'La potencia en kVA no se calcula solo con la suma de los equipos funcionando en '
                        . 'régimen normal. Motores, bombas y equipos de aire acondicionado piden varias '
                        . 'veces su potencia nominal en el instante del arranque, y si el generador no '
                        . 'cubre ese pico, se apaga o no arranca el equipo.',
                    'Por eso relevamos la lista completa de lo que quiere respaldar y calculamos el '
                        . 'escenario de arranque más exigente, no solo la suma simple de potencias.',
                ],
            ],
            [
                'h2'   => 'Transferencia automática (ATS)',
                'body' => [
                    'Un tablero de transferencia automática detecta el corte de la ANDE, arranca el '
                        . 'generador y pasa la carga a él sin intervención manual, y hace el camino '
                        . 'inverso cuando vuelve la energía de la red. Una transferencia manual es más '
                        . 'económica, pero exige que alguien esté presente para accionarla.',
                ],
            ],
            [
                'h2'   => 'Instalación y mantenimiento',
                'body' => [
                    'La instalación contempla la ubicación con ventilación y salida de gases, el '
                        . 'cableado hasta el tablero, las protecciones y la puesta a tierra del equipo. '
                        . 'Un generador que no recibe mantenimiento periódico suele fallar justo cuando '
                        . 'se lo necesita, en medio de un corte.',
                ],
            ],
        ],
        'benefits' => [
            ['title' => 'Dimensionado por arranque', 'text' => 'Calculado para el pico, no solo para el consumo normal.'],
            ['title' => 'Transferencia automática', 'text' => 'El generador entra sin que nadie lo tenga que accionar.'],
            ['title' => 'Instalación con protecciones', 'text' => 'Tablero, puesta a tierra y protecciones normadas.'],
        ],
        'faq' => [
            [
                'q' => '¿Qué tamaño de generador necesito?',
                'a' => 'Depende de los equipos que quiera respaldar y de su arranque. Se lo calculamos '
                     . 'en la visita, a partir de su lista de equipos.',
            ],
            [
                'q' => '¿La transferencia automática es obligatoria?',
                'a' => 'No, pero evita que alguien tenga que estar presente para pasar la carga cuando '
                     . 'se corta la luz.',
            ],
            [
                'q' => '¿Cuánto cuesta un generador?',
                'a' => 'Según publicaciones de prensa de 2026, los generadores domésticos parten de '
                     . 'unos G. 4.200.000 (6,7 kVA), y un equipo trifásico cabinado de 12 kVA ronda '
                     . 'los G. 47.000.000, de forma orientativa.',
            ],
            [
                'q' => '¿Dónde se instala el generador?',
                'a' => 'En un lugar ventilado, con salida de gases y alejado de aberturas, para que no '
                     . 'ingresen los gases de escape a la vivienda.',
            ],
        ],
        'cta'       => ['label' => 'Pedir presupuesto de generador', 'whatsappText' => ''],
        'related'   => ['ups-estabilizadores', 'paneles-solares', 'puesta-a-tierra'],
        'guides'    => ['como-elegir-un-generador', 'que-hacer-cuando-se-corta-la-luz'],
        'articles'  => ['mantenimiento-del-generador'],
        'toolLinks' => [
            [
                'path'  => '/herramientas/que-generador-necesito/',
                'label' => 'Calcule qué generador necesita',
                'text'  => 'Estime los kVA a partir de la lista de equipos que quiere respaldar.',
            ],
        ],
    ],

    'ups-estabilizadores' => [
        'path'            => '/servicios/ups-estabilizadores/',
        'title'           => 'UPS y estabilizadores',
        'navLabel'        => 'UPS y estabilizadores',
        'cluster'         => 'energia',
        'parent'          => null,
        'seoTitle'        => 'UPS y estabilizadores en Paraguay',
        'metaDescription' => 'Cotizamos UPS y estabilizadores dimensionados en VA/W y minutos de '
                           . 'autonomía, con instalación en circuito dedicado contra bajas de '
                           . 'tensión.',
        'hero' => [
            'eyebrow' => 'Protección eléctrica',
            'h1'      => 'UPS y estabilizadores para equipos sensibles',
            'h2'      => 'Dimensionados en VA/W y minutos de autonomía, no elegidos al azar.',
            'lead'    => 'Las bajas de tensión y los cortes de la ANDE dañan equipos con componentes '
                       . 'sensibles: computadoras, servidores, cámaras, bombas con variador. Cotizamos '
                       . 'el UPS o estabilizador según la carga real y el tiempo de autonomía que '
                       . 'necesita.',
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
            'Fotos del tablero eléctrico',
        ],
        'sections' => [
            [
                'h2'   => 'Cómo se dimensiona un UPS',
                'body' => [
                    'La potencia se calcula en VA (potencia aparente) y en W (potencia real), según el '
                        . 'factor de potencia de los equipos conectados. A eso se le suma la autonomía: '
                        . 'cuántos minutos necesita que el UPS sostenga la carga mientras vuelve la luz '
                        . 'o arranca un generador.',
                    'Un UPS subdimensionado se apaga antes de tiempo o entra en sobrecarga; uno '
                        . 'sobredimensionado paga capacidad que nunca usa.',
                ],
            ],
            [
                'h2'   => 'UPS, estabilizador o generador',
                'body' => [
                    'Un estabilizador corrige las bajas y subas de tensión, pero no da energía durante '
                        . 'un corte. Un UPS sí da energía por unos minutos, pensado para equipos '
                        . 'sensibles que no pueden apagarse de golpe. Un generador cubre horas, pero no '
                        . 'reacciona de forma instantánea como un UPS.',
                ],
            ],
            [
                'h2'   => 'Instalación y protecciones',
                'body' => [
                    'El UPS se instala en un circuito dedicado, con sus propias protecciones, para que '
                        . 'una falla en otro punto de la instalación no lo afecte. Esto es especialmente '
                        . 'importante en tableros donde conviven equipos sensibles y cargas de mayor '
                        . 'consumo.',
                ],
            ],
        ],
        'benefits' => [
            ['title' => 'Dimensionado por carga real', 'text' => 'VA/W y autonomía calculados, no estimados al ojo.'],
            ['title' => 'Circuito dedicado', 'text' => 'Instalación separada, con sus propias protecciones.'],
            ['title' => 'Protege equipos sensibles', 'text' => 'Frente a bajas de tensión y cortes de la ANDE.'],
        ],
        'faq' => [
            [
                'q' => '¿Qué diferencia hay entre UPS y estabilizador?',
                'a' => 'El estabilizador corrige la tensión de la red; el UPS además da energía por unos '
                     . 'minutos si se corta la luz, con baterías internas.',
            ],
            [
                'q' => '¿Cuántos minutos de autonomía necesito?',
                'a' => 'Depende del equipo: para cerrar un sistema o esperar que arranque un generador '
                     . 'suelen bastar pocos minutos. Se lo calculamos según su caso.',
            ],
            [
                'q' => '¿Sirve para toda la casa?',
                'a' => 'Un UPS está pensado para equipos puntuales y sensibles. Para respaldar toda la '
                     . 'vivienda, revise baterías de respaldo o un generador.',
            ],
            [
                'q' => '¿Las bajas de tensión son frecuentes en Paraguay?',
                'a' => 'Son un motivo habitual de consulta, sobre todo en verano con alta demanda de '
                     . 'aire acondicionado. Un estabilizador o UPS reduce el daño a equipos sensibles.',
            ],
        ],
        'cta'       => ['label' => 'Pedir presupuesto de UPS', 'whatsappText' => ''],
        'related'   => ['generadores', 'baterias-respaldo', 'tablero-electrico-disyuntores'],
        'guides'    => ['por-que-salta-el-disyuntor', 'que-hacer-cuando-se-corta-la-luz'],
        'articles'  => ['temporada-de-cortes-como-preparar-su-casa'],
        'toolLinks' => [
            [
                'path'  => '/herramientas/que-ups-necesito/',
                'label' => 'Calcule qué UPS necesita',
                'text'  => 'Marque sus equipos y los minutos de respaldo: le decimos los VA y la batería.',
            ],
        ],
    ],

    'cargadores-vehiculos-electricos' => [
        'path'            => '/servicios/cargadores-vehiculos-electricos/',
        'title'           => 'Cargadores para vehículos eléctricos',
        'navLabel'        => 'Carga de autos eléctricos',
        'cluster'         => 'energia',
        'parent'          => null,
        'seoTitle'        => 'Cargador de auto eléctrico en casa',
        'metaDescription' => 'Instalamos cargadores de auto eléctrico en circuito dedicado, con la '
                           . 'sección de cable y el diferencial que exige la carga sostenida.',
        'hero' => [
            'eyebrow' => 'Movilidad eléctrica',
            'h1'      => 'Cargador de auto eléctrico instalado con seguridad',
            'h2'      => 'Circuito dedicado, protecciones propias y la potencia que su tablero puede dar.',
            'lead'    => 'Cargar un auto eléctrico exige un circuito propio, con la sección de cable y '
                       . 'el diferencial correctos para esa carga sostenida. Revisamos su tablero, '
                       . 'calculamos si la potencia contratada alcanza y cotizamos la instalación.',
        ],
        'includes' => [
            'Relevamiento del tablero y de la potencia contratada disponible',
            'Cálculo de la sección de cable y del diferencial según la carga',
            'Cotización de la instalación del cargador',
            'Circuito dedicado con protección termomagnética y diferencial propios',
            'Puesta a tierra verificada del circuito',
            'Informe escrito de lo instalado, con garantía por escrito',
        ],
        'excludes' => [
            'El cargador en sí, si usted ya cuenta con el equipo',
            'El aumento de la potencia contratada ante la ANDE, si el tablero no alcanza (se gestiona aparte)',
        ],
        'weNeed' => [
            'Modelo del auto y del cargador, si ya lo tiene',
            'Ubicación deseada del cargador',
            'Fotos del tablero eléctrico actual',
        ],
        'sections' => [
            [
                'h2'   => 'Cómo se dimensiona el circuito',
                'body' => [
                    'La carga sostenida de un cargador de auto eléctrico exige un circuito propio, '
                        . 'calculado en kW, y una sección de cable acorde. Una instalación monofásica '
                        . '220 V o trifásica 380 V, según el equipo y la potencia contratada, cambia el '
                        . 'cálculo del cable y de las protecciones.',
                    'Si la potencia contratada no alcanza para sumar el cargador a lo que ya consume la '
                        . 'vivienda, hay que gestionar un aumento de carga ante la ANDE antes de instalar.',
                ],
            ],
            [
                'h2'   => 'Instalación segura',
                'body' => [
                    'El circuito lleva su propio disyuntor termomagnético y su diferencial (DDR), '
                        . 'separados del resto de la instalación, y una puesta a tierra verificada. Un '
                        . 'cargador conectado a un tomacorriente común, sin circuito dedicado, es una '
                        . 'de las causas de sobrecalentamiento de cableado que vemos con más frecuencia.',
                ],
            ],
            [
                'h2'   => 'Sumar carga solar',
                'body' => [
                    'Si además tiene o proyecta paneles solares, se puede coordinar la carga del auto '
                        . 'con la generación solar del día, para reducir lo que se toma de la red.',
                ],
            ],
        ],
        'benefits' => [
            ['title' => 'Circuito dedicado', 'text' => 'Cable y protecciones calculados para la carga sostenida.'],
            ['title' => 'Verificamos la potencia contratada', 'text' => 'Antes de instalar, revisamos si el tablero alcanza.'],
            ['title' => 'Garantía por escrito', 'text' => 'Informe de lo instalado, con garantía documentada.'],
        ],
        'faq' => [
            [
                'q' => '¿Puedo usar un tomacorriente común para cargar?',
                'a' => 'No se recomienda para carga habitual: la corriente sostenida exige un circuito '
                     . 'dedicado, con protecciones propias.',
            ],
            [
                'q' => '¿Necesito trifásico?',
                'a' => 'Depende del equipo y de la potencia que quiera cargar. Se lo indicamos según el '
                     . 'relevamiento del tablero.',
            ],
            [
                'q' => '¿Tengo que aumentar la potencia contratada?',
                'a' => 'Solo si la suma del cargador con el resto de su consumo supera lo contratado. Lo '
                     . 'verificamos antes de cotizar la instalación.',
            ],
            [
                'q' => '¿Puedo combinarlo con paneles solares?',
                'a' => 'Sí, es habitual coordinar la carga del auto con la generación solar del día para '
                     . 'reducir lo que se toma de la red.',
            ],
        ],
        'cta'       => ['label' => 'Pedir presupuesto de cargador', 'whatsappText' => ''],
        'related'   => ['tablero-electrico-disyuntores', 'paneles-solares', 'puesta-a-tierra'],
        'guides'    => ['como-pedir-aumento-de-carga-ande', 'senales-de-una-instalacion-electrica-peligrosa'],
        'articles'  => ['cargar-auto-electrico-en-casa'],
        'toolLinks' => [
            [
                'path'  => '/herramientas/consumo-electrico/',
                'label' => 'Calcule su consumo eléctrico',
                'text'  => 'Estime cuánto suma el cargador a su consumo mensual y a la factura.',
            ],
        ],
    ],

    'baterias-respaldo' => [
        'path'            => '/servicios/baterias-respaldo/',
        'title'           => 'Baterías de respaldo',
        'navLabel'        => 'Baterías de respaldo',
        'cluster'         => 'energia',
        'parent'          => null,
        'seoTitle'        => 'Baterías de respaldo en Paraguay',
        'metaDescription' => 'Cotizamos baterías de respaldo dimensionadas en kWh útiles según sus '
                           . 'cargas críticas y la profundidad de descarga admitida, con o sin '
                           . 'paneles solares.',
        'hero' => [
            'eyebrow' => 'Energía de respaldo',
            'h1'      => 'Baterías de respaldo para sus cargas críticas',
            'h2'      => 'Dimensionadas en kWh útiles, no en la capacidad nominal de la placa.',
            'lead'    => 'Cotizamos un banco de baterías calculado según los equipos que quiere '
                       . 'mantener funcionando durante un corte y las horas de autonomía que necesita, '
                       . 'con o sin paneles solares.',
        ],
        'includes' => [
            'Relevamiento de las cargas críticas a respaldar',
            'Cálculo de los kWh útiles según la profundidad de descarga admitida',
            'Cotización de las baterías y del inversor o cargador',
            'Instalación con protecciones y cableado dedicado',
            'Prueba de autonomía real',
            'Informe escrito de lo instalado, con garantía por escrito',
        ],
        'excludes' => [
            'Los paneles solares, si no cuenta con ellos (se cotizan aparte)',
            'El generador, si busca autonomía de varios días',
        ],
        'weNeed' => [
            'Lista de equipos críticos y horas de autonomía deseadas',
            'Si ya cuenta con paneles solares instalados',
            'Fotos del tablero eléctrico',
        ],
        'sections' => [
            [
                'h2'   => 'Cómo se calcula la capacidad',
                'body' => [
                    'La capacidad nominal de una batería, en kWh, no es toda la energía que puede '
                        . 'entregar: la profundidad de descarga (depth of discharge) limita cuánto de '
                        . 'esa capacidad se puede usar sin dañar la batería o acortar su vida útil. '
                        . 'Calculamos los kWh útiles reales, no el número de la etiqueta.',
                    'A partir de sus cargas críticas y de las horas de autonomía que necesita, '
                        . 'dimensionamos el banco de baterías y el inversor o cargador correspondiente.',
                ],
            ],
            [
                'h2'   => 'Con o sin paneles solares',
                'body' => [
                    'Un banco de baterías puede sumarse a un sistema solar híbrido, para cargarse con el '
                        . 'sol durante el día y respaldar durante un corte, o instalarse de forma '
                        . 'independiente, cargándose de la red de la ANDE cuando hay energía.',
                ],
            ],
            [
                'h2'   => 'Instalación y mantenimiento',
                'body' => [
                    'La instalación incluye el cableado dedicado, las protecciones y un lugar '
                        . 'ventilado y seguro para las baterías. El seguimiento posterior verifica que '
                        . 'la profundidad de descarga real no supere la recomendada por el fabricante.',
                ],
            ],
        ],
        'benefits' => [
            ['title' => 'kWh útiles reales', 'text' => 'Calculados con la profundidad de descarga, no con la etiqueta.'],
            ['title' => 'Con o sin solar', 'text' => 'Se integra a un sistema híbrido o funciona de forma independiente.'],
            ['title' => 'Garantía por escrito', 'text' => 'Informe de lo instalado, con garantía documentada.'],
        ],
        'faq' => [
            [
                'q' => '¿Cuántas horas de autonomía me da un banco de baterías?',
                'a' => 'Depende de los kWh útiles del banco y de cuánto consuman los equipos que quiere '
                     . 'respaldar. Se lo calculamos según su lista de cargas críticas.',
            ],
            [
                'q' => '¿Necesito paneles solares para tener baterías?',
                'a' => 'No, puede instalarse de forma independiente y cargarse de la red de la ANDE '
                     . 'cuando hay energía, aunque el rendimiento es mejor combinado con solar.',
            ],
            [
                'q' => '¿Qué es la profundidad de descarga?',
                'a' => 'Es la parte de la capacidad de la batería que se puede usar sin dañarla. Usarla '
                     . 'al límite en cada ciclo acorta su vida útil.',
            ],
            [
                'q' => '¿Qué equipos conviene priorizar?',
                'a' => 'Heladera, iluminación, internet y bombas de agua suelen ser las cargas críticas '
                     . 'más habituales; lo definimos con usted en el relevamiento.',
            ],
        ],
        'cta'       => ['label' => 'Pedir presupuesto de baterías', 'whatsappText' => ''],
        'related'   => ['paneles-solares', 'ups-estabilizadores', 'generadores'],
        'guides'    => ['que-hacer-cuando-se-corta-la-luz', 'autogeneracion-ley-7599-que-cambia'],
        'articles'  => ['paneles-solares-cuando-se-pagan'],
        'toolLinks' => [
            [
                'path'  => '/herramientas/cuanto-solar-necesito/',
                'label' => 'Calcule su sistema solar y de respaldo',
                'text'  => 'Estime los kWp y el respaldo que necesita a partir de su consumo.',
            ],
        ],
    ],

    'medidor-ande-tramites' => [
        'path'            => '/servicios/medidor-ande-tramites/',
        'title'           => 'Trámites de medidor ante la ANDE',
        'navLabel'        => 'Trámites ante la ANDE',
        'cluster'         => 'energia',
        'parent'          => null,
        'seoTitle'        => 'Trámites de medidor ANDE en Paraguay',
        'metaDescription' => 'Gestionamos ante la ANDE el aumento de carga, el cambio a trifásico y '
                           . 'el registro como autogenerador, con el expediente técnico armado.',
        'hero' => [
            'eyebrow' => 'Trámites eléctricos',
            'h1'      => 'Trámites de medidor ante la ANDE',
            'h2'      => 'Armamos el expediente técnico y hacemos el seguimiento hasta la aprobación.',
            'lead'    => 'Aumentar la carga contratada, pasar de monofásico a trifásico o registrarse '
                       . 'como autogenerador son trámites que exigen un expediente técnico correcto. '
                       . 'Lo armamos con usted y hacemos el seguimiento ante la ANDE.',
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
        ],
        'sections' => [
            [
                'h2'   => 'Qué trámites gestionamos',
                'body' => [
                    'Gestionamos el aumento de la potencia contratada cuando suma un cargador de auto, '
                        . 'un aire acondicionado grande u otro equipo; el cambio de categoría de '
                        . 'monofásico 220 V a trifásico 380 V; y el registro como autogenerador para '
                        . 'quienes instalan paneles solares y quieren inyectar el excedente a la red.',
                    'Cada trámite exige un expediente técnico distinto ante la ANDE; lo armamos según '
                        . 'el caso, con los datos de su instalación.',
                ],
            ],
            [
                'h2'   => 'El registro como autogenerador',
                'body' => [
                    'La Ley 7599/2025 de energías renovables no convencionales, reglamentada por el '
                        . 'Decreto 6034/2026, habilita a hogares y comercios a registrarse como '
                        . 'autogeneradores ante la ANDE. Los pasos, plazos y la forma de compensación '
                        . 'del excedente los define la reglamentación vigente de la ANDE; consulte el '
                        . 'monto y las condiciones exactas en la ANDE, y nosotros armamos el expediente '
                        . 'junto con usted.',
                ],
            ],
            [
                'h2'   => 'Plazos y seguimiento',
                'body' => [
                    'El plazo de cada trámite lo define la ANDE; nosotros hacemos el seguimiento activo '
                        . 'del expediente y le avisamos ante cualquier observación, para que no se '
                        . 'demore por un dato faltante.',
                ],
            ],
        ],
        'benefits' => [
            ['title' => 'Expediente completo', 'text' => 'Armado con los datos técnicos que pide la ANDE.'],
            ['title' => 'Seguimiento activo', 'text' => 'Le avisamos ante cualquier observación del trámite.'],
            ['title' => 'Informe con el resultado', 'text' => 'Nuevo NIS o categoría, documentado por escrito.'],
        ],
        'faq' => [
            [
                'q' => '¿Cuánto demora el trámite?',
                'a' => 'El plazo lo define la ANDE según el tipo de trámite; nosotros hacemos '
                     . 'seguimiento activo del expediente durante todo el proceso.',
            ],
            [
                'q' => '¿Cuánto cuesta el trámite?',
                'a' => 'La tasa o el cargo que cobra la ANDE lo abona usted directamente; consulte el '
                     . 'monto vigente en la ANDE. Nuestro servicio es el armado y la gestión del '
                     . 'expediente.',
            ],
            [
                'q' => '¿Necesito este trámite si ya tengo paneles solares instalados?',
                'a' => 'Si quiere inyectar el excedente a la red, sí: hace falta registrarse como '
                     . 'autogenerador ante la ANDE, según la reglamentación vigente.',
            ],
            [
                'q' => '¿Puedo pasar de monofásico a trifásico en cualquier momento?',
                'a' => 'Es un trámite habilitado por la ANDE, sujeto a su disponibilidad técnica en la '
                     . 'zona. Lo verificamos al armar el expediente.',
            ],
        ],
        'cta'       => ['label' => 'Consultar trámite ante la ANDE', 'whatsappText' => ''],
        'related'   => ['paneles-solares', 'cargadores-vehiculos-electricos', 'tablero-electrico-disyuntores'],
        'guides'    => ['como-pedir-aumento-de-carga-ande', 'autogeneracion-ley-7599-que-cambia'],
        'articles'  => ['tarifa-ande-explicada'],
        'toolLinks' => [
            [
                'path'  => '/herramientas/consumo-electrico/',
                'label' => 'Calcule su consumo eléctrico',
                'text'  => 'Estime si su potencia contratada alcanza antes de iniciar el trámite.',
            ],
        ],
    ],

    'planes-de-mantenimiento' => [
        'path'            => '/servicios/planes-de-mantenimiento/',
        'title'           => 'Planes de mantenimiento',
        'navLabel'        => 'Planes de mantenimiento',
        'cluster'         => 'energia',
        'parent'          => null,
        'seoTitle'        => 'Plan de mantenimiento anual en Paraguay',
        'metaDescription' => 'Plan de mantenimiento anual: visitas programadas para su tablero, '
                           . 'generador, paneles solares o UPS, con informe por escrito y prioridad.',
        'hero' => [
            'eyebrow' => 'Mantenimiento programado',
            'h1'      => 'Plan de mantenimiento anual para sus equipos',
            'h2'      => 'Visitas programadas durante el año, no una revisión aislada.',
            'lead'    => 'Si ya cuenta con tablero, generador, paneles solares o UPS, armamos un plan '
                       . 'anual con visitas programadas para revisarlos, con prioridad de coordinación '
                       . 'y un informe escrito después de cada visita. Usted elige qué equipos entran '
                       . 'en el plan.',
        ],
        'includes' => [
            'Cronograma de visitas durante el año, según los equipos incluidos',
            'Una visita previa a la temporada de cortes, antes del verano',
            'Revisión del tablero: ajuste de bornes, estado de disyuntores y puesta a tierra',
            'Revisión del generador: arranque, transferencia y niveles, si está incluido en el plan',
            'Revisión de paneles solares e inversor, si están incluidos en el plan',
            'Coordinación prioritaria frente a una falla, dentro de los equipos del plan',
            'Informe escrito después de cada visita',
        ],
        'excludes' => [
            'El repuesto o el equipo que haya que reemplazar (se cotiza aparte, según lo que aparezca)',
            'La primera instalación del tablero, generador, paneles solares o UPS',
            'Una atención de emergencia fuera de las visitas programadas (se coordina y se cotiza aparte)',
        ],
        'weNeed' => [
            'Lista de los equipos que quiere incluir en el plan (generador con su kVA y marca, '
                . 'paneles solares, UPS o baterías)',
            'Fotos del tablero eléctrico actual',
            'Dirección y accesibilidad del lugar donde están los equipos',
        ],
        'sections' => [
            [
                'h2'   => 'Qué diferencia a un plan de una revisión aislada',
                'body' => [
                    'Una revisión preventiva puntual atiende el tablero una sola vez. El plan de '
                        . 'mantenimiento arma un cronograma de visitas para todo el año, ajustado a '
                        . 'los equipos que usted tiene: no es lo mismo revisar solo un tablero que '
                        . 'revisar tablero, generador y paneles solares juntos.',
                    'El plan se cotiza según la lista de equipos que decide incluir. No hay un precio '
                        . 'único: un plan para tablero y UPS no cuesta lo mismo que uno que suma '
                        . 'generador y paneles solares.',
                ],
            ],
            [
                'h2'   => 'La visita previa a la temporada de cortes',
                'body' => [
                    'Antes del verano, cuando suben los cortes de la ANDE por la mayor demanda de aire '
                        . 'acondicionado, hacemos una visita para verificar que el generador arranque, '
                        . 'que la transferencia funcione y que el tablero esté en condiciones de '
                        . 'soportar la carga de la temporada. El resto de las visitas del año se '
                        . 'programan según el equipamiento incluido en su plan.',
                ],
            ],
            [
                'h2'   => 'Un informe por visita, no una revisión sin registro',
                'body' => [
                    'Cada visita del plan termina con un informe escrito: qué se revisó, qué se '
                        . 'encontró y qué recomendamos, si corresponde. Así queda un historial de sus '
                        . 'equipos, útil también si en algún momento necesita hacer un reclamo de '
                        . 'garantía.',
                ],
            ],
        ],
        'benefits' => [
            ['title' => 'A su medida', 'text' => 'Usted elige qué equipos entran en el plan.'],
            ['title' => 'Visita pre-temporada', 'text' => 'Revisión antes de la época de más cortes.'],
            ['title' => 'Informe por visita', 'text' => 'Historial escrito de cada revisión realizada.'],
        ],
        'faq' => [
            [
                'q' => '¿Cuánto cuesta el plan de mantenimiento?',
                'a' => 'Se cotiza según los equipos que incluya: no es lo mismo un plan solo para el '
                     . 'tablero que uno que suma generador y paneles solares. Le pedimos su lista de '
                     . 'equipos para armar la cotización.',
            ],
            [
                'q' => '¿En qué se diferencia del mantenimiento eléctrico preventivo?',
                'a' => 'El mantenimiento eléctrico preventivo es una revisión puntual del tablero. El '
                     . 'plan de mantenimiento es un cronograma de visitas durante todo el año, que '
                     . 'puede incluir además el generador, los paneles solares y el UPS.',
            ],
            [
                'q' => '¿Cuántas visitas incluye el plan?',
                'a' => 'Depende de los equipos incluidos; se lo detallamos en la cotización, junto con '
                     . 'la visita previa a la temporada de cortes.',
            ],
            [
                'q' => '¿Qué pasa si un equipo falla entre visitas?',
                'a' => 'Los clientes del plan tienen coordinación prioritaria para atender esa falla, '
                     . 'dentro de los equipos incluidos en el plan.',
            ],
            [
                'q' => '¿Puedo sumar equipos al plan más adelante?',
                'a' => 'Sí, si instala un generador o paneles solares nuevos, se los podemos sumar al '
                     . 'plan; eso ajusta el cronograma y la cotización.',
            ],
        ],
        'cta'       => ['label' => 'Cotizar un plan de mantenimiento', 'whatsappText' => ''],
        'related'   => ['generadores', 'paneles-solares', 'mantenimiento-electrico', 'ups-estabilizadores'],
        'guides'    => [],
        'articles'  => ['mantenimiento-del-generador', 'temporada-de-cortes-como-preparar-su-casa'],
        'toolLinks' => [],
    ],

    'paneles-solares-en-cuotas' => [
        'path'            => '/servicios/paneles-solares-en-cuotas/',
        'title'           => 'Paneles solares en cuotas',
        'navLabel'        => 'Paneles solares en cuotas',
        'cluster'         => 'energia',
        'parent'          => 'paneles-solares',
        'seoTitle'        => 'Paneles solares a cuotas en Paraguay',
        'metaDescription' => 'Le cotizamos el sistema solar en detalle para financiarlo en cuotas con '
                           . 'un préstamo o crédito de su banco o financiera; consulte condiciones '
                           . 'vigentes.',
        'hero' => [
            'eyebrow' => 'Energía solar',
            'h1'      => 'Paneles solares para pagar en cuotas',
            'h2'      => 'Le armamos el presupuesto detallado que su banco o financiera suele pedir.',
            'lead'    => 'Dimensionamos y cotizamos su sistema solar en detalle, con el desglose de '
                       . 'equipos e instalación que un banco o una financiera suele pedir para evaluar '
                       . 'un préstamo de consumo o un crédito. Así puede pagarlo en cuotas y comparar '
                       . 'la cuota mensual contra el ahorro esperado en su factura de la ANDE.',
        ],
        'includes' => [
            'Visita técnica y relevamiento del techo y del tablero',
            'Cálculo de los kWp necesarios a partir de su consumo mensual',
            'Presupuesto detallado por ítem: paneles, inversor, estructura, protecciones e instalación',
            'Documento de cotización en el formato que suele pedir un banco o financiera para evaluar '
                . 'un préstamo',
            'Información sobre si el proveedor del equipo ofrece financiación propia, cuando exista',
            'Instalación con puesta a tierra y protecciones normadas, una vez aprobado su presupuesto',
        ],
        'excludes' => [
            'El préstamo o crédito en sí: lo otorga el banco o la financiera que usted elija',
            'La aprobación o las condiciones de financiación, que dependen de la entidad, no de nosotros',
            'Baterías de respaldo, si busca energía durante un corte (se cotiza aparte)',
        ],
        'weNeed' => [
            'Sus últimas facturas de la ANDE o su consumo mensual en kWh',
            'Fotos del techo y del tablero eléctrico actual',
            'Si ya tiene un banco o financiera en mente, o si quiere que le indiquemos opciones a '
                . 'consultar',
        ],
        'sections' => [
            [
                'h2'   => 'El camino, paso a paso',
                'body' => [
                    'Partimos de su consumo mensual en kWh para calcular el tamaño del sistema. Con ese '
                        . 'dato armamos un presupuesto detallado, ítem por ítem, que usted puede llevar '
                        . 'a su banco o financiera para evaluar un préstamo de consumo o un crédito. '
                        . 'Algunos proveedores de equipos ofrecen también su propia financiación; se lo '
                        . 'indicamos cuando esté disponible. Una vez definida la forma de pago, se '
                        . 'instala el sistema.',
                ],
                'items' => [
                    ['title' => 'Consumo', 'text' => 'Relevamos su consumo mensual en kWh.'],
                    ['title' => 'Dimensionamiento', 'text' => 'Calculamos los kWp que necesita.'],
                    ['title' => 'Presupuesto detallado', 'text' => 'Ítem por ítem, para presentar a su entidad.'],
                    ['title' => 'Financiación', 'text' => 'La gestiona usted con el banco, financiera o proveedor.'],
                    ['title' => 'Instalación', 'text' => 'Se instala una vez definida la forma de pago.'],
                ],
            ],
            [
                'h2'   => 'Cuota mensual contra ahorro mensual',
                'body' => [
                    'La comparación que suele importar es la cuota mensual del préstamo frente al '
                        . 'ahorro mensual esperado en su factura de la ANDE: si la cuota queda cerca o '
                        . 'por debajo de lo que hoy paga de más por el consumo que el sistema va a '
                        . 'reemplazar, el pago en cuotas puede convenirle. La referencia es lo que '
                        . 'paga por mes, no el precio total del sistema: ponga su factura actual al '
                        . 'lado de la cuota que le cotice la entidad.',
                    'Nosotros le damos los kWp, el consumo que cubren y el presupuesto detallado; la '
                        . 'tasa, el plazo y la cuota exacta los define la entidad que le otorgue el '
                        . 'préstamo o crédito, según sus condiciones vigentes.',
                ],
            ],
            [
                'h2'   => 'Qué necesita su banco o financiera',
                'body' => [
                    'Las entidades suelen pedir un presupuesto detallado y formal del sistema '
                        . 'antes de evaluar un préstamo de consumo o un crédito. Le entregamos ese '
                        . 'documento con el desglose de equipos, cantidades e instalación, para que lo '
                        . 'presente donde prefiera. Consulte siempre las condiciones vigentes —tasa, '
                        . 'plazo, cuota inicial— directamente con la entidad.',
                ],
            ],
        ],
        'benefits' => [
            ['title' => 'Presupuesto detallado', 'text' => 'El desglose que su entidad suele pedir para evaluar el préstamo.'],
            ['title' => 'Sistema a su medida', 'text' => 'Calculado con su consumo real, no con un kit genérico.'],
            ['title' => 'Sin atarlo a una entidad', 'text' => 'Usted elige dónde financiarlo; nosotros armamos el presupuesto.'],
        ],
        'faq' => [
            [
                'q' => '¿Ustedes otorgan el préstamo o el crédito?',
                'a' => 'No. Nosotros dimensionamos y cotizamos el sistema; el préstamo o crédito lo '
                     . 'otorga el banco o la financiera que usted elija, según sus condiciones vigentes.',
            ],
            [
                'q' => '¿Tengo que financiarlo con un banco en particular?',
                'a' => 'No. Le entregamos '
                     . 'el presupuesto detallado que necesita para presentar donde prefiera, y le '
                     . 'avisamos si el proveedor del equipo ofrece su propia financiación.',
            ],
            [
                'q' => '¿Cómo sé si me conviene pagarlo en cuotas?',
                'a' => 'Compare la cuota mensual que le cotice la entidad contra el ahorro mensual '
                     . 'esperado en su factura de la ANDE, no contra el precio total del sistema.',
            ],
            [
                'q' => '¿Cuánto cuesta el sistema?',
                'a' => 'Depende de su consumo y del sistema que necesite; se lo indicamos en el '
                     . 'presupuesto detallado, después de la visita técnica.',
            ],
            [
                'q' => '¿Puedo usar la calculadora antes de pedir el presupuesto?',
                'a' => 'Sí, la calculadora le da una primera estimación de los kWp según su consumo; '
                     . 'el presupuesto formal para su entidad lo armamos con la visita técnica.',
            ],
        ],
        'cta'       => ['label' => 'Cotizar paneles solares en cuotas', 'whatsappText' => ''],
        'related'   => ['paneles-solares', 'baterias-respaldo', 'medidor-ande-tramites'],
        'guides'    => [],
        'articles'  => ['paneles-solares-cuando-se-pagan', 'on-grid-hibrido-u-off-grid'],
        'toolLinks' => [
            [
                'path'  => '/herramientas/cuanto-solar-necesito/',
                'label' => 'Calcule cuánto solar necesita',
                'text'  => 'Estime los kWp y la cantidad de paneles a partir de su factura de la ANDE.',
            ],
        ],
    ],

];
