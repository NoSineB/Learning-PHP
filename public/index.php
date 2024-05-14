<?php

const BASE_DIR = __DIR__.'/../';

require BASE_DIR."Core/functions.php";

spl_autoload_register(function($class){
    $class = str_replace("\\", DIRECTORY_SEPARATOR , $class);

    require base_dir("{$class}.php");
});

require base_dir('Core/router.php');


