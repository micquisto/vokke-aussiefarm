<?php

/**
 * Custom middleware configuration - load your middleware here together with alias or group
 */

return [
    'route' => [
         'vokke-middleware' => \Vokke\AussieFarm\Middleware\VokkeMiddleware::class,
    ],
];
