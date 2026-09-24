<?php
/**
 * /blog/temporada-de-cortes-como-preparar-su-casa/ — content lives in
 * content/blog.php (index record) y en $sections/$faq/$toolLink aquí.
 */

require __DIR__ . '/../../lib/bootstrap.php';

$slug = 'temporada-de-cortes-como-preparar-su-casa';

$sections = [
    [
        'h2'   => 'Por qué se multiplican los cortes en esta época',
        'body' => [
            'Con la llegada del calor sube de golpe el consumo de aire acondicionado en toda el '
                . 'área metropolitana, y la red de la ANDE llega a ese pico con la misma capacidad '
                . 'instalada que el resto del año. El resultado son cortes más frecuentes, bajas de '
                . 'tensión y, en los barrios con instalaciones más antiguas, interrupciones que '
                . 'duran horas mientras se repara la línea.',
            'A eso se suman las tormentas de fin de año, que además de cortar el suministro pueden '
                . 'dejar sobretensiones al restablecerse el servicio. Una casa que no se preparó '
                . 'antes de la temporada llega al primer corte largo sin saber si el tablero '
                . 'aguanta, sin generador y sin un plan para lo que se echa a perder en la heladera.',
        ],
    ],
    [
        'h2'   => 'Qué revisar en el tablero antes de que empiece el verano',
        'body' => [
            'El tablero es el primer lugar donde se nota si la instalación está lista para un '
                . 'verano de mayor demanda. Un electricista revisa que el disyuntor termomagnético '
                . 'esté dimensionado para la carga real de la casa, que el diferencial (DDR) '
                . 'dispare correctamente y que la puesta a tierra —la jabalina y su conexión— esté '
                . 'en buen estado, porque es la que protege a las personas cuando algo falla.',
            'También se controla el estado físico del tablero: bornes flojos, cables recalentados '
                . 'o empalmes improvisados son señales de que conviene una intervención antes de que '
                . 'la exigencia del verano las convierta en una falla mayor.',
        ],
        'items' => [
            ['title' => 'Disyuntor termomagnético', 'text' => 'Que corresponda a la sección del '
                . 'cable y a la carga que realmente circula por esa línea.'],
            ['title' => 'Diferencial (DDR)', 'text' => 'Que dispare al probar el botón de test; si '
                . 'no dispara, no está protegiendo a nadie.'],
            ['title' => 'Puesta a tierra', 'text' => 'Jabalina y conexión en buen estado, sin '
                . 'corrosión visible en el borne.'],
        ],
    ],
    [
        'h2'   => 'Cuándo conviene sumar un generador',
        'body' => [
            'No toda casa necesita un generador, pero si los cortes de la temporada anterior '
                . 'dejaron sin heladera, sin bombeo de agua o sin climatización por horas, tiene '
                . 'sentido evaluarlo. Un generador doméstico bien dimensionado —con la potencia en '
                . 'kVA calculada según los equipos que debe sostener— cubre lo esencial mientras '
                . 'dura el corte, y una transferencia automática (ATS) evita tener que arrancarlo a '
                . 'mano en plena tormenta.',
            'Según publicaciones de prensa de 2026, hay generadores domésticos en el mercado desde '
                . 'alrededor de G. 4.200.000 para equipos monofásicos de 6,7 kVA, y modelos '
                . 'trifásicos cabinados de 12 kVA rondan los G. 47.000.000; el equipo correcto para '
                . 'cada casa depende de la carga que realmente hay que sostener durante el corte.',
        ],
    ],
    [
        'h2'   => 'Un plan simple para el día del corte',
        'body' => [
            'Además del equipamiento, conviene tener claro qué hacer apenas se corta la luz: '
                . 'identificar la llave general del tablero, saber qué artefactos conviene '
                . 'desconectar para evitar picos al volver la energía, y tener a mano una linterna '
                . 'y los números de contacto de la ANDE y del electricista de confianza.',
            'Ese plan no reemplaza la revisión técnica, pero reduce el margen de error cuando el '
                . 'corte llega de noche o en medio de una tormenta, que es cuando menos ganas hay de '
                . 'improvisar.',
        ],
    ],
    [
        'h2'   => 'Qué hacer apenas vuelve la luz',
        'body' => [
            'El momento en que se restablece el suministro también tiene su propio riesgo: si '
                . 'hubo una sobretensión durante la tormenta, algunos artefactos sensibles —routers, '
                . 'televisores, equipos electrónicos— pueden verse afectados si quedaron conectados '
                . 'todo el corte. Por eso conviene desconectar esos equipos apenas empieza el corte, '
                . 'no solo esperar a que vuelva la luz para reaccionar.',
            'Si al volver el suministro algo huele a quemado, se escucha un chisporroteo o el '
                . 'diferencial dispara de forma repetida al intentar restablecer el circuito, lo '
                . 'correcto es cortar la llave general y llamar a un electricista, en lugar de '
                . 'insistir con la palanca del tablero. Esas señales suelen indicar que algo en la '
                . 'instalación no soportó bien la sobretensión y necesita revisión antes de seguir '
                . 'usándose.',
        ],
    ],
];

$faq = [
    [
        'q' => '¿Cada cuánto conviene revisar el tablero antes del verano?',
        'a' => 'Una revisión anual, antes de que empiece la temporada de calor, alcanza para '
             . 'detectar a tiempo un disyuntor mal dimensionado o un diferencial que no dispara.',
    ],
    [
        'q' => '¿Un generador reemplaza la revisión eléctrica de la casa?',
        'a' => 'No: el generador respalda el suministro, pero si el tablero o el cableado tienen '
             . 'una falla, esa falla sigue estando ahí con o sin generador.',
    ],
    [
        'q' => '¿Qué pasa si el diferencial no dispara al probar el botón de test?',
        'a' => 'Significa que no está protegiendo a las personas ante una fuga de corriente y '
             . 'conviene que lo revise un electricista antes de seguir usando la instalación.',
    ],
];

$toolLink = [
    'path'  => '/herramientas/que-generador-necesito/',
    'label' => 'Calcule el generador que necesita',
    'text'  => 'Ingrese los artefactos que quiere sostener durante un corte y la calculadora '
             . 'estima la potencia en kVA que necesita el equipo.',
];

require ROOT_DIR . '/templates/article.php';
