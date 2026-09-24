<?php
/**
 * The how-to guides under /guias/, keyed by slug — same shape discipline as
 * content/services.php and content/tools.php.
 *
 * Why this content type exists: a how-to query ("cómo se hace X") is answered
 * only partly by a service page. A guide answers it in full, then offers the
 * "¿prefiere que lo hagamos nosotros?" box to hand the task over — which is why
 * every guide names a relatedService.
 *
 *   path             string   URL, trailing slash
 *   title            string   the guide's concept, used as the title fallback
 *   navLabel         string   short label for the hub, the nav and the footer
 *   seoTitle         string   <title> without the site suffix, <= 41 chars
 *   metaDescription  string   120–155 chars, unique across the whole site
 *   lastReviewed     string   ISO date, shown next to the "orientativo" note
 *   hero             array    eyebrow, h1, lead
 *   intro            string[] 2–3 paragraphs read before the numbered steps
 *   steps            array    [['title' => ..., 'body' => string[]], ...] →
 *                             both the visible numbered list and the HowTo
 *                             JSON-LD (templates/guide.php builds both from
 *                             this one array)
 *   faq              array    [['q' => ..., 'a' => ...], ...] → FAQPage JSON-LD
 *   relatedService   ?string  slug into content/services.php AND
 *                             content/lead-values.php — the delegate box's form,
 *                             WhatsApp prefill and next-step text all resolve
 *                             from this one slug
 *   toolLink         ?array   ['path' => ..., 'label' => ..., 'text' => ...]
 *   related          string[] 2–3 sibling guide slugs
 *   example          bool     seed record only — see content/services.php
 */

declare(strict_types=1);

return [

    'que-hacer-cuando-se-corta-la-luz' => [
        'path'            => '/guias/que-hacer-cuando-se-corta-la-luz/',
        'title'           => 'Qué hacer cuando se corta la luz',
        'navLabel'        => 'Qué hacer si se corta la luz',
        'seoTitle'        => 'Qué hacer si se corta la luz',
        'metaDescription' => 'Qué revisar cuando se corta la luz en su casa antes de llamar: llave '
                           . 'general, disyuntor, vecinos, y cuándo el corte es de la ANDE y no suyo.',
        'lastReviewed'    => '2026-09-24',
        'hero' => [
            'eyebrow' => 'Guías',
            'h1'      => '¿Qué hacer cuando se corta la luz?',
            'lead'    => 'Los pasos para saber si el corte es suyo o de la ANDE, y qué hacer mientras '
                       . 'se resuelve.',
        ],
        'intro' => [
            'Un corte de luz puede tener dos orígenes muy distintos: un problema dentro de la casa '
                . '(un disyuntor que saltó, una llave térmica que se disparó) o un corte de la red de '
                . 'la ANDE que afecta a toda la cuadra. Distinguir uno de otro en los primeros minutos '
                . 'evita llamadas innecesarias y ayuda a explicar el problema con precisión si hace '
                . 'falta un electricista.',
            'Esta guía cubre lo que una persona sin formación eléctrica puede observar y hacer con '
                . 'seguridad. No incluye abrir el tablero ni tocar cables: eso queda para quien tiene '
                . 'la formación y el equipo de protección para hacerlo.',
        ],
        'steps' => [
            [
                'title' => 'Mire si el corte es solo suyo o de toda la cuadra',
                'body'  => ['Salga y observe si las casas vecinas también están sin luz. Si todo el '
                    . 'barrio está a oscuras, el corte es de la red de la ANDE y no hay nada que '
                    . 'revisar en su instalación: solo esperar o reportarlo a la ANDE.'],
            ],
            [
                'title' => 'Revise el medidor y la acometida',
                'body'  => ['Si sus vecinos tienen luz y usted no, mire el medidor de la ANDE desde '
                    . 'afuera. Si el medidor no muestra actividad ni luces encendidas, el corte puede '
                    . 'estar antes de su tablero, del lado de la ANDE.'],
            ],
            [
                'title' => 'Mire el tablero sin tocar los conductores',
                'body'  => ['Observe desde afuera del tablero si alguna llave está en posición '
                    . 'distinta a las demás, hacia abajo o al medio. Eso suele indicar que un '
                    . 'disyuntor o una llave térmica se disparó. No abra el gabinete ni toque nada '
                    . 'dentro de él.'],
            ],
            [
                'title' => 'Identifique si hubo un evento antes del corte',
                'body'  => ['Piense si justo antes del corte encendió un equipo de aire acondicionado, '
                    . 'un horno o algo con motor, o si hubo una tormenta. Esa información ayuda mucho '
                    . 'a quien venga a revisar la instalación.'],
            ],
            [
                'title' => 'Desconecte los equipos sensibles',
                'body'  => ['Mientras se resuelve el corte, desenchufe heladera, computadoras y '
                    . 'televisores. Así evita daños si la luz vuelve con una fluctuación de tensión.'],
            ],
            [
                'title' => 'Decida si es un corte de la ANDE o de su instalación',
                'body'  => ['Si solo su casa está sin luz y ve una llave disparada en el tablero, el '
                    . 'problema es interno. Si toda la cuadra está sin luz, es un corte de la ANDE y '
                    . 'conviene reportarlo por sus canales.'],
            ],
            [
                'title' => 'Llame a un electricista si el corte es interno y se repite',
                'body'  => ['Una llave que salta una vez puede ser una sobrecarga puntual. Si vuelve '
                    . 'a saltar al reponerla, o si nota olor a quemado o chispas, corte la llave '
                    . 'general y llame a un electricista antes de volver a intentarlo.'],
            ],
            [
                'title' => 'Considere un respaldo si los cortes son frecuentes',
                'body'  => ['Si en su zona los cortes de la ANDE son habituales, especialmente en '
                    . 'verano, un generador o un sistema de baterías reduce el impacto mientras se '
                    . 'restablece el servicio.'],
            ],
        ],
        'faq' => [
            [
                'q' => '¿Cómo sé si el corte es de la ANDE y no de mi casa?',
                'a' => 'Si las casas vecinas también están sin luz, el corte es de la red y no de su '
                    . 'instalación interna.',
            ],
            [
                'q' => '¿Puedo subir yo mismo la llave del disyuntor?',
                'a' => 'Reponer una llave térmica que se disparó es un gesto simple, pero si vuelve a '
                    . 'saltar de inmediato, no siga intentando: llame a un electricista.',
            ],
            [
                'q' => '¿Es peligroso quedarse sin luz por unas horas?',
                'a' => 'No en sí mismo, pero conviene desconectar equipos sensibles por si la luz '
                    . 'vuelve con una fluctuación de tensión.',
            ],
            [
                'q' => '¿Qué hago si el corte se repite seguido en mi casa?',
                'a' => 'Un disyuntor que salta varias veces indica una sobrecarga o una falla que '
                    . 'conviene que revise un electricista antes de que empeore.',
            ],
        ],
        'relatedService' => 'electricista-24-horas',
        'toolLink' => [
            'path'  => '/herramientas/que-generador-necesito/',
            'label' => 'Calcule qué generador necesita',
            'text'  => 'Si los cortes en su zona son frecuentes, la calculadora estima el generador '
                    . 'según los equipos que quiere mantener andando.',
        ],
        'related' => ['por-que-salta-el-disyuntor', 'senales-de-una-instalacion-electrica-peligrosa', 'como-elegir-un-generador'],
    ],

    'por-que-salta-el-disyuntor' => [
        'path'            => '/guias/por-que-salta-el-disyuntor/',
        'title'           => 'Por qué salta el disyuntor',
        'navLabel'        => 'Por qué salta el disyuntor',
        'seoTitle'        => 'Por qué salta el disyuntor',
        'metaDescription' => 'Las causas más comunes de que un disyuntor o llave térmica salte '
                           . 'repetidamente en casa, qué puede observar con seguridad y cuándo llamar '
                           . 'a un electricista.',
        'lastReviewed'    => '2026-09-24',
        'hero' => [
            'eyebrow' => 'Guías',
            'h1'      => '¿Por qué salta el disyuntor?',
            'lead'    => 'Las causas más frecuentes, en términos simples, y qué hacer si vuelve a '
                       . 'pasar apenas repone la llave.',
        ],
        'intro' => [
            'El disyuntor (llave termomagnética) corta la corriente cuando detecta más carga de la '
                . 'que el circuito soporta, y el diferencial (DDR) lo hace cuando detecta una fuga de '
                . 'corriente hacia tierra. Que salte una vez, de forma aislada, no siempre es grave. '
                . 'Que salte seguido, o apenas se repone, sí es una señal de que algo en la instalación '
                . 'necesita revisión.',
            'Esta guía explica las causas típicas para que pueda describir el problema con precisión '
                . 'al llamar a un electricista. No incluye instrucciones para abrir el tablero: eso es '
                . 'trabajo de un profesional, porque dentro hay conductores con tensión.',
        ],
        'steps' => [
            [
                'title' => 'Identifique qué llave salta',
                'body'  => ['Mire el tablero desde afuera y note cuál llave quedó en posición '
                    . 'disparada. Si el tablero está rotulado, eso le dice qué circuito se cortó '
                    . '(cocina, aire acondicionado, tomas, etc.), un dato clave para el electricista.'],
            ],
            [
                'title' => 'Piense en sobrecarga de circuito',
                'body'  => ['La causa más común es simple: demasiados equipos conectados al mismo '
                    . 'circuito, sobre todo con aire acondicionado, horno o plancha juntos. La llave '
                    . 'corta para evitar que el cable se caliente de más.'],
            ],
            [
                'title' => 'Considere un cortocircuito puntual',
                'body'  => ['Si la llave salta apenas enciende un equipo específico, ese equipo o su '
                    . 'cable puede tener una falla interna. Desconéctelo y no vuelva a usarlo hasta '
                    . 'que lo revisen.'],
            ],
            [
                'title' => 'Considere una fuga a tierra',
                'body'  => ['Si el que salta es el diferencial (DDR) y no una llave térmica '
                    . 'individual, suele indicar una fuga de corriente hacia tierra, por humedad en un '
                    . 'tomacorriente, un artefacto dañado o un cable deteriorado.'],
            ],
            [
                'title' => 'Descarte el clima como factor',
                'body'  => ['En días de mucho calor, el uso simultáneo de varios equipos de aire '
                    . 'acondicionado es una causa frecuente de disyuntores que saltan, especialmente '
                    . 'en instalaciones antiguas dimensionadas para menos carga.'],
            ],
            [
                'title' => 'No insista en reponer la llave varias veces',
                'body'  => ['Si al reponerla vuelve a saltar de inmediato, no siga intentando. Insistir '
                    . 'puede agravar una falla existente. Deje la llave general encendida solo si el '
                    . 'resto de la casa funciona bien, y llame a un electricista.'],
            ],
            [
                'title' => 'Anote cuándo y con qué equipos pasa',
                'body'  => ['Registre la hora, qué equipos estaban encendidos y si hubo lluvia o '
                    . 'tormenta. Ese patrón le sirve al electricista para encontrar la causa más '
                    . 'rápido cuando revise la instalación.'],
            ],
        ],
        'faq' => [
            [
                'q' => '¿Es normal que el disyuntor salte de vez en cuando?',
                'a' => 'Una vez, con muchos equipos encendidos a la vez, puede ser una sobrecarga '
                    . 'puntual. Si se repite seguido, no es normal y conviene revisarlo.',
            ],
            [
                'q' => '¿Puedo abrir el tablero para ver qué pasa?',
                'a' => 'No. Dentro del tablero hay conductores con tensión; revisarlo es trabajo de un '
                    . 'electricista con las herramientas y la protección adecuadas.',
            ],
            [
                'q' => '¿Qué diferencia hay entre el disyuntor y el diferencial?',
                'a' => 'El disyuntor termomagnético corta por sobrecarga o cortocircuito; el '
                    . 'diferencial (DDR) corta cuando detecta una fuga de corriente hacia tierra.',
            ],
            [
                'q' => '¿Puede dañar mis equipos que el disyuntor siga saltando?',
                'a' => 'El corte en sí protege los equipos, pero la causa de fondo (una fuga o un '
                    . 'cable dañado) puede empeorar si no se revisa a tiempo.',
            ],
        ],
        'relatedService' => 'tablero-electrico-disyuntores',
        'toolLink' => null,
        'related' => ['senales-de-una-instalacion-electrica-peligrosa', 'que-hacer-cuando-se-corta-la-luz', 'como-pedir-aumento-de-carga-ande'],
    ],

    'senales-de-una-instalacion-electrica-peligrosa' => [
        'path'            => '/guias/senales-de-una-instalacion-electrica-peligrosa/',
        'title'           => 'Señales de una instalación eléctrica peligrosa',
        'navLabel'        => 'Señales de instalación peligrosa',
        'seoTitle'        => 'Señales de instalación peligrosa',
        'metaDescription' => 'Señales de instalación eléctrica de riesgo: olor a quemado, tomas '
                           . 'calientes, parpadeo de luces, chispas y cuándo llamar de inmediato a un '
                           . 'electricista.',
        'lastReviewed'    => '2026-09-24',
        'hero' => [
            'eyebrow' => 'Guías',
            'h1'      => '¿Cuáles son las señales de una instalación eléctrica peligrosa?',
            'lead'    => 'Lo que puede notar sin abrir nada, y cuál de esas señales exige cortar la '
                       . 'llave general y llamar de inmediato.',
        ],
        'intro' => [
            'La mayoría de los incendios de origen eléctrico no aparecen de la nada: la instalación '
                . 'suele dar señales antes, como olor a quemado, tomacorrientes calientes o luces que '
                . 'parpadean sin motivo. Reconocer esas señales a tiempo es lo que está al alcance de '
                . 'cualquier persona, sin necesidad de conocimientos técnicos.',
            'Esta guía enumera esas señales y qué hacer frente a cada una. Ninguna de las acciones '
                . 'recomendadas incluye abrir el tablero o manipular cables: eso es trabajo de un '
                . 'electricista, porque exponerse a un conductor con tensión puede ser grave.',
        ],
        'steps' => [
            [
                'title' => 'Preste atención a cualquier olor a quemado',
                'body'  => ['Un olor a plástico quemado sin origen visible, cerca de un tomacorriente '
                    . 'o del tablero, es una señal seria. Corte la llave general del sector afectado si '
                    . 'puede hacerlo sin tocar nada más, y llame a un electricista de inmediato.'],
            ],
            [
                'title' => 'Toque con cuidado las placas de los tomacorrientes',
                'body'  => ['Una placa o un enchufe que está notablemente caliente al tacto, sin que '
                    . 'el equipo conectado lo justifique, indica una mala conexión o sobrecarga en ese '
                    . 'punto. Deje de usar ese toma hasta que lo revisen.'],
            ],
            [
                'title' => 'Observe si las luces parpadean sin motivo',
                'body'  => ['Un parpadeo ocasional al encender un equipo grande puede ser normal. Un '
                    . 'parpadeo constante o en toda la casa, sin relación con ningún equipo, suele '
                    . 'indicar un problema en la conexión general o en la acometida.'],
            ],
            [
                'title' => 'Note cualquier chispa al enchufar o desenchufar',
                'body'  => ['Una chispa pequeña al conectar un equipo grande puede pasar. Chispas '
                    . 'frecuentes, visibles o con ruido en cualquier toma no son normales: desconecte '
                    . 'ese circuito desde el tablero si puede hacerlo con la llave, sin tocar el toma.'],
            ],
            [
                'title' => 'Revise cables visibles, no los que están dentro de paredes',
                'body'  => ['Si hay cables a la vista (extensiones, cableado exterior, conexiones '
                    . 'provisorias), observe si están pelados, quebradizos o con cinta aislante '
                    . 'vieja. No los manipule: es señal de que necesitan reemplazo profesional.'],
            ],
            [
                'title' => 'Note si el tablero está caliente o hace ruido',
                'body'  => ['Un tablero que se siente caliente al acercar la mano sin tocarlo, o que '
                    . 'hace un zumbido audible, es una señal de alerta. No lo abra: aléjese y llame a '
                    . 'un electricista.'],
            ],
            [
                'title' => 'Considere la antigüedad de la instalación',
                'body'  => ['Instalaciones con más de 20 o 25 años, sin reformas ni ampliaciones, '
                    . 'suelen estar dimensionadas para una carga menor a la actual (aires '
                    . 'acondicionados, más equipos). Vale la pena una revisión preventiva aunque no '
                    . 'haya señales evidentes.'],
            ],
        ],
        'faq' => [
            [
                'q' => '¿Qué señal es la más urgente?',
                'a' => 'Olor a quemado sin origen visible, o un tablero caliente o con ruido: en '
                    . 'ambos casos corte la llave general si puede hacerlo con seguridad y llame de '
                    . 'inmediato.',
            ],
            [
                'q' => '¿Puedo revisar yo mismo el cableado dentro de las paredes?',
                'a' => 'No. El cableado dentro de paredes y el interior del tablero solo debe '
                    . 'manipularlo un electricista, por el riesgo de contacto con conductores.',
            ],
            [
                'q' => '¿Un parpadeo ocasional de luces ya es grave?',
                'a' => 'No necesariamente. Un parpadeo puntual al encender un equipo grande puede ser '
                    . 'normal; el que es constante o afecta toda la casa sí conviene revisarlo.',
            ],
            [
                'q' => '¿Con qué frecuencia conviene revisar una instalación sin señales de alerta?',
                'a' => 'No hay una frecuencia única válida para todos los casos; en instalaciones '
                    . 'antiguas o con más carga que antes, una revisión preventiva es razonable.',
            ],
        ],
        'relatedService' => 'mantenimiento-electrico',
        'toolLink'       => null,
        'related' => ['por-que-salta-el-disyuntor', 'que-hacer-cuando-se-corta-la-luz', 'como-pedir-aumento-de-carga-ande'],
    ],

    'como-leer-la-factura-de-ande' => [
        'path'            => '/guias/como-leer-la-factura-de-ande/',
        'title'           => 'Cómo leer la factura de la ANDE',
        'navLabel'        => 'Cómo leer la factura de la ANDE',
        'seoTitle'        => 'Cómo leer la factura de la ANDE',
        'metaDescription' => 'Qué significa cada dato de la factura de la ANDE: NIS, período, lectura '
                           . 'anterior y actual, consumo en kWh, cargos e IVA, explicado campo por '
                           . 'campo.',
        'lastReviewed'    => '2026-09-24',
        'hero' => [
            'eyebrow' => 'Guías',
            'h1'      => '¿Cómo se lee la factura de la ANDE?',
            'lead'    => 'Qué significa cada campo de la factura, para entender de dónde sale el '
                       . 'monto que paga cada mes.',
        ],
        'intro' => [
            'La factura de la ANDE tiene varios campos que, una vez que se entienden, permiten '
                . 'seguir el consumo mes a mes y detectar cambios llamativos. Esta guía explica qué es '
                . 'cada dato, sin entrar en tarifas ni montos específicos, porque esos valores cambian '
                . 'y conviene consultarlos siempre en la propia factura o directamente con la ANDE.',
            'Entender la factura también ayuda a decidir si vale la pena un cambio de categoría, un '
                . 'aumento de carga o una inversión como paneles solares: todo parte de saber leer el '
                . 'consumo real en kWh.',
        ],
        'steps' => [
            [
                'title' => 'Ubique el NIS',
                'body'  => ['El NIS (Número de Identificación del Suministro) identifica de forma '
                    . 'única su medidor y su cuenta ante la ANDE. Lo va a necesitar para cualquier '
                    . 'trámite, reclamo o consulta en línea.'],
            ],
            [
                'title' => 'Identifique el período de facturación',
                'body'  => ['Marca las fechas de inicio y fin del ciclo que se está cobrando. Sirve '
                    . 'para comparar consumos entre meses de forma justa, sobre todo si algún período '
                    . 'fue más largo o más corto que lo habitual.'],
            ],
            [
                'title' => 'Compare lectura anterior y lectura actual',
                'body'  => ['Son los valores que marcó el medidor al inicio y al final del período. '
                    . 'La diferencia entre ambos es, en términos simples, la base del consumo '
                    . 'facturado.'],
            ],
            [
                'title' => 'Ubique el consumo en kWh',
                'body'  => ['Es el dato central de la factura: cuánta energía consumió la vivienda en '
                    . 'el período, expresado en kilovatios-hora. Es el número que conviene anotar mes a '
                    . 'mes para ver tendencias.'],
            ],
            [
                'title' => 'Revise los cargos que componen el monto',
                'body'  => ['La factura suma distintos cargos además del consumo (cargo fijo, '
                    . 'energía, y otros conceptos según la categoría del suministro). Los montos '
                    . 'exactos de cada cargo son los que fija la ANDE, así que consulte el detalle '
                    . 'vigente directamente en su factura o con la ANDE.'],
            ],
            [
                'title' => 'Ubique el IVA aplicado',
                'body'  => ['El impuesto se calcula sobre el subtotal de cargos y aparece como línea '
                    . 'separada antes del total a pagar.'],
            ],
            [
                'title' => 'Compare el consumo con el mes anterior o el mismo mes del año pasado',
                'body'  => ['Un salto grande en kWh sin un cambio de hábitos (equipo nuevo, más '
                    . 'personas en casa) puede indicar una fuga de consumo o un equipo defectuoso, y '
                    . 'vale la pena investigarlo.'],
            ],
        ],
        'faq' => [
            [
                'q' => '¿Dónde encuentro el NIS en mi factura?',
                'a' => 'Está impreso en la parte superior de la factura, junto a los demás datos de '
                    . 'identificación de la cuenta.',
            ],
            [
                'q' => '¿Por qué mi consumo en kWh varía tanto entre meses?',
                'a' => 'El uso de aire acondicionado en verano suele ser el factor que más hace '
                    . 'variar el consumo mes a mes en una vivienda.',
            ],
            [
                'q' => '¿Cuánto voy a pagar según mi consumo?',
                'a' => 'Los montos por kWh y los cargos fijos los define la ANDE y pueden cambiar; '
                    . 'consulte el monto vigente directamente en su factura o con la ANDE.',
            ],
            [
                'q' => '¿Sirve la factura para saber si me conviene instalar paneles solares?',
                'a' => 'Sí: el consumo en kWh de varios meses es el dato de partida para dimensionar '
                    . 'un sistema solar o calcular cuánto podría reducir de la factura.',
            ],
        ],
        'relatedService' => 'medidor-ande-tramites',
        'toolLink' => [
            'path'  => '/herramientas/consumo-electrico/',
            'label' => 'Estime su consumo mensual',
            'text'  => 'Cargue sus equipos y la calculadora estima el consumo en kWh y una '
                    . 'referencia del monto de la factura.',
        ],
        'related' => ['como-pedir-aumento-de-carga-ande', 'cuanto-cuesta-instalar-paneles-solares-en-paraguay', 'autogeneracion-ley-7599-que-cambia'],
    ],

    'como-pedir-aumento-de-carga-ande' => [
        'path'            => '/guias/como-pedir-aumento-de-carga-ande/',
        'title'           => 'Cómo pedir un aumento de carga a la ANDE',
        'navLabel'        => 'Aumento de carga en la ANDE',
        'seoTitle'        => 'Cómo pedir aumento de carga ANDE',
        'metaDescription' => 'Cómo se gestiona un aumento de carga o un cambio a trifásica ante la '
                           . 'ANDE: qué se presenta, quién hace la declaración técnica y qué preguntar '
                           . 'antes.',
        'lastReviewed'    => '2026-09-24',
        'hero' => [
            'eyebrow' => 'Guías',
            'h1'      => '¿Cómo se pide un aumento de carga a la ANDE?',
            'lead'    => 'Qué es un aumento de carga, cuándo se necesita y cómo se encara el trámite '
                       . 'ante la ANDE.',
        ],
        'intro' => [
            'Un aumento de carga se pide cuando la instalación de una vivienda o un local va a '
                . 'consumir más potencia que la contratada originalmente: por ejemplo, al sumar varios '
                . 'equipos de aire acondicionado, un taller con maquinaria, o al pasar de suministro '
                . 'monofásico a trifásico. La ANDE necesita esa información actualizada para que la '
                . 'red y el medidor estén dimensionados correctamente.',
            'El trámite se gestiona ante la ANDE con el NIS del suministro y una declaración técnica '
                . 'de la carga a instalar, que debe preparar un profesional habilitado. Los requisitos '
                . 'exactos, la documentación puntual y los costos del trámite los define la ANDE y '
                . 'pueden variar, así que conviene consultarlos directamente con ellos antes de '
                . 'empezar.',
        ],
        'steps' => [
            [
                'title' => 'Determine si realmente necesita un aumento de carga',
                'body'  => ['Si va a sumar equipos de peso (aire acondicionado central, un taller, '
                    . 'un horno industrial) o a pasar a trifásica, es probable que la carga contratada '
                    . 'actual no alcance. Un electricista puede estimar la carga total necesaria.'],
            ],
            [
                'title' => 'Reúna el NIS y los datos del suministro',
                'body'  => ['El NIS identifica su cuenta ante la ANDE y es el primer dato que va a '
                    . 'pedir cualquier trámite relacionado con el suministro.'],
            ],
            [
                'title' => 'Encargue la declaración técnica de carga a un profesional',
                'body'  => ['La ANDE exige que un profesional habilitado calcule y declare la carga '
                    . 'total de la instalación (en kVA) según los equipos a conectar. No es un cálculo '
                    . 'que convenga estimar por cuenta propia para presentarlo formalmente.'],
            ],
            [
                'title' => 'Confirme si el caso implica pasar a trifásica',
                'body'  => ['Un aumento de carga grande, sobre todo con motores o maquinaria, suele '
                    . 'requerir un suministro trifásico en vez de monofásico. Eso cambia la conexión y '
                    . 'posiblemente el medidor, y es parte de lo que evalúa el profesional.'],
            ],
            [
                'title' => 'Presente el trámite ante la ANDE',
                'body'  => ['Con el NIS y la declaración técnica en mano, el trámite se presenta ante '
                    . 'la ANDE. Consulte los requisitos vigentes en la ANDE, porque la documentación '
                    . 'exacta y los plazos pueden variar.'],
            ],
            [
                'title' => 'Espere la aprobación antes de conectar la nueva carga',
                'body'  => ['Hasta que la ANDE apruebe y, si corresponde, actualice el medidor, no '
                    . 'conviene operar la instalación con la carga ampliada de forma sostenida.'],
            ],
        ],
        'faq' => [
            [
                'q' => '¿Quién puede hacer la declaración técnica de carga?',
                'a' => 'Debe hacerla un profesional habilitado, que calcula la carga total en kVA '
                    . 'según los equipos que va a tener la instalación.',
            ],
            [
                'q' => '¿Cuánto cuesta o cuánto demora el trámite?',
                'a' => 'Los costos y plazos los define la ANDE y pueden cambiar; consulte los '
                    . 'requisitos vigentes directamente en la ANDE.',
            ],
            [
                'q' => '¿Siempre que sumo un aire acondicionado necesito aumento de carga?',
                'a' => 'No siempre: depende de la carga que ya tiene contratada y de cuántos equipos '
                    . 'nuevos suma. Un electricista puede estimarlo antes de iniciar el trámite.',
            ],
            [
                'q' => '¿Qué diferencia hay entre monofásica y trifásica?',
                'a' => 'La trifásica reparte la carga en tres fases y soporta mayor potencia; suele '
                    . 'requerirse para talleres, consorcios o instalaciones con motores grandes.',
            ],
        ],
        'relatedService' => 'medidor-ande-tramites',
        'toolLink'       => null,
        'related' => ['como-leer-la-factura-de-ande', 'autogeneracion-ley-7599-que-cambia', 'por-que-salta-el-disyuntor'],
    ],

    'como-elegir-un-generador' => [
        'path'            => '/guias/como-elegir-un-generador/',
        'title'           => 'Cómo elegir un generador',
        'navLabel'        => 'Cómo elegir un generador',
        'seoTitle'        => 'Cómo elegir un generador',
        'metaDescription' => 'Cómo elegir un generador para la casa o el comercio: qué equipos cubrir, '
                           . 'cómo se estima la potencia en kVA, monofásico o trifásico y '
                           . 'transferencia.',
        'lastReviewed'    => '2026-09-24',
        'hero' => [
            'eyebrow' => 'Guías',
            'h1'      => '¿Cómo elegir un generador?',
            'lead'    => 'Los factores que determinan qué generador necesita, antes de comparar '
                       . 'precios o marcas.',
        ],
        'intro' => [
            'Elegir un generador no empieza por la marca ni el precio, sino por saber qué equipos '
                . 'necesita mantener funcionando durante un corte: solo la heladera y algunas luces, o '
                . 'también aire acondicionado, bomba de agua y equipos de trabajo. Esa lista determina '
                . 'la potencia en kVA que hace falta.',
            'Esta guía repasa los factores clave: potencia necesaria, tipo de arranque de los '
                . 'equipos (los motores exigen un pico al arrancar), monofásico o trifásico, y si '
                . 'conviene una transferencia automática (ATS) o manual.',
        ],
        'steps' => [
            [
                'title' => 'Liste los equipos que quiere mantener andando',
                'body'  => ['Anote heladera, aire acondicionado, bomba de agua, iluminación y '
                    . 'cualquier equipo de trabajo. No hace falta cubrir toda la casa: muchas veces '
                    . 'alcanza con los equipos esenciales.'],
            ],
            [
                'title' => 'Sume la potencia de esos equipos',
                'body'  => ['Cada equipo tiene un consumo nominal, y los que tienen motor (aire '
                    . 'acondicionado, bomba de agua) piden un pico de arranque más alto que su consumo '
                    . 'normal. El generador debe cubrir ese pico, no solo el consumo en régimen.'],
            ],
            [
                'title' => 'Decida entre monofásico y trifásico',
                'body'  => ['Una vivienda con suministro monofásico suele usar un generador '
                    . 'monofásico. Un comercio, un taller o una instalación con motores grandes puede '
                    . 'necesitar uno trifásico, según cómo esté armado el tablero.'],
            ],
            [
                'title' => 'Considere si necesita transferencia automática (ATS)',
                'body'  => ['Un sistema de transferencia automática enciende el generador y cambia la '
                    . 'alimentación sin intervención manual apenas se corta la luz. Sin ATS, alguien '
                    . 'tiene que arrancar el generador y conmutar la alimentación a mano.'],
            ],
            [
                'title' => 'Revise el tipo de combustible',
                'body'  => ['Nafta, diésel o gas son las opciones más comunes. La elección suele '
                    . 'depender de la potencia necesaria y de qué combustible es más práctico de '
                    . 'conseguir y almacenar en su caso.'],
            ],
            [
                'title' => 'Piense dónde va a instalarlo',
                'body'  => ['El generador necesita un lugar ventilado, alejado de ventanas y con '
                    . 'salida de gases hacia el exterior. Ese espacio disponible también influye en el '
                    . 'tamaño del equipo que conviene elegir.'],
            ],
            [
                'title' => 'Confirme que la instalación soporta la conmutación',
                'body'  => ['El tablero necesita un sistema de conmutación (manual o automático) para '
                    . 'que el generador nunca quede conectado a la vez que la red de la ANDE. Esa '
                    . 'conexión debe hacerla un electricista.'],
            ],
        ],
        'faq' => [
            [
                'q' => '¿Qué potencia de generador necesito para mi casa?',
                'a' => 'Depende de los equipos que quiera mantener andando durante el corte; la '
                    . 'calculadora de generador la estima a partir de esa lista.',
            ],
            [
                'q' => '¿Cuánto cuesta un generador?',
                'a' => 'Según publicaciones de prensa de 2026, hay generadores domésticos desde '
                    . 'alrededor de G. 4.200.000 (6,7 kVA), y equipos trifásicos cabinados de 12 kVA '
                    . 'diésel rondan los G. 47.000.000, orientativo.',
            ],
            [
                'q' => '¿Puedo conectar el generador yo mismo al tablero?',
                'a' => 'No se recomienda: la conexión requiere un sistema de conmutación para que el '
                    . 'generador nunca quede en paralelo con la red, y eso debe hacerlo un '
                    . 'electricista.',
            ],
            [
                'q' => '¿Qué es la transferencia automática (ATS)?',
                'a' => 'Es un sistema que detecta el corte de luz, arranca el generador y cambia la '
                    . 'alimentación de la instalación sin que nadie tenga que hacerlo a mano.',
            ],
        ],
        'relatedService' => 'generadores',
        'toolLink' => [
            'path'  => '/herramientas/que-generador-necesito/',
            'label' => 'Calcule qué generador necesita',
            'text'  => 'Cargue los equipos que quiere mantener andando y la calculadora estima la '
                    . 'potencia en kVA.',
        ],
        'related' => ['que-hacer-cuando-se-corta-la-luz', 'cuanto-cuesta-instalar-paneles-solares-en-paraguay', 'autogeneracion-ley-7599-que-cambia'],
    ],

    'cuanto-cuesta-instalar-paneles-solares-en-paraguay' => [
        'path'            => '/guias/cuanto-cuesta-instalar-paneles-solares-en-paraguay/',
        'title'           => 'Cuánto cuesta instalar paneles solares en Paraguay',
        'navLabel'        => 'Costo de paneles solares',
        'seoTitle'        => 'Cuánto cuestan los paneles solares',
        'metaDescription' => 'Qué componentes forman el costo de instalar paneles solares en '
                           . 'Paraguay: paneles, inversor, estructura, protecciones, mano de obra y '
                           . 'trámite ante la ANDE.',
        'lastReviewed'    => '2026-09-24',
        'hero' => [
            'eyebrow' => 'Guías',
            'h1'      => '¿Cuánto cuesta instalar paneles solares en Paraguay?',
            'lead'    => 'Los componentes que forman el costo total, y qué rangos se publicaron en '
                       . '2026 a modo orientativo.',
        ],
        'intro' => [
            'El costo de un sistema solar no es un número único: se arma sumando varios componentes, '
                . 'y el tamaño del sistema (kWp) depende directamente de cuánto consume la vivienda o '
                . 'el negocio. Por eso el punto de partida real no es el precio, sino el consumo en '
                . 'kWh de la factura de la ANDE.',
            'Esta guía enumera los componentes del costo y da rangos publicados en la prensa durante '
                . '2026, a modo orientativo. Para una cifra ajustada a su caso, lo que cambia el '
                . 'resultado es el consumo, así que conviene calcularlo primero con su propio consumo.',
        ],
        'steps' => [
            [
                'title' => 'Entienda de qué depende el tamaño del sistema',
                'body'  => ['El sistema se dimensiona en kWp (kilovatios pico) según el consumo '
                    . 'mensual en kWh de la vivienda o el negocio. A mayor consumo, mayor cantidad de '
                    . 'paneles necesarios, y por lo tanto mayor costo.'],
            ],
            [
                'title' => 'Considere el costo de los paneles',
                'body'  => ['Los paneles fotovoltaicos son el componente más visible del sistema, '
                    . 'pero no el único: su costo varía según la cantidad y la potencia de cada panel '
                    . 'necesaria para cubrir el consumo — según su consumo, use la calculadora.'],
            ],
            [
                'title' => 'Considere el inversor',
                'body'  => ['El inversor convierte la energía generada por los paneles en corriente '
                    . 'utilizable en la instalación, y puede ser on-grid (conectado a la red) o '
                    . 'híbrido (con posibilidad de batería). Es un componente central del costo total.'],
            ],
            [
                'title' => 'Considere la estructura de montaje',
                'body'  => ['Los paneles necesitan una estructura de soporte adecuada al tipo de '
                    . 'techo (chapa, teja u otro) y a su orientación. El tipo de techo influye en el '
                    . 'costo de esta parte de la instalación.'],
            ],
            [
                'title' => 'Considere las protecciones eléctricas',
                'body'  => ['El sistema necesita protecciones específicas (llaves de corte, '
                    . 'diferenciales y protección contra sobretensión) que forman parte del '
                    . 'presupuesto, además del tablero para la instalación fotovoltaica.'],
            ],
            [
                'title' => 'Considere la mano de obra de instalación',
                'body'  => ['La instalación de paneles, inversor, estructura y cableado, más las '
                    . 'pruebas de funcionamiento, es un componente de costo separado de los materiales.'],
            ],
            [
                'title' => 'Considere el trámite ante la ANDE',
                'body'  => ['Si el sistema va a inyectar excedentes a la red como autogenerador, hay '
                    . 'un trámite ante la ANDE asociado. Es un paso adicional al costo de los '
                    . 'materiales y la instalación.'],
            ],
            [
                'title' => 'Compare con los rangos publicados como referencia',
                'body'  => ['Según publicaciones de prensa de 2026, hay kits solares de entrada desde '
                    . 'alrededor de G. 12.500.000, y sistemas residenciales completos en un rango de '
                    . 'USD 10.000 a USD 15.000, orientativo. El resto depende de su consumo: use la '
                    . 'calculadora para una estimación ajustada a su caso.'],
            ],
        ],
        'faq' => [
            [
                'q' => '¿Cuánto cuesta instalar paneles solares en mi casa?',
                'a' => 'Depende del consumo a cubrir. Según publicaciones de prensa de 2026, hay kits '
                    . 'de entrada desde unos G. 12.500.000 y sistemas completos entre USD 10.000 y '
                    . 'USD 15.000, orientativo; para su caso, use la calculadora con su consumo.',
            ],
            [
                'q' => '¿Qué determina el tamaño del sistema que necesito?',
                'a' => 'El consumo mensual en kWh de su factura de la ANDE es el dato de partida para '
                    . 'calcular el tamaño en kWp.',
            ],
            [
                'q' => '¿El costo incluye el trámite ante la ANDE?',
                'a' => 'El trámite para registrarse como autogenerador es un paso aparte del costo de '
                    . 'materiales e instalación; consulte el alcance de cada presupuesto.',
            ],
            [
                'q' => '¿Cuánta capacidad solar hay instalada en Paraguay?',
                'a' => 'Según cifras publicadas, la capacidad solar instalada en el país pasó de unos '
                    . '50 MW en 2020 a unos 300 MW en 2024.',
            ],
        ],
        'relatedService' => 'paneles-solares',
        'toolLink' => [
            'path'  => '/herramientas/cuanto-solar-necesito/',
            'label' => 'Calcule su sistema solar',
            'text'  => 'A partir del consumo de su factura, la calculadora estima el tamaño en kWp y '
                    . 'la cantidad de paneles.',
        ],
        'related' => ['autogeneracion-ley-7599-que-cambia', 'como-leer-la-factura-de-ande', 'como-elegir-un-generador'],
    ],

    'autogeneracion-ley-7599-que-cambia' => [
        'path'            => '/guias/autogeneracion-ley-7599-que-cambia/',
        'title'           => 'Autogeneración: qué cambia con la Ley 7599',
        'navLabel'        => 'Ley 7599 de autogeneración',
        'seoTitle'        => 'Ley 7599: qué cambia para usted',
        'metaDescription' => 'Qué es la Ley 7599 de energías renovables, qué es un autogenerador ante '
                           . 'la ANDE y qué cambia para quien instala paneles solares en su vivienda o '
                           . 'negocio.',
        'lastReviewed'    => '2026-09-24',
        'hero' => [
            'eyebrow' => 'Guías',
            'h1'      => '¿Qué cambia con la Ley 7599 de autogeneración?',
            'lead'    => 'Qué habilita la ley, qué es un autogenerador ante la ANDE y qué sigue '
                       . 'definiendo la reglamentación.',
        ],
        'intro' => [
            'La Ley 7599/2025, sobre energías renovables no convencionales, y su reglamentación por '
                . 'Decreto 6034/2026, habilitan a hogares y negocios a registrarse como '
                . 'autogeneradores ante la ANDE: generar su propia energía (por ejemplo con paneles '
                . 'solares) e inyectar el excedente a la red.',
            'Esta guía explica qué significa eso en términos generales. Los procedimientos exactos '
                . 'del registro, los plazos y las tarifas de compensación por la energía inyectada los '
                . 'define la reglamentación de la ANDE, así que no se detallan aquí pasos ni montos '
                . 'específicos que puedan cambiar.',
        ],
        'steps' => [
            [
                'title' => 'Entienda qué es un autogenerador',
                'body'  => ['Un autogenerador es un usuario de la ANDE que además genera su propia '
                    . 'energía, típicamente con paneles solares, y que puede inyectar el excedente que '
                    . 'no consume a la red de distribución.'],
            ],
            [
                'title' => 'Ubique el marco legal',
                'body'  => ['La Ley 7599/2025 de energías renovables no convencionales es la norma de '
                    . 'base; el Decreto 6034/2026 la reglamenta y es el que fija los detalles '
                    . 'operativos del régimen de autogeneración.'],
            ],
            [
                'title' => 'Considere si su sistema aplica',
                'body'  => ['El régimen está pensado para quien instala una fuente de generación '
                    . 'propia, como paneles solares, con capacidad de inyectar excedentes a la red, no '
                    . 'para instalaciones aisladas sin conexión a la ANDE.'],
            ],
            [
                'title' => 'Sepa que el registro se hace ante la ANDE',
                'body'  => ['Registrarse como autogenerador es un trámite formal ante la ANDE, '
                    . 'asociado al NIS del suministro y a la instalación fotovoltaica proyectada o ya '
                    . 'instalada.'],
            ],
            [
                'title' => 'No dé por sentada la compensación exacta',
                'body'  => ['La forma en que se compensa la energía inyectada a la red la define la '
                    . 'reglamentación de la ANDE y puede variar; consulte el monto y el mecanismo '
                    . 'vigente directamente en la ANDE.'],
            ],
            [
                'title' => 'Considere el trámite como parte del proyecto solar',
                'body'  => ['Si va a instalar paneles solares con intención de inyectar excedentes, el '
                    . 'trámite de autogenerador conviene planificarlo junto con la instalación, no '
                    . 'como un paso separado y posterior.'],
            ],
        ],
        'faq' => [
            [
                'q' => '¿Qué es la Ley 7599?',
                'a' => 'Es la ley de energías renovables no convencionales de 2025, reglamentada por '
                    . 'el Decreto 6034/2026, que habilita el régimen de autogeneración ante la ANDE.',
            ],
            [
                'q' => '¿Cuánto me paga la ANDE por la energía que inyecto?',
                'a' => 'El mecanismo y la tarifa de compensación los define la reglamentación de la '
                    . 'ANDE; consulte el monto vigente directamente con ellos.',
            ],
            [
                'q' => '¿Necesito paneles solares para ser autogenerador?',
                'a' => 'El régimen está pensado para quien tiene una fuente de generación propia, '
                    . 'como paneles solares, conectada a la red de la ANDE.',
            ],
            [
                'q' => '¿El trámite de autogenerador tiene costo?',
                'a' => 'Los costos y requisitos del trámite los define la ANDE; consulte los '
                    . 'requisitos vigentes directamente con ellos.',
            ],
        ],
        'relatedService' => 'paneles-solares',
        'toolLink' => [
            'path'  => '/herramientas/cuanto-solar-necesito/',
            'label' => 'Calcule su sistema solar',
            'text'  => 'Si está evaluando instalar paneles con excedente para inyectar a la red, la '
                    . 'calculadora estima el tamaño en kWp según su consumo.',
        ],
        'related' => ['cuanto-cuesta-instalar-paneles-solares-en-paraguay', 'como-leer-la-factura-de-ande', 'como-pedir-aumento-de-carga-ande'],
    ],

];
