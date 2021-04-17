<?php

namespace Providers;

use Framework\Contracts\Container\ContainerInterface;
use Framework\Contracts\Container\ServiceProviderInterface;
use Framework\Routing\RouteCollector;

class RoutingServiceProvider implements ServiceProviderInterface
{
    /**
     * @inheritDoc
     */
    public function register(ContainerInterface $container)
    {
        $rc = new RouteCollector;
        $container->set(RouteCollector::class, $rc);
    }
}
