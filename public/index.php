<?php

session_start();
ini_set("display_errors", 1);

/**
 * Register The Auto Loader
 */

use App\Router\Router;

require __DIR__.'/../vendor/autoload.php';

/**
 * Project config
 */

require_once __DIR__.'/../config/app.php';

require_once __DIR__.'/../src/Helpers/Helper.php';

/**
 * Run the project
 */
$app = new Router();

$app->run();
