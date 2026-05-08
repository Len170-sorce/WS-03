<?php

require_once '../helpers.php';

require basePath('Router.php');

require basePath('Database.php');

$router = new Router();

$routes = require basePath('routes.php');


$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$baseUri = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');

if ($baseUri !== '' && $baseUri !== '/') {
    $requestUri = substr($requestUri, strlen($baseUri));
}

$uri = '/' . trim($requestUri, '/');
if ($uri === '//') {
    $uri = '/';
}

$method = $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);
