<?php

/**
 * Archivo principal para la aplicación de Multipagos
 * 
 * @author Ricardo Ustariz
 */

// Inclusión de archivos de configuración
require_once __DIR__.'/vendor/autoload.php';

// Inicializar la aplicación
$app = require_once __DIR__.'/bootstrap/app.php';

// Ejecutar la aplicación
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
