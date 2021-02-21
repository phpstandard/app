<?php
// Load vendors
require_once __DIR__ . "/../vendor/autoload.php";

// Instantiate the loader
$loader = new Framework\Autoloader;

// Add namespaces to autoload
$loader->addNamespace(null, ROOT_PATH . "/src"); # Root source

// Register the autoloader
$loader->register();
