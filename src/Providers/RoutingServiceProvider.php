<?php

namespace Providers;

use Framework\Contracts\Container\ContainerInterface;
use Framework\Contracts\Container\ServiceProviderInterface;
use Framework\Contracts\Emitter\EmitterInterface;
use Framework\Contracts\Routing\DispatcherInterface;
use Framework\Contracts\Support\CallbackResolverInterface;
use Framework\Emitter\SapiEmitter;
use Framework\Http\RequestHandler;
use Framework\Routing\Dispatcher;
use Framework\Routing\RouteCollector;
use Framework\Support\CallbackResolver;
use Psr\Http\Server\RequestHandlerInterface;

class RoutingServiceProvider implements ServiceProviderInterface
{
    /**
     * @inheritDoc
     */
    public function register(ContainerInterface $container)
    {
        $container
            ->set(EmitterInterface::class, SapiEmitter::class)
            ->set(RequestHandlerInterface::class, RequestHandler::class)
            ->set(DispatcherInterface::class, Dispatcher::class)
            ->set(CallbackResolverInterface::class, CallbackResolver::class)
            ->set(RouteCollector::class, include ROOT_PATH . '/routes/web.php');
    }
}
