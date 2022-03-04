<?php


return [

    /*
    |--------------------------------------------------------------------------
    | Default PagSeguro configs  
    |--------------------------------------------------------------------------
    |
    | This option is the default configs for the PagSeguro.
    | 
    |
    */

    'token'     => env('KANGU_TOKEN'),
    'host'      => array(
        'sandbox'        => 'https://sandbox.kangu.com.br/tms/transporte',
        'production'     => 'https://portal.kangu.com.br/tms/transporte/',
    ),
];
