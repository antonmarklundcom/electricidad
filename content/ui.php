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
        'electricista' => 'Instalaciones, reparaciones y mantenimiento, con presupuesto por WhatsApp antes de la visita.',
        'energia'      => 'Paneles solares, generadores, UPS y baterías: dimensionados para su consumo real e instalados.',
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
        'all_services' => 'Ver todos los servicios',
    ],

    'cta' => [
        'quote'         => 'Pedir presupuesto',
        'whatsapp'      => 'WhatsApp',
        'whatsapp_long' => 'Escribir por WhatsApp',
        'consult'       => 'Pedir presupuesto',
        'contact'       => 'Contactar',
        'see_included'  => 'Ver qué incluye',
        'talk'          => 'Contarnos el problema',
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
        'h1_accent' => 'presupuesto por WhatsApp, visita hoy mismo.',
        'lead'      => 'Nos manda una foto o un audio del problema, le decimos qué hay que hacer y '
                     . 'cuánto cuesta antes de ir. Y si ya se cansó de los cortes, le dimensionamos '
                     . 'paneles solares, generador o UPS para su consumo real.',
        'trust'     => [
            'Presupuesto antes de la visita',
            'Materiales y mano de obra por separado',
            'Trabajo con garantía por escrito',
        ],

        'tracks_eyebrow' => 'Dos formas de ayudarle',
        'tracks_title'   => 'Lo que se arregla hoy y lo que le evita el próximo corte.',
        'track_electricista_title' => 'Electricista',
        'track_electricista_text'  => 'Fallas, cortocircuitos, tableros, aire acondicionado e instalaciones nuevas.',
        'track_energia_title'      => 'Energía y respaldo',
        'track_energia_text'       => 'Paneles solares, generadores, UPS y baterías, dimensionados e instalados.',
        'track_all'                => 'Ver todo',

        'services_eyebrow' => 'Servicios',
        'services_title'   => 'Lo que hacemos',
        'services_lead'    => 'Desde un disyuntor que salta hasta un sistema solar completo.',

        'tools_eyebrow' => 'Calculadoras gratuitas',
        'tools_title'   => 'Haga la cuenta antes de pedir presupuesto.',
        'tools_lead'    => 'Con su factura de la ANDE o la lista de sus equipos, en dos minutos.',

        'zones_eyebrow' => 'Zonas',
        'zones_title'   => 'Dónde trabajamos',
        'zones_lead'    => 'Asunción y las ciudades de Central. Para el interior, consúltenos por WhatsApp.',

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
        'eyebrow' => 'Quiénes somos',
        'title'   => 'Sin sorpresas en el precio ni en la instalación.',
        'text'    => 'La mayoría de los problemas eléctricos se pueden diagnosticar con una foto del '
                   . 'tablero y dos preguntas. Por eso cotizamos antes de ir, separamos materiales '
                   . 'de mano de obra y le dejamos por escrito qué se hizo y con qué garantía.',
        // Shown while content/site.php has no credentials[] of its own.
        'credentials' => [
            'Presupuesto por WhatsApp antes de la visita',
            'Materiales y mano de obra detallados por separado',
            'Informe escrito de lo que se hizo, con garantía',
        ],
        'badge_note'     => 'de experiencia',
        'badge_fallback' => 'Equipo propio',
    ],

    // The four-step "cómo trabajamos" block, reused on service pages.
    'process' => [
        'eyebrow' => 'Cómo trabajamos',
        'title'   => 'Del mensaje de WhatsApp al trabajo terminado, sin sorpresas.',
        'steps'   => [
            [
                'title' => 'Nos cuenta el problema',
                'text'  => 'Por WhatsApp o el formulario, con una foto o un audio si puede.',
            ],
            [
                'title' => 'Presupuesto antes de ir',
                'text'  => 'Le decimos qué hay que hacer y un rango de precio, o qué hace falta ver en el lugar.',
            ],
            [
                'title' => 'Visita coordinada',
                'text'  => 'Un electricista va en el horario acordado, con los materiales del presupuesto.',
            ],
            [
                'title' => 'Trabajo con garantía',
                'text'  => 'Le dejamos por escrito qué se hizo, qué se cambió y la garantía.',
            ],
        ],
    ],

    // Rendered in place of the testimonials band while content/site.php has
    // none. Sectors, not clients: nothing to verify.
    'industries' => [
        'eyebrow' => 'Rubros',
        'title'   => 'Para su casa, su local o su campo',
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
        'lead'         => 'Lo que se arregla hoy y lo que le evita el próximo corte.',
        'unsure_title' => '¿No sabe qué necesita?',
        'unsure_text'  => 'Mándenos una foto del problema y le decimos qué corresponde.',
        'unsure_cta'   => 'Escribirnos',
    ],

    'cta_band' => [
        'eyebrow' => 'Presupuesto sin cargo',
        'title'   => 'Cuéntenos el problema y le cotizamos antes de ir.',
        'lead'    => 'Por WhatsApp, con una foto si puede. Sin costo y sin compromiso.',
    ],

    'form' => [
        'legend'          => 'Pedir presupuesto',
        'name'            => 'Nombre',
        'company'         => 'Barrio (opcional)',
        'phone'           => 'WhatsApp o teléfono',
        'phone_hint'      => 'Ej.: 0981 123 456',
        'email'           => 'Correo (opcional)',
        'need'            => '¿Qué necesita?',
        'message'         => 'Cuéntenos brevemente',
        'message_hint'    => 'Qué pasa, desde cuándo y dónde (casa, local, campo)…',
        'submit'          => 'Pedir presupuesto',
        'sending'         => 'Enviando…',
        'privacy_note'    => 'Usamos sus datos solo para responderle. Ver la política de privacidad.',
        'success_title'   => 'Recibimos su pedido.',
        'success_text'    => 'Le escribimos por WhatsApp a la brevedad. Si es urgente, escríbanos ahora.',
        'error_title'     => 'No pudimos enviar el formulario.',
        'error_text'      => 'Vuelva a intentarlo en un momento o escríbanos directamente.',
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
        'eyebrow' => 'Contacto',
        'title'   => 'Cuéntenos qué pasa.',
        'lead'    => 'Escríbanos por WhatsApp con una foto o un audio, o déjenos sus datos y le '
                   . 'respondemos con un presupuesto.',
        'address' => 'Dirección',
        'hours'   => 'Horario',
        'phone'   => 'Teléfono',
        'email'   => 'Correo',
        'expect'  => 'Qué pasa después',
        'steps'   => [
            'Le respondemos por WhatsApp con las preguntas justas o un presupuesto.',
            'Si hace falta ver el lugar, coordinamos la visita en el horario que le quede bien.',
            'Usted aprueba el presupuesto antes de que empecemos.',
        ],
    ],

    'service' => [
        'includes'     => 'Qué incluye',
        'excludes'     => 'Qué no incluye',
        'we_need'      => 'Qué necesitamos de usted',
        'benefits'     => 'Beneficios',
        'faq'          => 'Preguntas frecuentes',
        'related'      => 'Servicios relacionados',
        'guides'       => 'Guía relacionada',
        'articles'     => 'Artículo relacionado',
        'form_eyebrow' => 'Presupuesto',
        'form_lead'    => 'Déjenos sus datos y le respondemos por WhatsApp con un presupuesto, '
                        . 'sin costo y sin compromiso.',
        'breadcrumb'   => 'Ruta de navegación',
    ],

    // Segment landing pages (content/segmentos.php).
    'segment' => [
        'traps_title'  => 'Los problemas que más vemos',
        'bundle_title' => 'Lo que hacemos para usted',
        'other_zones'  => 'Otras zonas donde trabajamos',
        'form_eyebrow' => 'Presupuesto sin cargo',
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
        'delegate_title'        => '¿Prefiere que nos encarguemos?',
        'delegate_lead'         => 'Mándenos una foto por WhatsApp y le cotizamos antes de ir.',
        'delegate_form_heading' => 'Pedir presupuesto',
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
        'cta'      => 'Pedir presupuesto',
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
        'blurb'   => 'Electricistas en Asunción y Central, y soluciones de energía solar, generadores y UPS para todo Paraguay.',
        'rights'  => 'Todos los derechos reservados.',
        'contact' => 'Contacto',
    ],
];
