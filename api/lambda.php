<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// 1. Force Vercel to use /tmp for all cache/metadata files
putenv('APP_CONFIG_CACHE=/tmp/config.php');
putenv('APP_SERVICES_CACHE=/tmp/services.php');
putenv('APP_PACKAGES_CACHE=/tmp/packages.php');
putenv('APP_ROUTES_CACHE=/tmp/routes.php');
putenv('VIEW_COMPILED_PATH=/tmp');
putenv('CACHE_DRIVER=array');
putenv('LOG_CHANNEL=stderr');
putenv('SESSION_DRIVER=cookie');

// 2. Register the Composer autoloader
require __DIR__.'/../vendor/autoload.php';

// 3. Bootstrap Laravel
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

// 4. Force the Storage Path to /tmp (Matches Jbala fix)
$app->useStoragePath('/tmp/storage');

// 5. Handle the Request
$app->handleRequest(Request::capture());

if (env('DB_CONNECTION') === 'sqlite') {
    $dbPath = __DIR__ . '/../database/database.sqlite';
    config(['database.connections.sqlite.database' => $dbPath]);
}