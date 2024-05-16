<?php

use Core\Database;
use Core\Validator;
use Core\App;


$db = App::container(Database::class);

$currentUser = 1;

$note = $db->query('select * from notes where id = :id', ['id' => $_POST['id']])->findOrFail();

authorise($note['user_id'] == $currentUser);

$errors = [];

if (!Validator::string($_POST["body"], 1, 1000)) {
    $errors['body'] = "Enter Body not more than 1000 characters";
}

if (!empty(($errors))) {
    return view('notes/edit.view.php', [
        'heading' => 'Edit Note',
        'errors' => $errors,
        'note'=> $note
    ]);
}

$db->query('update notes set body = :body where id = :id', [
    'id' => $_POST['id'],
    'body' => $_POST['body']
]);

header('location: /notes');
exit();