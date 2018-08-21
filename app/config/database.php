'connections' => [
    'postgres' => [
        'driver'    => 'postgres',
        'host'      => env('DB_HOST', '202.152.63.245'),
        'port'      => env('DB_PORT', 9370),
        'database'  => env('DB_DATABASE', 'Customer'),
        'username'  => env('DB_USERNAME', 'postgres'),
        'password'  => env('DB_PASSWORD', 'J0k0W1d0d0'),
        'charset'   => env('DB_CHARSET', 'utf8'),
        'collation' => env('DB_COLLATION', 'utf8_unicode_ci'),
        'prefix'    => env('DB_PREFIX', ''),
        'timezone'  => env('DB_TIMEZONE', '+00:00'),
        'strict'    => env('DB_STRICT_MODE', false),
    ],
]