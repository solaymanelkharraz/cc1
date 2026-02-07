<?php
require __DIR__ . '/../vendor/autoload.php';

// Force /tmp for Vercel's read-only system
putenv('APP_CONFIG_CACHE=/tmp/config.php');
putenv('APP_SERVICES_CACHE=/tmp/services.php');
putenv('APP_PACKAGES_CACHE=/tmp/packages.php');
putenv('APP_ROUTES_CACHE=/tmp/routes.php');
putenv('VIEW_COMPILED_PATH=/tmp');

$app = require __DIR__ . '/../bootstrap/app.php';
$app->useStoragePath('/tmp/storage');

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$response = $kernel->handle($request = Illuminate\Http\Request::capture());
$response->send();
$kernel->terminate($request, $response);