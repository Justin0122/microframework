<?php

spl_autoload_register(function ($className) {
    $prefix = 'App\\';
    $baseDirectory = __DIR__ . '/app/';

    $className = str_replace($prefix, '', $className);
    $filePath = $baseDirectory . str_replace('\\', '/', $className) . '.php';

    if (file_exists($filePath)) {
        require_once $filePath;
    }
});

