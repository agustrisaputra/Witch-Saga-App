<?php

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__."/../");
$dotenv->safeLoad();

/**
 * Base URL
 */

define('BASEURL', isset($_ENV['APP_URL']) ? $_ENV['APP_URL'] : 'https://witch-saga-agus.herokuapp.com');

