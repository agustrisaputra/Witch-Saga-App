<?php

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__."/../");
$dotenv->load();

/**
 * Base URL
 */

define('BASEURL', $_ENV['APP_URL'] ?: 'http://localhost/witch_saga_app/public');

