<?php

// Application start timestamp
define('APP_START', microtime(true));

// Path to root directory
define("ROOT_PATH", __DIR__ . '/../');

// Include autoloader
require_once 'autoload.php';

// Load env variables
Dotenv\Dotenv::createImmutable(ROOT_PATH)->load();

// Error reporting
error_reporting(E_ALL); # Report all errors
ini_set('display_errors', isset($_ENV['DEBUG']) && $_ENV['DEBUG']);
