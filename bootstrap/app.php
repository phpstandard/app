<?php

use Framework\Container\Container;
use Framework\Core\Application;
use Psr\Container\ContainerInterface;

/** @var (ServiceProviderInterface|string)[] $providers */
$providers = require ROOT_PATH . '/config/providers.php';

/** @var (BootstrapperInterface|string)[] $providers */
$bootstrappers = require ROOT_PATH . '/config/bootstrappers.php';

$container = new Container;
$app = new Application($container, $providers, $bootstrappers);

$container
    ->set(ContainerInterface::class, $container)
    ->set(App::class, $app);

$app->boot();
return $app;
