<?php

/**
 * Basic Config for BladeTailUI
 * 
 * @author Deva
 * @version v.1.2.2
 */

return [

    //theme
    'theme' => 'gray',

    //default size for button , alert, form elements
    'size'  => 'small',

    //padding ---------------
    'padding'    => [
        'small'  => 'px-4 py-1 text-sm',
        'medium' => 'px-6 py-2',
        'large'  => 'px-8 py-3 text-lg'
    ],

    //used in input,select
    'formPadding' => [
        'small'   => 'px-2 py-1 text-sm',
        'medium'  => 'px-3 py-2',
        'large'   => 'px-4 py-3 text-lg'
    ],

    //color varient -------------------
    'colorVar'  => [
        'dark'  => [
            'bg'     => 600,
            'border' => 800,
            'divide' => 600,
            'text'   => 100
        ],
        'light' => [
            'bg'     => 100,
            'border' => 200,
            'divide' => 400,
            'text'   => 900
        ],
    ],

    'hoverVar'  => [
        'light' => [
            'bg'     => 200,
            'border' => 500,
            'divide' => 500,
            'text'   => 900
        ],
        'dark'  => [
            'bg'     => 900,
            'border' => 800,
            'divide' => 800,
            'text'   => 100
        ],
    ],

    'formTypes' => [

        'default' => [
            'color' => 'gray', 
            'icon' => ' fa fa-exclamation-circle '
        ],
        'success' => [
            'color' => 'green', 
            'icon' => 'fa fa-check-circle'
        ],
        'warning' => [
            'color' => 'yellow', 
            'icon' => 'fa fa-exclamation-triangle'
        ],
        'danger'  => [
            'color' => 'red', 
            'icon' => 'fa fa-close'
        ],
        'info'    => [
            'color' => 'gray',
             'icon' => 'fa fa-exclamation-circle'
        ],

    ]
];
