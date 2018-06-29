<?php

$word_title = 'País';
$word_text = 'país';

return [
    // Title
    'module_title_s'        => $word_title,
    'module_title'          => 'Paises',

	// Tabs
	'tabs'              => [
        'general'      	    => 'General',
    ],

    // CRUD
    'crud'              => [
        'create'            => [
            'success'           => $word_title.' registrado con éxito',
            'error'             => 'Error al registrar al '.$word_text,
        ],
        'update'            => [
            'success'           => $word_title.' actualizado con éxito',
            'error'             => 'Error al actualizar al '.$word_text,
        ],
        'delete'            => [
            'success'           => $word_title.' eliminado con éxito',
            'error'             => 'Error al eliminar al '.$word_text,
        ],
        'restore'           => [
            'success'           => $word_title.' restaurado con éxito',
            'error'             => 'Error al restaurar al '.$word_text,
        ]
    ],
];
