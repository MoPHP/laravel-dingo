<?php

return [
    /*
     |--------------------------------------------------------------------------
     | Laravel CORS
     |--------------------------------------------------------------------------
     |

     | allowedOrigins, allowedHeaders and allowedMethods can be set to array('*')
     | to accept any value.
     |
     */
    'supportsCredentials' => false,
    'allowedOrigins' => ['*'],
    'allowedHeaders' => ['Content-Type', 'Accept', 'Authorization', 'Content-Length', 'X-Requested-With', 'x-csrf-token', 'origin'],
    'allowedMethods' => ['GET', 'POST', 'PUT',  'DELETE', 'OPTIONS', 'PATCH'],
    'exposedHeaders' => [],
    'maxAge' => 0,
    'hosts' => [],
];

