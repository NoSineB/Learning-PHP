<?php

use Core\App;
use Core\Database;

$db = App::container(Database::class);

$currentUser = 1;


$note = $db->query('select * from notes where id = :id', ['id' => $_GET['id']])->findOrFail();

authorise($note['user_id'] == $currentUser);

$errors = [];

view('notes/edit.view.php', [
    'heading' => 'Edit Note',
    'errors' => $errors,
    'note'=> $note,
]);
