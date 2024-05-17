<?php

use Core\Response;
use Core\Session;

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}


function authorise($condition, $status_code = Response::FORBIDDEN)
{
    if (!$condition) {
        abort($status_code);
    }
}

function base_dir($url)
{
    return BASE_DIR . "{$url}";
}

function view($filename, $array = [])
{
    extract($array);
    return require base_dir("views/{$filename}");
}

function login($user)
{
    $_SESSION['user'] = [
        'email' => $user['email']
    ];

    session_regenerate_id(true);
}

function logout()
{
    Session::destroy();
}

function redirect($path)
{
    header("location: {$path}");
    exit();
}

function abort($code = 404)
{
    http_response_code($code);

    require base_dir("views/{$code}.php");

    die();
}

function old($key)
{
    return Session::old($key);
}
