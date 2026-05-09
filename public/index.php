<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once '../helpers.php';

require basePath('Framework/Router.php');

require basePath('Framework/Database.php');

$router = new Router();

$routes = require basePath('routes.php');


$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

$router->route($requestUri, $method);
