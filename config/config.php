<?php
// Configuración general del proyecto Xinyang MVC.
// Funciona con XAMPP y también con Docker usando variables de entorno.

return [
    'app_name' => 'Xinyang Restaurante Chino',
    'app_url' => getenv('APP_URL') ?: '',
    'db' => [
        'host' => getenv('DB_HOST') ?: 'localhost',
        'port' => getenv('DB_PORT') ?: '3306',
        'name' => getenv('DB_NAME') ?: 'xinyang_db',
        'user' => getenv('DB_USER') ?: 'root',
        'pass' => getenv('DB_PASS') ?: '',
        'charset' => 'utf8mb4'
    ]
];
