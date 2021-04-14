<?php

use Framework\Contracts\Emitter\EmitterInterface;
use Framework\Core\Application;
use Framework\Http\HttpFactory;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

// Application start timestamp
define('APP_START', microtime(true));

// Path to root directory
define("ROOT_PATH", __DIR__ . '/..');

// Autoload
include ROOT_PATH . '/bootstrap/autoload.php';

/** @var Application $app Application instance (not bootstrapped) */
$app = include ROOT_PATH . '/bootstrap/app.php';
$app->boot();

/** @var EmitterInterface $emitter */
$emitter = $app->container->get(EmitterInterface::class);

/** @var RequestHandlerInterface $handler */
$handler = $app->container->get(RequestHandlerInterface::class);

/** @var ServerRequestInterface $request A server request captured from global PHP variables */
$request = HttpFactory::getGlobalServerRequest();

/** @var ResponseInterface $response */
$response = $handler->handle($request);

// Emit response
$emitter->emit($response);
