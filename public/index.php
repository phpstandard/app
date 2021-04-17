<?php

use Framework\Contracts\Core\ApplicationInterface;
use Framework\Contracts\Emitter\EmitterInterface;
use Framework\Http\HttpFactory;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

// Application start timestamp
define('APP_START', microtime(true));

// Path to root directory
define("ROOT_PATH", __DIR__ . '/..');

/** @var ApplicationInterface $app Bootstrapped application instance */
$app = include __DIR__ . '/../bootstrap/app.php';

/** @var EmitterInterface $emitter */
$emitter = $app->getContainer()->get(EmitterInterface::class);

/** @var RequestHandlerInterface $handler */
$handler = $app->getContainer()->get(RequestHandlerInterface::class);

/** @var ServerRequestInterface $request A server request captured from global PHP variables */
$request = HttpFactory::getGlobalServerRequest();

/** @var ResponseInterface $response */
$response = $handler->handle($request);

// Emit response
$emitter->emit($response);
