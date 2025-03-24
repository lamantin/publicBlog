<?php
// app/config/config.php

return [
    'db' => [
        'host' => '192.168.0.16',        // Adatbázis host
        'dbname' => 'rackhost_blog',           // Adatbázis neve
        'username' => 'root',         // Felhasználónév
        'password' => 'root',             // Jelszó
        'charset' => 'utf8'        // Karakterkódolás
    ],
    'smarty' => [
        'template_dir' => '../templates/',           // A template mappa helye
        'compile_dir' => '../templates_c/',          // A compile mappa helye
        'cache_dir' => '../cache/',                  // Cache mappa helye
        'config_dir' => '../configs/'                // Konfigurációs mappa helye
    ]
];
