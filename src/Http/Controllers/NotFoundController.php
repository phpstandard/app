<?php

namespace Http\Controllers;

use Framework\Contracts\View\ViewFactoryInterface;
use Framework\Http\HttpFactory;
use Framework\Http\StatusCodes;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class NotFoundController
{
    /** @var HttpFactory $httpFactory */
    private $httpFactory;

    /** @var ViewFactoryInterface $viewFactory */
    private $viewFactory;

    public function __construct(
        HttpFactory $http_factory,
        ViewFactoryInterface $view_factory
    ) {
        $this->httpFactory = $http_factory;
        $this->viewFactory = $view_factory;
    }

    public function __invoke(ServerRequestInterface $req): ResponseInterface
    {
        $resp = $this->httpFactory->createResponse(StatusCodes::HTTP_NOT_FOUND);
        $view = $this->viewFactory->create('not-found', [
            'uri' => $req->getUri()
        ]);

        return $resp->withBody(
            $this->httpFactory->createStream($view->render())
        );
    }
}
