<?php

use Framework\Bootstrappers as FrameworkBootstrappers;
use Bootstrappers\ApplicationBootstrapper;
use Bootstrappers\ViewBootstrapper;

return [
    // Framework bootstrappers
    FrameworkBootstrappers\ViewBootstrapper::class,

    // Application bootstrappers
    ApplicationBootstrapper::class,
    ViewBootstrapper::class
];
