<?php

namespace Http\Controllers;

use Framework\Http\HttpFactory;
use Framework\Http\StatusCodes;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class IndexController
{
    /** @var HttpFactory $httpFactory */
    private $httpFactory;

    public function __construct(HttpFactory $factory)
    {
        $this->httpFactory = $factory;
    }

    public function __invoke(ServerRequestInterface $req): ResponseInterface
    {
        $resp = $this->httpFactory->createResponse(StatusCodes::HTTP_OK);
        return $resp->withBody(
            $this->httpFactory->createStream('<h1>Yay! It works! 🎉</h1>')
        );
    }
}
