<?php

/**
 * Custom middleware configuration - load your middleware here together with alias or group
 */

return [
    'route' => [
         'vokke-middleware' => \App\Middleware\VokkeMiddleware::class,
    ],
];
