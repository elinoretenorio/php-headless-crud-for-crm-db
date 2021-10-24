<?php

declare(strict_types=1);

define("BASE_PATH", __DIR__ . "/../");

require BASE_PATH . "vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(BASE_PATH);
$dotenv->load();
$container = new League\Container\Container;

include BASE_PATH . "container.php";

$strategy = (new League\Route\Strategy\ApplicationStrategy)->setContainer($container);
$router = (new League\Route\Router)->setStrategy($strategy);

include BASE_PATH . "routes.php";

$request = Laminas\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES
);

$response = $router->dispatch($request, new Laminas\Diactoros\Response());

(new Laminas\HttpHandlerRunner\Emitter\SapiEmitter)->emit($response);
