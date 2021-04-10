<?php

use Framework\Routing\RouteCollector;
use Http\Controllers\IndexController;
use Http\Controllers\NotFoundController;

$group = RouteCollector::group();

$group->map('GET', '/', IndexController::class);

// Not found handler. Should be set as the lastest route
$group->map('GET', '*', NotFoundController::class);

return $group;
