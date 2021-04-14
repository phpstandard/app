<?php

use Framework\Providers as FrameworkProviders;
use Providers\RoutingServiceProvider;

return [
    // Load framework service providers
    FrameworkProviders\ViewServiceProvider::class,
    FrameworkProviders\RoutingServiceProvider::class,

    // Load pplication service providers
    RoutingServiceProvider::class
];
