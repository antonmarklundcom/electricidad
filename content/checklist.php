<?php
/**
 * The pre-summer electrical checklist (/checklist-electrico/): a printable
 * lead magnet. Every item is something a homeowner can LOOK at or switch —
 * never an instruction to open a board or touch a conductor.
 *
 *   groups  [['title' => ..., 'items' => [string, ...]], ...]
 */

declare(strict_types=1);

return [
    'groups' => [
        [
            'title' => 'Tablero y disyuntores',
            'items' => [
                'Ningún disyuntor salta solo cuando se prenden el aire, la ducha o el microondas.',
                'El tablero tiene tapa, está seco y no se siente caliente ni huele a quemado.',
                'Cada disyuntor tiene una etiqueta que dice qué circuito corta.',
                'Existe un disyuntor diferencial y el botón de prueba lo hace saltar (pruébelo una vez por mes).',
                'Sabe dónde está la llave general y todos en la casa saben bajarla.',
            ],
        ],
        [
            'title' => 'Aire acondicionado',
            'items' => [
                'Cada aire tiene su propio circuito y su propio disyuntor.',
                'Los filtros están limpios antes de la temporada de calor.',
                'Las luces no bajan de intensidad cuando arranca el compresor.',
                'Si va a sumar un equipo este verano, el tablero se revisó antes de comprarlo.',
            ],
        ],
        [
            'title' => 'Enchufes, cables y alargues',
            'items' => [
                'No hay enchufes flojos, derretidos, con marcas negras o que calienten.',
                'No hay zapatillas o alargues conectados uno detrás de otro.',
                'Los equipos grandes (aire, heladera, termocalefón) no van en alargues.',
                'No hay cables expuestos, empalmes con cinta ni cables pisados por muebles.',
            ],
        ],
        [
            'title' => 'Respaldo para los cortes',
            'items' => [
                'Sabe qué equipos necesita mantener funcionando durante un corte (heladera, bomba, internet, portón).',
                'La computadora, el router y las cámaras tienen UPS o estabilizador.',
                'Si tiene generador: arrancó en el último mes, tiene combustible y aceite, y se conecta con llave de transferencia.',
                'Tiene linterna o luz de emergencia cargada y a mano.',
            ],
        ],
        [
            'title' => 'Puesta a tierra y tormentas',
            'items' => [
                'La casa tiene jabalina de puesta a tierra y los enchufes tienen el tercer polo conectado.',
                'Los equipos sensibles se desenchufan durante tormentas eléctricas fuertes.',
                'Hay protección contra sobretensiones en el tablero o en los equipos caros.',
            ],
        ],
    ],
];
