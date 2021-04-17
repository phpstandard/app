<?php

use Framework\Container\Container;
use Framework\Contracts\Core\ApplicationInterface;
use Framework\Core\Application;
use Psr\Container\ContainerInterface;

require __DIR__ . '/autoload.php';

// Application base (root) path
$base_path = __DIR__ . '/..';

/** @var (ServiceProviderInterface|string)[] $providers */
$providers = require __DIR__ . '/../config/providers.php';

/** @var (BootstrapperInterface|string)[] $providers */
$bootstrappers = require __DIR__ . '/../config/bootstrappers.php';

$container = new Container;
$app = new Application($container, $providers, $bootstrappers, $base_path);

$container
    ->set(ContainerInterface::class, $container)
    ->set(ApplicationInterface::class, $app);

$app->boot();
return $app;
