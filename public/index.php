<?php

session_start();

const BASE_DIR = __DIR__.'/../';

require BASE_DIR."Core/functions.php";

spl_autoload_register(function($class){
    $class = str_replace("\\", DIRECTORY_SEPARATOR , $class);

    require base_dir("{$class}.php");
});


require base_dir("bootstrap.php");


$router = new \Core\Router;


$routes = require base_dir("routes.php");


$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER["REQUEST_METHOD"];
$router->route($uri, $method);


