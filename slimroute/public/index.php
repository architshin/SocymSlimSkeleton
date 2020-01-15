<?php
use Slim\Factory\AppFactory;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;

require_once($_SERVER["DOCUMENT_ROOT"]."/slimroute/vendor/autoload.php");

$app = AppFactory::create();

$app->run();
