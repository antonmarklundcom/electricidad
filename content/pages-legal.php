<?php
/**
 * Prose sections for a set of static pages, keyed by path. Each entry carries
 * ONLY a 'sections' array, in the same shape as content/pages.php's
 * 'sections' key: [['h2' => ..., 'body' => [paragraph, ...]], ...].
 *
 * Paths covered: /privacidad/, /terminos/, /precios/, /profesionales/,
 * /electricista/.
 */

declare(strict_types=1);

return [

    '/privacidad/' => [
        'sections' => [
            [
                'h2'   => 'Qué datos recogemos',
                'body' => [
                    'Recogemos los datos que usted mismo nos entrega al escribirnos por el '
                        . 'formulario de contacto o por WhatsApp: nombre, teléfono, correo '
                        . 'electrónico, el mensaje o la consulta, y la ciudad donde se encuentra. '
                        . 'También registramos los parámetros de campaña (UTM) del enlace por el que '
                        . 'llegó, cuando corresponde, para entender de qué canal proviene la '
                        . 'consulta.',
                    'No pedimos datos que no necesitamos para responderle: no solicitamos número de '
                        . 'cédula, datos bancarios ni información de salud a través de estos canales.',
                ],
            ],
            [
                'h2'   => 'Para qué usamos sus datos',
                'body' => [
                    'Usamos sus datos para responder su consulta y para derivarla al electricista o '
                        . 'proveedor de energía de la red que le va a cotizar el trabajo. Es decir: '
                        . 'sus datos de contacto se comparten con el profesional o proveedor que '
                        . 'atiende su caso, únicamente con ese fin, para que pueda comunicarse con '
                        . 'usted y armar la propuesta.',
                    'No vendemos sus datos ni los cedemos a terceros ajenos a la atención de su '
                        . 'consulta. No usamos su correo ni su teléfono para enviarle publicidad de '
                        . 'otros negocios.',
                ],
            ],
            [
                'h2'   => 'Base legal y conservación',
                'body' => [
                    'Tratamos sus datos con base en el consentimiento que usted otorga al '
                        . 'completar el formulario o al escribirnos por WhatsApp: enviar sus datos '
                        . 'es una acción voluntaria, y usted puede optar por no completar campos que '
                        . 'no sean obligatorios.',
                    'Conservamos sus datos mientras dure la gestión de su consulta y por el tiempo '
                        . 'adicional razonable para dar seguimiento a un trabajo en curso; pasado ese '
                        . 'plazo, o si usted lo solicita antes, los eliminamos de nuestros registros '
                        . 'activos.',
                ],
            ],
            [
                'h2'   => 'Sus derechos',
                'body' => [
                    'La Constitución Nacional, en su artículo 135, reconoce el derecho de toda '
                        . 'persona a acceder a la información que sobre sí misma conste en registros '
                        . 'o bancos de datos, y a conocer el uso que se hace de ella, así como su '
                        . 'finalidad. Conforme a ese principio, usted puede pedirnos en cualquier '
                        . 'momento el acceso, la rectificación o la eliminación de los datos que nos '
                        . 'haya entregado.',
                    'Para ejercer estos derechos, escríbanos a través de la página de contacto '
                        . 'indicando qué dato quiere consultar, corregir o eliminar; le respondemos '
                        . 'por el mismo medio.',
                ],
            ],
            [
                'h2'   => 'Cookies y analítica',
                'body' => [
                    'Este sitio utiliza cookies técnicas y una herramienta de analítica web (Google '
                        . 'Analytics, GA4) para entender cómo se usa el sitio y qué páginas resultan '
                        . 'útiles a los visitantes. Esta analítica registra datos de navegación de '
                        . 'forma agregada y no identifica a la persona a partir del formulario de '
                        . 'contacto.',
                    'Puede configurar su navegador para bloquear cookies; algunas funciones del '
                        . 'sitio, como recordar preferencias de navegación, pueden verse afectadas si '
                        . 'las bloquea por completo.',
                ],
            ],
        ],
    ],

    '/terminos/' => [
        'sections' => [
            [
                'h2'   => 'Qué es este sitio',
                'body' => [
                    'Electricidad Paraguay es un sitio de generación de contactos: conecta a '
                        . 'personas y empresas que necesitan un trabajo eléctrico o un producto de '
                        . 'energía (paneles solares, generadores, UPS, baterías, cargadores '
                        . 'vehiculares) con electricistas y proveedores de la red que realizan ese '
                        . 'trabajo o venden ese producto. El sitio en sí no ejecuta instalaciones ni '
                        . 'vende equipos directamente.',
                    'Al usar el sitio y enviar sus datos por el formulario o por WhatsApp, usted '
                        . 'acepta que esa información se comparta con el profesional o proveedor que '
                        . 'atenderá su consulta.',
                ],
            ],
            [
                'h2'   => 'Presupuestos y calculadoras',
                'body' => [
                    'Cualquier presupuesto enviado por WhatsApp antes de una visita es orientativo, '
                        . 'basado en la información que usted describe; el alcance y el monto final '
                        . 'se confirman por escrito luego de la evaluación correspondiente, y ese '
                        . 'documento escrito es el que rige el trabajo.',
                    'Las calculadoras del sitio (dimensionamiento solar, generador necesario, '
                        . 'consumo eléctrico) son herramientas orientativas para ayudar a estimar un '
                        . 'orden de magnitud; no reemplazan una evaluación técnica en el lugar ni '
                        . 'constituyen una cotización.',
                ],
            ],
            [
                'h2'   => 'Responsabilidad del trabajo realizado',
                'body' => [
                    'El profesional o proveedor que realiza el trabajo es responsable de la '
                        . 'ejecución, de la calidad de la instalación y de la garantía que entrega '
                        . 'por escrito. Cualquier reclamo sobre un trabajo ya realizado se canaliza a '
                        . 'través de ese informe y esa garantía.',
                    'Este sitio no se responsabiliza por daños derivados de que una persona sin '
                        . 'formación intente realizar por su cuenta una tarea eléctrica que, según '
                        . 'nuestras propias guías, debe hacer un profesional; el contenido educativo '
                        . 'del sitio indica qué observar y cuándo llamar, no cómo intervenir usted '
                        . 'mismo una instalación.',
                ],
            ],
            [
                'h2'   => 'Propiedad intelectual',
                'body' => [
                    'Los textos, calculadoras, guías y el diseño del sitio son propiedad de '
                        . 'Electricidad Paraguay o se usan con la autorización correspondiente. No '
                        . 'está permitido reproducir el contenido del sitio con fines comerciales sin '
                        . 'autorización previa.',
                ],
            ],
            [
                'h2'   => 'Ley aplicable',
                'body' => [
                    'Estos términos se rigen por las leyes de la República del Paraguay. Cualquier '
                        . 'controversia derivada del uso del sitio se somete a los tribunales '
                        . 'ordinarios de la ciudad de Asunción.',
                ],
            ],
        ],
    ],

    '/precios/' => [
        'sections' => [
            [
                'h2'   => 'Presupuesto por WhatsApp, sin cargo',
                'body' => [
                    'Todo pedido empieza con una consulta por WhatsApp: usted describe el trabajo '
                        . 'o el producto que necesita, y el electricista o proveedor de la red le '
                        . 'responde con un primer presupuesto orientativo, sin cargo, a partir de esa '
                        . 'descripción.',
                    'Ese primer presupuesto sirve para tener una idea del alcance y decidir si '
                        . 'conviene avanzar hacia una evaluación más detallada, no como un monto '
                        . 'cerrado.',
                ],
            ],
            [
                'h2'   => 'Cuándo hace falta una visita de diagnóstico',
                'body' => [
                    'Cuando el caso lo requiere —una falla difícil de describir por mensaje, una '
                        . 'instalación grande, o un dimensionamiento de energía que depende del techo '
                        . 'o del tablero— se coordina una visita de diagnóstico en el lugar.',
                    'Si esa visita tiene algún costo, se lo informamos antes de coordinarla, nunca '
                        . 'después de realizada, para que usted decida con esa información antes de '
                        . 'confirmar la fecha.',
                ],
            ],
            [
                'h2'   => 'Materiales y mano de obra, por separado',
                'body' => [
                    'El presupuesto final detalla el costo de los materiales y el costo de la mano '
                        . 'de obra por separado, para que se entienda con claridad qué parte '
                        . 'corresponde a cada uno antes de aceptar el trabajo.',
                ],
            ],
            [
                'h2'   => 'Cómo se cotizan los productos de energía',
                'body' => [
                    'Un sistema solar, un generador o un UPS se cotizan en cuatro partes: el '
                        . 'dimensionamiento del equipo según su consumo, el costo del equipo en sí, '
                        . 'la instalación y, cuando corresponde, el trámite ante la ANDE para '
                        . 'registrar la instalación. Cada parte se muestra por separado en la '
                        . 'cotización final.',
                ],
            ],
            [
                'h2'   => 'Formas de pago',
                'body' => [
                    'La forma de pago se coordina directamente con el electricista o proveedor que '
                        . 'atiende su caso, según el alcance y el monto del trabajo.',
                ],
            ],
        ],
    ],

    '/profesionales/' => [
        'sections' => [
            [
                'h2'   => 'Para electricistas y proveedores de energía',
                'body' => [
                    'Sumamos a la red electricistas independientes o de cuadrilla que trabajan en '
                        . 'Asunción y Departamento Central, y proveedores o importadores de paneles '
                        . 'solares, generadores, UPS y baterías que quieran recibir pedidos de '
                        . 'presupuesto ya dimensionados.',
                ],
            ],
            [
                'h2'   => 'Qué recibe al sumarse',
                'body' => [
                    'Solicitudes de trabajo calificadas en su zona: llegan con el problema descrito '
                        . 'por el cliente, fotos cuando las hay, y la ubicación, para que evalúe si '
                        . 'el caso corresponde a lo que ofrece antes de responder.',
                    'Los proveedores de energía reciben pedidos de presupuesto ya dimensionados '
                        . '—consumo estimado, tipo de sistema buscado— para paneles solares, '
                        . 'generadores o UPS, en lugar de consultas genéricas sin datos.',
                ],
            ],
            [
                'h2'   => 'Qué pedimos',
                'body' => [
                    'Experiencia comprobable en el tipo de trabajo que realiza, un trabajo prolijo '
                        . 'y documentado, respuesta rápida a las solicitudes que le llegan, garantía '
                        . 'por escrito de lo realizado y precios justos frente al cliente.',
                ],
            ],
            [
                'h2'   => 'Cómo funciona',
                'body' => [
                    'Nos escribe por la página de contacto contando su rubro, su zona de trabajo y '
                        . 'su experiencia. Conversamos las condiciones de la relación con la red, '
                        . 'a conversar según el tipo de trabajo, y una vez de acuerdo empieza a '
                        . 'recibir solicitudes calificadas de su zona.',
                ],
            ],
        ],
    ],

    '/electricista/' => [
        'sections' => [
            [
                'h2'   => 'Dónde trabajamos',
                'body' => [
                    'La red de electricistas y proveedores atiende principalmente Asunción y todo '
                        . 'el Departamento Central (Gran Asunción): San Lorenzo, Luque, Fernando de '
                        . 'la Mora, Lambaré, Capiatá, Ñemby, Mariano Roque Alonso, Villa Elisa y '
                        . 'Limpio, entre otras ciudades del área metropolitana.',
                ],
            ],
            [
                'h2'   => 'Interior del país',
                'body' => [
                    'Fuera del área metropolitana atendemos por consulta, sobre todo para proyectos '
                        . 'de paneles solares y generadores en estancias y propiedades del interior, '
                        . 'donde la distancia a la red de la ANDE hace que estos sistemas tengan más '
                        . 'sentido. Escríbanos por WhatsApp con su ubicación y evaluamos si el '
                        . 'trabajo es viable para la zona.',
                ],
            ],
        ],
    ],

];
