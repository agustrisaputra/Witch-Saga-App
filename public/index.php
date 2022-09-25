<?php

session_start();
ini_set("display_errors", 0);

/**
 * Register The Auto Loader
 */

use App\Router\Router;

require __DIR__.'/../vendor/autoload.php';

/**
 * Project config
 */

require_once __DIR__.'/../config/app.php';

/**
 * Run the project
 */
$app = new Router();

$app->run();
