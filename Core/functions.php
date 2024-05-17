<?php

use Core\Response;

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
    $_SESSION = [];
    session_destroy();

    $params = session_get_cookie_params();

    setcookie('PHPSESSID', '', time() - 3600, $params['path'], $params['domain']);
}

function redirect($path){
    header("location: {$path}");
    exit();
}

function abort($code = 404)
{
    http_response_code($code);

    require base_dir("views/{$code}.php");

    die();
}
