<?php

namespace Bootstrappers;

use Framework\Contracts\Core\ApplicationInterface;
use Framework\Contracts\Core\BootstrapperInterface;
use Framework\Routing\RouteCollector;

class RoutingBootstrapper implements BootstrapperInterface
{
    /** @var ApplicationInterface $app */
    private $app;

    /** @var RouteCollector $rc */
    private $rc;

    public function __construct(
        ApplicationInterface $app,
        RouteCollector $rc
    ) {
        $this->app = $app;
        $this->rc = $rc;
    }

    /**
     * @inheritDoc
     */
    public function bootstrap()
    {
        $group = include $this->app->getBasePath() . '/routes/web.php';
        $this->rc->addGroup($group);
    }
}
