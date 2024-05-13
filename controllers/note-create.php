<?php

$heading = 'Add Note';

$config = require('config.php');
$db = new Database($config['database']);

if($_SERVER["REQUEST_METHOD"]== "POST"){

    $errors = [];

    if(strlen($_POST["body"]) == 0){
        $errors["body"] = "A Body is needed";
    }

    if(strlen($_POST["body"]) >10){
        $errors["body"] = "Body Characters execeds the limit 1000";        
    }

    if(empty($errors)){
        $db->query("INSERT INTO `notes` (`id`, `body`, `user_id`) VALUES (DEFAULT, :body, :user_id);", [
            "body"=>$_POST["body"],
            "user_id"=>1
        ]);
        return routeToController('/notes', $routes);
    }

    
}

require("views/note-create.view.php");

