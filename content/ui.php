<?php
/**
 * Every UI string on the site, in one file — the single-locale layer. Nothing
 * in partials/ or templates/ contains a visible word; they all read from here,
 * so translating the site is this one file plus content/*.
 *
 * The strings below are neutral Spanish (formal "usted"), matching the 'py'
 * market the example content uses. A Swedish site rewrites this file in
 * Swedish and sets 'market' => 'se' in content/site.php; no code changes.
 *
 * Nothing here may name a month, a year, a price or a client: strings must stay
 * true without anyone remembering to edit them.
 */

declare(strict_types=1);

return [

    // Cluster labels, in the order the mega-menu and the services hub use them.
    // A cluster key is referenced by every service record ('cluster' => ...).
    'clusters' => [
        'electricista' => 'Electricista',
        'energia'      => 'Energía y respaldo',
    ],

    // One line under each cluster heading on the services hub. Keyed by cluster id.
    'cluster_leads' => [
        'electricista' => 'Temas de instalaciones, reparaciones y mantenimiento para preparar una consulta.',
        'energia'      => 'Solar, generadores, UPS y baterías: alternativas para evaluar según los equipos y el consumo.',
    ],

    'nav' => [
        'home'         => 'Inicio',
        'services'     => 'Servicios',
        'pricing'      => 'Cómo cotizamos',
        'tools'        => 'Calculadoras',
        'guides'       => 'Guías',
        'about'        => 'Nosotros',
        'blog'         => 'Blog',
        'contact'      => 'Contacto',
        'privacy'      => 'Privacidad',
        'terms'        => 'Términos',
        'menu'         => 'Menú',
        'close'        => 'Cerrar',
        'open_menu'    => 'Abrir el menú',
        'close_menu'   => 'Cerrar el menú',
        'skip'         => 'Ir al contenido principal',
        'firm'         => 'Electricidad PY',
        'zones'        => 'Zonas',
        'segments'     => 'Rubros',
        'partners'     => 'Para electricistas',
        'checklist'    => 'Checklist antes del verano',
        'all_services' => 'Ver todos los servicios',
    ],

    'cta' => [
        'quote'         => 'Preparar consulta',
        'whatsapp'      => 'WhatsApp',
        'whatsapp_long' => 'Escribir por WhatsApp',
        'consult'       => 'Preparar consulta',
        'contact'       => 'Contactar',
        'see_included'  => 'Ver qué incluye',
        'talk'          => 'Preparar mi consulta',
    ],

    // The WhatsApp menu. These are BUTTON LABELS only — the message that
    // actually reaches WhatsApp always comes from content/lead-values.php and
    // names a service, never a generic "consulta gratis".
    'whatsapp' => [
        'menu_title' => '¿Sobre qué quiere escribirnos?',
        'menu_note'  => 'Abrimos WhatsApp con el mensaje ya escrito. Puede cambiarlo antes de enviarlo.',
        'other'      => 'Otra consulta',
        'this_page'  => 'Lo que está viendo',
        'open_menu'  => 'Abrir opciones de WhatsApp',
        'close_menu' => 'Cerrar',
    ],

    'home' => [
        'eyebrow'   => 'Asunción y Gran Asunción',
        'h1_lead'   => 'Electricista en Asunción y Central: ',
        'h1_accent' => 'presupuesto por WhatsApp, una consulta mejor preparada.',
        'lead'      => 'Nos manda una foto o un audio del problema, le decimos qué hay que hacer y '
                     . 'cuánto cuesta antes de ir. Y si ya se cansó de los cortes, le dimensionamos '
                     . 'paneles solares, generador o UPS para su consumo real.',
        'trust'     => [
            'Presupuesto antes de la visita',
            'Materiales y mano de obra por separado',
            'Condiciones por confirmar',
        ],

        'tracks_eyebrow' => 'Dos formas de ayudarle',
        'tracks_title'   => 'Encuentre el tema y los datos útiles para consultar.',
        'track_electricista_title' => 'Electricista',
        'track_electricista_text'  => 'Fallas, cortocircuitos, tableros, aire acondicionado e instalaciones nuevas.',
        'track_energia_title'      => 'Energía y respaldo',
        'track_energia_text'       => 'Paneles solares, generadores, UPS y baterías, dimensionados e instalados.',
        'track_all'                => 'Ver todo',

        'services_eyebrow' => 'Servicios',
        'services_title'   => 'Encuentre el tema de su consulta',
        'services_lead'    => 'Instalaciones y reparaciones, o alternativas de energía y respaldo. Elija por necesidad.',

        'tools_eyebrow' => 'Calculadoras gratuitas',
        'tools_title'   => 'Haga la cuenta antes de pedir presupuesto.',
        'tools_lead'    => 'Con su factura de la ANDE o la lista de sus equipos, en dos minutos.',

        'zones_eyebrow' => 'Zonas',
        'zones_title'   => 'Información por zona',
        'zones_lead'    => 'Estas páginas son referencias por ubicación. No equivalen a cobertura confirmada.',

        'unsure_title' => '¿No sabe qué necesita?',
        'unsure_text'  => 'Mándenos una foto del tablero o del problema y le decimos qué corresponde.',
    ],

    // The panel at the foot of the homepage hero. Labels only: no amounts, no
    // dates, no percentages, no client name — see partials/status-panel.php.
    'panel' => [
        'title' => 'Así llega su pedido',
        'badge' => 'WhatsApp',
        'tiles' => [
            ['label' => 'Foto o audio del problema', 'value' => 'Recibido'],
            ['label' => 'Diagnóstico y presupuesto', 'value' => 'Enviado'],
            ['label' => 'Visita del electricista',   'value' => 'Coordinada'],
        ],
        'foot'  => 'Usted aprueba antes de que vayamos',
        'note'  => 'Ejemplo de un pedido',
    ],

    // The "quiénes somos" band on the homepage. Every line here is a commitment
    // about how the business works, never a claim about size or results — those
    // need the owner's confirmation and belong in content/site.php.
    'about' => [
        'eyebrow' => 'Antes de contratar',
        'title' => 'Una buena consulta empieza con información clara.',
        'text' => 'Electricidad PY reúne temas de instalaciones, reparaciones y energía. Use las guías para ordenar sus dudas y pida a quien cotice el alcance, los materiales, la mano de obra y las condiciones por escrito.',
        'credentials' => ['Describa el problema sin abrir tableros', 'Consulte si hace falta una visita técnica', 'Confirme cobertura, costos y condiciones'],
        'badge_note' => '', 'badge_fallback' => 'Información para decidir',
    ],

    // The four-step "cómo trabajamos" block, reused on service pages.
    'process' => [
        'eyebrow' => 'Cómo preparar su consulta',
        'title' => 'Del problema a una consulta clara.',
        'steps' => [
            ['title' => 'Describa la necesidad', 'text' => 'Qué sucede, desde cuándo y qué ambientes o equipos afecta.'],
            ['title' => 'Indique la zona', 'text' => 'Ciudad y tipo de inmueble. No comparta su dirección exacta en el resumen.'],
            ['title' => 'Pida un alcance', 'text' => 'Qué se revisaría y si hace falta una visita técnica para cotizar.'],
            ['title' => 'Confirme antes de contratar', 'text' => 'Proveedor, precio, materiales, fecha y condiciones por escrito.'],
        ],
    ],

    // Rendered in place of the testimonials band while content/site.php has
    // none. Sectors, not clients: nothing to verify.
    'industries' => [
        'eyebrow' => 'Rubros',
        'title'   => 'Para su casa o su negocio',
        'lead'    => 'Una casa, un comercio y una estancia tienen problemas eléctricos distintos.',
        // Each item is either a plain string or ['label' => ..., 'path' => ...]
        // pointing at a segment page in content/segmentos.php.
        'items'   => [
            ['label' => 'Hogar', 'path' => '/segmentos/hogar/'],
            ['label' => 'Comercios y locales', 'path' => '/segmentos/comercio-y-locales/'],
            ['label' => 'Edificios y consorcios', 'path' => '/segmentos/edificios-y-consorcios/'],
            ['label' => 'Industria y depósitos', 'path' => '/segmentos/industria-y-depositos/'],
            ['label' => 'Campo y estancias', 'path' => '/segmentos/campo-y-estancias/'],
        ],
    ],

    // The band renders only when content/site.php has testimonials.
    'testimonials' => [
        'eyebrow' => 'Clientes',
        'title'   => 'Lo que dicen nuestros clientes',
    ],

    'services_hub' => [
        'eyebrow'      => 'Servicios',
        'title'        => 'Electricista y energía, en un solo lugar.',
        'lead'         => 'Encuentre el tema y los datos útiles para consultar.',
        'unsure_title' => '¿No sabe qué necesita?',
        'unsure_text'  => 'Mándenos una foto del problema y le decimos qué corresponde.',
        'unsure_cta'   => 'Escribirnos',
    ],

    'cta_band' => [
        'eyebrow' => 'El siguiente paso', 'title' => 'Prepare una consulta clara.',
        'lead' => 'Necesidad, zona y descripción. Una consulta no confirma una visita ni un precio.',
    ],

    'form' => [
        'legend'          => 'Preparar consulta',
        'name'            => 'Nombre',
        'company'         => 'Barrio (opcional)',
        'phone'           => 'WhatsApp o teléfono',
        'phone_hint'      => 'Ej.: 0981 123 456',
        'email'           => 'Correo (opcional)',
        'need'            => '¿Qué necesita?',
        'message'         => 'Cuéntenos brevemente',
        'message_hint'    => 'Qué pasa, desde cuándo y dónde (casa, local, campo)…',
        'submit'          => 'Preparar consulta',
        'sending'         => 'Enviando…',
        'privacy_note'    => 'Usamos sus datos solo para responderle. Ver la política de privacidad.',
        'success_title'   => 'Recibimos su pedido.',
        'success_text'    => 'La solicitud fue recibida. Todavía debe confirmarse el alcance y la disponibilidad.',
        'error_title'     => 'No pudimos enviar el formulario.',
        'error_text' => 'La entrega no se confirmó. Conserve su resumen; no hay una visita reservada.',
        'error_phone'     => 'Necesitamos un teléfono o WhatsApp válido para responderle.',
        'required'        => 'obligatorio',
        'thanks_next'     => 'Qué sigue',
        'thanks_whatsapp' => 'Si prefiere no esperar, escríbanos ahora por WhatsApp.',
        'remind_title'    => 'Recordatorio de mantenimiento',
        'remind_text'     => 'Le escribimos por WhatsApp cuando toque revisar el tablero, el generador o los paneles.',
        'remind_phone'    => 'Su WhatsApp',
        'remind_submit'   => 'Quiero el recordatorio',
        'remind_ok'       => 'Anotado. Le escribimos cuando toque el mantenimiento.',
    ],

    // The outage-season strip (partials/season-banner.php). Months are
    // date('n') numbers: September to March — the run-up to and the whole of
    // Paraguay's summer.
    'season' => [
        'months' => [9, 10, 11, 12, 1, 2, 3],
        'path'   => '/temporada-de-cortes/',
        'text'   => 'Temporada de cortes y bajas de tensión: prepare su casa o negocio.',
        'cta'    => 'Generador, UPS y tablero',
    ],

    // Qualifying questions of the lead form (step 1). Keys are what enviar.php
    // accepts and scores; labels are what the CRM and the email read. Adding
    // an option: add it here and, if it should move the score, in
    // lead_score() in enviar.php.
    'qualify' => [
        'urgency_legend'  => '¿Para cuándo lo necesita?',
        'urgency'         => [
            'hoy'       => 'Hoy, es urgente',
            'semana'    => 'Esta semana',
            'mes'       => 'Este mes',
            'cotizando' => 'Solo estoy cotizando',
        ],
        'property_label'  => '¿Dónde es el trabajo?',
        'property'        => [
            'casa'         => 'Casa',
            'departamento' => 'Departamento',
            'comercio'     => 'Comercio u oficina',
            'industria'    => 'Industria o depósito',
            'campo'        => 'Campo o estancia',
            'obra'         => 'Obra en construcción',
        ],
        'city_label'      => 'Ciudad',
        'city_other'      => 'Otra ciudad',
        'choose'          => 'Elegir…',
        'next'            => 'Siguiente: sus datos',
        'back'            => 'Volver',
        'step1'           => 'Paso 1 de 2 · Su trabajo',
        'step2'           => 'Paso 2 de 2 · Sus datos',
    ],

    // The chip selector in the lead form. Every key here needs a matching entry
    // in content/lead-values.php's 'needs' — verify.sh checks that.
    'needs' => [
        'emergencia'  => 'Falla o corte ahora',
        'instalacion' => 'Instalación o reforma',
        'tablero'     => 'Tablero o disyuntores',
        'aire'        => 'Aire acondicionado',
        'solar'       => 'Paneles solares',
        'generador'   => 'Generador o UPS',
        'otro'        => 'Otro',
    ],

    'contact' => [
        'eyebrow' => 'Su consulta', 'title' => 'Cuéntenos qué necesita.',
        'lead' => 'Consulte por WhatsApp con el tema y la zona. El formulario web todavía no recibe solicitudes: aquí puede preparar un resumen sin enviarlo.',
        'address' => 'Dirección', 'hours' => 'Horario', 'phone' => 'Teléfono', 'email' => 'Correo', 'expect' => 'Qué debe quedar claro',
        'steps' => ['Quién recibirá la consulta y si cubre su zona.', 'Si necesita una visita técnica y qué costo tendría.', 'El alcance y las condiciones antes de aprobar cualquier trabajo.'],
    ],

    'service' => [
        'includes'     => 'Alcance a consultar',
        'excludes'     => 'Qué no incluye',
        'we_need'      => 'Datos útiles para consultar',
        'benefits'     => 'Beneficios',
        'faq'          => 'Preguntas frecuentes',
        'related'      => 'Servicios relacionados',
        'guides'       => 'Guía relacionada',
        'articles'     => 'Artículo relacionado',
        'form_eyebrow' => 'Presupuesto',
        'form_lead' => 'Indique necesidad, zona y descripción. La disponibilidad y las condiciones deben confirmarse.',
        'breadcrumb'   => 'Ruta de navegación',
    ],

    // Segment landing pages (content/segmentos.php).
    'segment' => [
        'traps_title'  => 'Los problemas que más vemos',
        'bundle_title' => 'Encuentre el tema de su consulta para usted',
        'other_zones'  => 'Otras zonas de referencia',
        'form_eyebrow' => 'Prepare su consulta',
        'form_lead'    => 'Cuéntenos qué necesita y dónde; le respondemos por WhatsApp con un presupuesto.',
    ],

    // Shared microcopy across the tool pages. Calculator-specific labels live in
    // each tool's own PHP/JS; only the repeated strings are here.
    'tools' => [
        'reviewed_prefix' => 'Datos revisados el',
        'orientativo'     => 'Los resultados son orientativos y no reemplazan el dimensionamiento de un profesional en el lugar.',
        'calculate'       => 'Calcular',
        'result_title'    => 'Resultado',
        'use_result'      => 'Usar este resultado en el formulario',
        'need_js'         => 'Esta calculadora necesita JavaScript activado en su navegador.',
        'restart'         => 'Volver a empezar',
    ],

    // Shared microcopy across the guide pages.
    'guide' => [
        'reviewed_prefix'       => 'Revisado el',
        'orientativo'           => 'Es una guía general. La electricidad es peligrosa: ante la duda, no toque y consúltenos.',
        'delegate_eyebrow'      => 'Que lo haga un electricista',
        'delegate_title'        => 'Prepare una consulta sobre este tema',
        'delegate_lead' => 'Prepare el tema y su zona para consultar con un profesional.',
        'delegate_form_heading' => 'Preparar consulta',
        'related'               => 'Otras guías',
    ],

    // Article chrome (templates/article.php). The long date itself is formatted
    // by the market module's fmt_date_long().
    'article' => [
        'reading_time' => 'min de lectura',
        'updated'      => 'Actualizado el',
        'read_more'    => 'Leer el artículo',
    ],

    // Hub pages: the listings under /servicios/, /blog/, /herramientas/, /guias/.
    'hub' => [
        'empty' => 'Todavía no hay nada publicado en esta sección.',
    ],

    'pricing' => [
        'quote'    => 'A cotizar',
        'per_month' => 'por mes',
        'cta'      => 'Preparar consulta',
        'note'     => 'Cada trabajo se cotiza por escrito antes de empezar; usted aprueba antes de que vayamos.',
    ],

    'placeholder' => [
        // Shown on a stub page until the phase that owns it writes the content.
        'notice' => 'Estamos preparando esta página.',
        'action' => 'Mientras tanto, escríbanos y le respondemos por WhatsApp.',
    ],

    'error404' => [
        'title' => 'No encontramos esta página',
        'lead'  => 'Puede que el enlace haya cambiado. Estas son las secciones más buscadas.',
    ],

    'footer' => [
        'blurb'   => 'Orientación sobre electricidad y energía en Paraguay. Guías y calculadoras para preparar su consulta.',
        'rights'  => 'Todos los derechos reservados.',
        'contact' => 'Contacto',
    ],
];
