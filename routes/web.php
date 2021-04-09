<?php

use Framework\Http\HttpFactory;
use Framework\Http\StatusCodes;
use Framework\Routing\RouteCollector;
use Psr\Http\Message\ServerRequestInterface;

$group = RouteCollector::group();

$group->map('GET', '/', function (ServerRequestInterface $req) {
    $factory = new HttpFactory;
    $response = $factory->createResponse(StatusCodes::HTTP_OK);
    return $response->withBody(
        $factory->createStream('<h1>Yay! It works! 🎉</h1>')
    );
});

// Not found handler. Should be set as last route
$group->map('GET', '*', function (ServerRequestInterface $req) {
    $factory = new HttpFactory;
    $response = $factory->createResponse(StatusCodes::HTTP_NOT_FOUND);
    return $response->withBody(
        $factory->createStream('<h1>Page not found! 😔</h1>')
    );
});

return $group;
