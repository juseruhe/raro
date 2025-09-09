<?php

return [

    'paths' => ['*'],
    'allowed_methods' => [
        'GET',
        'POST',
        'PUT',
        'DELETE',
        'PATCH', 
        'OPTION'
    ],
    //'allowed_origins' => ['http://localhost:8080'], // Agrega aquí tu dominio de frontend
    //'allowed_origins' => ['https://testmircrositiospaco.rocol.org'], // Agrega aquí tu dominio de frontend
    'allowed_origins' => [
        'http://localhost:8080', 
        'https://testmircrositiospaco.rocol.org', 
        'https://mircrositiospaco.rocol.org'
    ],
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => 3600,
    'supports_credentials' => true,
];