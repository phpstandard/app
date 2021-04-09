<?php

namespace Providers;

use Dotenv\Dotenv;
use Framework\Contracts\Container\BootableServiceProviderInterface;
use Framework\Contracts\Container\ContainerInterface;

class ApplicationServiceProvider implements BootableServiceProviderInterface
{
    /**
     * @inheritDoc
     */
    public function register(ContainerInterface $container)
    {
        // Register services here
    }

    /**
     * @inheritDoc
     */
    public function boot()
    {
        $this->loadDotenv();
        $this->loadHelperFunctions();
        $this->configErrorReporting();
    }

    /**
     * Load environment variables from the .env file 
     *
     * @return void
     */
    private function loadDotenv()
    {
        Dotenv::createImmutable(ROOT_PATH)->load();
    }

    /**
     * Load helper functions
     *
     * @return void
     */
    private function loadHelperFunctions()
    {
        require_once ROOT_PATH . '/helpers/helpers.php';
    }

    /**
     * Configure error reporting
     *
     * @return void
     */
    private function configErrorReporting()
    {
        // Report all errors
        error_reporting(E_ALL);

        // Display error only if debug mode is enabled
        ini_set('display_errors', env('DEBUG', false));
    }
}
