<?php
// Load vendors
require_once __DIR__ . "/../vendor/autoload.php";

// Instantiate the loader
$loader = new Framework\Autoloader;

// Add namespaces to autoload
$loader->addNamespace(null, __DIR__ . "/../src"); # Root source

// Register the autoloader
$loader->register();
