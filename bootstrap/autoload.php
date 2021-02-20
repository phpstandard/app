<?php
// Load vendors
require_once __DIR__ . "/../vendor/autoload.php";

// instantiate the loader
$loader = new Framework\Autoloader;

// register namespaces to autoload
$loader->addNamespace(null, ROOT_PATH . "/src"); # Root source

// register the autoloader
$loader->register();
