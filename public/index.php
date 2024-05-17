<?php

use Core\Session;
use Core\ValidationException;

session_start();

const BASE_DIR = __DIR__.'/../';

require BASE_DIR . "vendor/autoload.php";

require BASE_DIR."Core/functions.php";

require base_dir("bootstrap.php");

$router = new \Core\Router;

$routes = require base_dir("routes.php");

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER["REQUEST_METHOD"];

try{
    $router->route($uri, $method);
} catch(ValidationException $exception) {
    Session::flash('errors', $exception->errors);
    Session::flash('old', $exception->old);

    return redirect($router->previousUrl());
}


Session::unflash();


