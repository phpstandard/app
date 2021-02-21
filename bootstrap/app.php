<?php

// Application start timestamp
define('APP_START', microtime(true));

// Path to root directory
define("ROOT_PATH", __DIR__);

// Include autoloader
require_once 'src/autoload.php';

// Load env variables
$dotenv = Dotenv\Dotenv::createImmutable(ROOT_PATH);
$dotenv->load();
