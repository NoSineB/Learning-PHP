<?php

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function urlIs($value) {
    return $_SERVER['REQUEST_URI'] === $value;
}


function authorise($condition, $status_code = Response::FORBIDDEN){
    if(!$condition){
        abort($status_code);
    }
}

function base_dir($url){
    return BASE_DIR."{$url}";
}

function view($filename, $array=[]){
    extract($array);
    return require base_dir("views/{$filename}"); 
}