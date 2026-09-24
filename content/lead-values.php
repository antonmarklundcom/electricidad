<?php
/**
 * The lead value model. ONE record per source — every service slug, every tool
 * slug, every "¿qué necesita?" chip — plus the neutral default for pages that
 * are none of those.
 *
 * Nothing else on the site decides a tier, a conversion value or a WhatsApp
 * prefill: pages read this through lib/helpers.php's lead_value() and
 * whatsapp_text_for_page(), so retuning the model after a few weeks of GA4 data
 * is one edit here and no page changes.
 *
 * Record shape (every key required unless noted):
 *
 *   menuLabel     string   the short human name this source goes by in the
 *                          WhatsApp menu and in the CRM's `servicio` field. Page
 *                          titles are often frozen for SEO and too terse to read
 *                          as a menu option, which is why this exists
 *   need          string   key into ui('needs') — the chip this source maps to,
 *                          or a key in 'needLabels' below for sources with no
 *                          chip of their own
 *   tier          string   'A' | 'B' | 'C' — how much this source is worth
 *   whatsappText  string   the wa.me prefill. Names the service the visitor was
 *                          reading about — never a generic "consulta gratis"
 *   nextStep      string[] 2–3 lines shown after submit: what to have ready.
 *                          This is the second touch; it is worth reading
 *   crmTag        string   lands on the VenderCRM timeline as fields.etiqueta —
 *                          see the note on tags in enviar.php
 *   nextLink      ?array   optional ['path' => ..., 'label' => ...] tool or guide
 *                          offered alongside the thank-you text. The path must
 *                          resolve to a real route file; verify.sh checks it
 *
 * Adding a source: add a record keyed by its slug. Pages resolve by slug, so a
 * new guide or segment page joins the model by adding a key here.
 */

declare(strict_types=1);

/* The Google Ads conversion value per tier, in whole units of the market's
   currency (content/site.php 'market'). These are OPTIMISATION PROXIES, not
   revenue estimates: they exist so smart bidding favours a solar/generator lead over
   a calculator lead by roughly 15:1 (plan.md §1.7). Retune the ratio here, and re-scale the
   numbers when the site's market — and therefore its currency — changes. */
$tierValues = [
    'A' => 3000000,
    'B' => 800000,
    'C' => 200000,
];

/* Labels for `need` keys that are not one of the form chips, so the CRM reads a
   sentence instead of a raw key. */
$needLabels = [
    'recordatorio' => 'Recordatorio de mantenimiento',
    'socio'        => 'Electricista o proveedor que quiere sumarse a la red',
];

return [

    'tierValues' => $tierValues,
    'needLabels' => $needLabels,

    /* Which services the WhatsApp menu offers, in order, after the current
       page's own service. Keep it short: four is plenty. */
    'whatsappMenu' => ['cortocircuito-y-fallas', 'tablero-electrico-disyuntores', 'paneles-solares', 'generadores'],

    /* The record for a page that names no service: an article without one, a
       legal page, the homepage. Never null — every form resolves to something. */
    'default' => [
        'menuLabel'    => 'Consulta general',
        'need'         => 'otro',
        'tier'         => 'C',
        'whatsappText' => 'Hola, necesito un electricista. El problema es: ',
        'nextStep'     => [
            'Le escribimos por WhatsApp a la brevedad.',
            'Si puede, mándenos una foto o un audio del problema.',
        ],
        'crmTag'       => 'consulta-general',
        'nextLink'     => null,
    ],

    /* One record per key in content/services.php. verify.sh fails when a service
       has none — an untagged lead is a lead nobody can route. */
    'services' => [
        'electricista-24-horas' => [
            'menuLabel'    => 'Electricista urgente',
            'need'         => 'emergencia',
            'tier'         => 'C',
            'whatsappText' => 'Hola, necesito un electricista urgente. El problema es: ',
            'nextStep'     => [
                'Si hay olor a quemado o chispas, baje la llave general y no toque nada.',
                'Mándenos una foto del tablero y un audio contando qué pasó.',
            ],
            'crmTag'       => 'electricista-24-horas',
            'nextLink'     => ['path' => '/guias/que-hacer-cuando-se-corta-la-luz/', 'label' => 'Qué hacer mientras llega el electricista'],
        ],
        'instalacion-electrica-residencial' => [
            'menuLabel'    => 'Instalación eléctrica residencial',
            'need'         => 'instalacion',
            'tier'         => 'B',
            'whatsappText' => 'Hola, quisiera presupuesto para una instalación eléctrica en mi casa.',
            'nextStep'     => [
                'Tenga a mano el plano o unas fotos de los ambientes.',
                'Díganos si la casa es nueva, una reforma o una ampliación.',
            ],
            'crmTag'       => 'instalacion-electrica-residencial',
            'nextLink'     => null,
        ],
        'tablero-electrico-disyuntores' => [
            'menuLabel'    => 'Tablero eléctrico y disyuntores',
            'need'         => 'tablero',
            'tier'         => 'B',
            'whatsappText' => 'Hola, quisiera presupuesto para cambiar o revisar el tablero eléctrico.',
            'nextStep'     => [
                'Mándenos una foto del tablero abierto (sin tocar nada adentro).',
                'Díganos cuántos aires acondicionados y equipos grandes tiene.',
            ],
            'crmTag'       => 'tablero-electrico-disyuntores',
            'nextLink'     => null,
        ],
        'cortocircuito-y-fallas' => [
            'menuLabel'    => 'Cortocircuito o falla eléctrica',
            'need'         => 'emergencia',
            'tier'         => 'C',
            'whatsappText' => 'Hola, tengo una falla eléctrica en casa y necesito un electricista.',
            'nextStep'     => [
                'Si salta la llave apenas la sube, déjela abajo.',
                'Mándenos una foto del tablero y cuéntenos qué estaba enchufado.',
            ],
            'crmTag'       => 'cortocircuito-y-fallas',
            'nextLink'     => ['path' => '/guias/senales-de-una-instalacion-electrica-peligrosa/', 'label' => 'Señales de una instalación peligrosa'],
        ],
        'puesta-a-tierra' => [
            'menuLabel'    => 'Puesta a tierra',
            'need'         => 'instalacion',
            'tier'         => 'B',
            'whatsappText' => 'Hola, quisiera presupuesto para instalar o medir la puesta a tierra.',
            'nextStep'     => [
                'Díganos si tiene jabalina hoy y dónde está el tablero.',
                'Una foto del tablero nos ayuda a cotizar.',
            ],
            'crmTag'       => 'puesta-a-tierra',
            'nextLink'     => null,
        ],
        'instalacion-aire-acondicionado' => [
            'menuLabel'    => 'Instalación eléctrica para aire acondicionado',
            'need'         => 'aire',
            'tier'         => 'B',
            'whatsappText' => 'Hola, necesito la instalación eléctrica para un aire acondicionado.',
            'nextStep'     => [
                'Díganos cuántos BTU tiene el equipo y en qué ambiente va.',
                'Una foto del tablero y de la pared donde va el equipo.',
            ],
            'crmTag'       => 'instalacion-aire-acondicionado',
            'nextLink'     => ['path' => '/herramientas/consumo-electrico/', 'label' => 'Cuánto suma el aire a su factura'],
        ],
        'iluminacion-led' => [
            'menuLabel'    => 'Iluminación LED',
            'need'         => 'instalacion',
            'tier'         => 'C',
            'whatsappText' => 'Hola, quisiera presupuesto para cambiar la iluminación a LED.',
            'nextStep'     => [
                'Díganos cuántos puntos de luz y en qué ambientes.',
                'Si es un local, el horario en que está encendido.',
            ],
            'crmTag'       => 'iluminacion-led',
            'nextLink'     => ['path' => '/herramientas/consumo-electrico/', 'label' => 'Calcule el ahorro'],
        ],
        'cableado-obra-nueva' => [
            'menuLabel'    => 'Cableado de obra nueva',
            'need'         => 'instalacion',
            'tier'         => 'A',
            'whatsappText' => 'Hola, quisiera presupuesto para el cableado eléctrico de una obra nueva.',
            'nextStep'     => [
                'Tenga a mano el plano de la obra y la etapa en que está.',
                'Díganos si ya tiene el pedido de conexión a la ANDE.',
            ],
            'crmTag'       => 'cableado-obra-nueva',
            'nextLink'     => null,
        ],
        'instalacion-electrica-comercial' => [
            'menuLabel'    => 'Instalación eléctrica comercial',
            'need'         => 'instalacion',
            'tier'         => 'A',
            'whatsappText' => 'Hola, quisiera presupuesto para la instalación eléctrica de un local o empresa.',
            'nextStep'     => [
                'Díganos el rubro, los metros cuadrados y los equipos principales.',
                'Si es monofásica o trifásica, y una foto del tablero.',
            ],
            'crmTag'       => 'instalacion-electrica-comercial',
            'nextLink'     => null,
        ],
        'mantenimiento-electrico' => [
            'menuLabel'    => 'Mantenimiento eléctrico',
            'need'         => 'tablero',
            'tier'         => 'B',
            'whatsappText' => 'Hola, quisiera presupuesto para mantenimiento eléctrico preventivo.',
            'nextStep'     => [
                'Díganos qué tipo de inmueble es y cada cuánto quiere la revisión.',
                'Una foto del tablero principal.',
            ],
            'crmTag'       => 'mantenimiento-electrico',
            'nextLink'     => null,
        ],
        'paneles-solares' => [
            'menuLabel'    => 'Paneles solares',
            'need'         => 'solar',
            'tier'         => 'A',
            'whatsappText' => 'Hola, quisiera presupuesto para instalar paneles solares.',
            'nextStep'     => [
                'Tenga a mano sus últimas facturas de la ANDE (o el consumo en kWh).',
                'Díganos si el techo es de chapa, losa o teja y hacia dónde mira.',
            ],
            'crmTag'       => 'paneles-solares',
            'nextLink'     => ['path' => '/herramientas/cuanto-solar-necesito/', 'label' => 'Calcule cuántos paneles necesita'],
        ],
        'generadores' => [
            'menuLabel'    => 'Generadores',
            'need'         => 'generador',
            'tier'         => 'A',
            'whatsappText' => 'Hola, quisiera presupuesto para un generador con instalación.',
            'nextStep'     => [
                'Hágannos la lista de lo que quiere que funcione durante un corte.',
                'Díganos si la instalación es monofásica o trifásica.',
            ],
            'crmTag'       => 'generadores',
            'nextLink'     => ['path' => '/herramientas/que-generador-necesito/', 'label' => 'Calcule qué generador necesita'],
        ],
        'ups-estabilizadores' => [
            'menuLabel'    => 'UPS y estabilizadores',
            'need'         => 'generador',
            'tier'         => 'B',
            'whatsappText' => 'Hola, quisiera presupuesto para una UPS o un estabilizador.',
            'nextStep'     => [
                'Díganos qué equipos quiere proteger y cuánto tiempo de respaldo necesita.',
                'Si tiene bajas de tensión frecuentes, desde cuándo.',
            ],
            'crmTag'       => 'ups-estabilizadores',
            'nextLink'     => null,
        ],
        'cargadores-vehiculos-electricos' => [
            'menuLabel'    => 'Cargador de vehículo eléctrico',
            'need'         => 'instalacion',
            'tier'         => 'B',
            'whatsappText' => 'Hola, quisiera presupuesto para instalar un cargador de auto eléctrico en casa.',
            'nextStep'     => [
                'Díganos el modelo del vehículo y dónde lo estaciona.',
                'Una foto del tablero y la distancia aproximada hasta el garaje.',
            ],
            'crmTag'       => 'cargadores-vehiculos-electricos',
            'nextLink'     => null,
        ],
        'baterias-respaldo' => [
            'menuLabel'    => 'Baterías de respaldo',
            'need'         => 'generador',
            'tier'         => 'B',
            'whatsappText' => 'Hola, quisiera presupuesto para un sistema de baterías de respaldo.',
            'nextStep'     => [
                'Díganos qué quiere mantener funcionando y por cuántas horas.',
                'Si ya tiene paneles solares o un inversor, la marca y potencia.',
            ],
            'crmTag'       => 'baterias-respaldo',
            'nextLink'     => ['path' => '/herramientas/consumo-electrico/', 'label' => 'Calcule su consumo'],
        ],
        'medidor-ande-tramites' => [
            'menuLabel'    => 'Trámites y medidor ANDE',
            'need'         => 'otro',
            'tier'         => 'C',
            'whatsappText' => 'Hola, necesito ayuda con un trámite de la ANDE (medidor o conexión).',
            'nextStep'     => [
                'Tenga a mano su número de NIS (está en la factura).',
                'Díganos qué trámite necesita: conexión nueva, aumento de carga o cambio a trifásica.',
            ],
            'crmTag'       => 'medidor-ande-tramites',
            'nextLink'     => ['path' => '/guias/como-leer-la-factura-de-ande/', 'label' => 'Cómo leer su factura de la ANDE'],
        ],
    ],

    /* One record per key in content/tools.php. A calculator lead is worth less
       than a service lead — that is the whole point of tiering them. */
    'tools' => [
        'cuanto-solar-necesito' => [
            'menuLabel'    => 'Calculadora solar',
            'need'         => 'solar',
            'tier'         => 'C',
            'whatsappText' => 'Hola, usé la calculadora solar y quisiera un presupuesto para mi consumo.',
            'nextStep'     => [
                'Tenga a mano sus últimas facturas de la ANDE.',
                'Guarde el resultado: se lo revisamos con fotos del techo.',
            ],
            'crmTag'       => 'cuanto-solar-necesito',
            'nextLink'     => null,
        ],
        'que-generador-necesito' => [
            'menuLabel'    => 'Calculadora de generador',
            'need'         => 'generador',
            'tier'         => 'C',
            'whatsappText' => 'Hola, usé la calculadora de generador y quisiera confirmar qué equipo me conviene.',
            'nextStep'     => [
                'Guarde la lista de equipos que marcó.',
                'Díganos si la instalación es monofásica o trifásica.',
            ],
            'crmTag'       => 'que-generador-necesito',
            'nextLink'     => null,
        ],
        'consumo-electrico' => [
            'menuLabel'    => 'Calculadora de consumo',
            'need'         => 'otro',
            'tier'         => 'C',
            'whatsappText' => 'Hola, usé la calculadora de consumo y quisiera bajar mi factura de la ANDE.',
            'nextStep'     => [
                'Tenga a mano su última factura de la ANDE.',
                'Guarde el resultado: le decimos qué conviene cambiar primero.',
            ],
            'crmTag'       => 'consumo-electrico',
            'nextLink'     => null,
        ],
        'que-ups-necesito' => [
            'menuLabel'    => 'Calculadora de UPS',
            'need'         => 'generador',
            'tier'         => 'C',
            'whatsappText' => 'Hola, usé la calculadora de UPS y quisiera presupuesto para los equipos que marqué.',
            'nextStep'     => [
                'Guarde la lista de equipos y los minutos de respaldo que eligió.',
                'Díganos si tiene bajas de tensión frecuentes además de cortes.',
            ],
            'crmTag'       => 'que-ups-necesito',
            'nextLink'     => null,
        ],
    ],

    /* One record per chip in content/ui.php 'needs'. A lead from a page with no
       service of its own takes the tier of the chip the visitor picked, and
       borrows that chip's service copy when it names one. */
    'needs' => [
        'emergencia'  => ['tier' => 'C', 'crmTag' => 'emergencia',  'service' => 'cortocircuito-y-fallas'],
        'instalacion' => ['tier' => 'B', 'crmTag' => 'instalacion', 'service' => 'instalacion-electrica-residencial'],
        'tablero'     => ['tier' => 'B', 'crmTag' => 'tablero',     'service' => 'tablero-electrico-disyuntores'],
        'aire'        => ['tier' => 'B', 'crmTag' => 'aire',        'service' => 'instalacion-aire-acondicionado'],
        'solar'       => ['tier' => 'A', 'crmTag' => 'solar',       'service' => 'paneles-solares'],
        'generador'   => ['tier' => 'A', 'crmTag' => 'generador',   'service' => 'generadores'],
        'otro'        => ['tier' => 'C', 'crmTag' => 'consulta-general', 'service' => null],
    ],
];
