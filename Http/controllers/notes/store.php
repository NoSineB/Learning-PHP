<?php

use Core\Database;
use Core\Validator;
use Core\App;

$errors = [];

$db = App::container(Database::class);

if (!Validator::string($_POST["body"], 1, 1000)) {
    $errors['body'] = "Enter Body not more than 1000 characters";
}

if (! empty(($errors))){
    return view('notes/create.view.php', [
        'heading' => 'Add Note',
        'errors' => $errors
    ]);
}

if (empty($errors)) {
    $db->query("INSERT INTO `notes` (`id`, `body`, `user_id`) VALUES (DEFAULT, :body, :user_id);", [
        "body" => $_POST["body"],
        "user_id" => 1
    ]);

    header('location: /notes');
    exit();
}