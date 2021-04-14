<?php

namespace Bootstrappers;

use Framework\Contracts\Core\BootstrapperInterface;
use Framework\Contracts\View\ViewFinderInterface;

class ViewBootstrapper implements BootstrapperInterface
{
    /** @var ViewFinderInterface $finder */
    private $finder;

    public function __construct(ViewFinderInterface $finder)
    {
        $this->finder = $finder;
    }

    /**
     * @inheritDoc
     */
    public function bootstrap()
    {
        $this->finder->addPath(ROOT_PATH . '/resources/views/');
    }
}
