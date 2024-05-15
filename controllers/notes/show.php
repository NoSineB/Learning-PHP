<?php

use Core\App;
use Core\Database;

$db = App::container(Database::class);

$currentUser = 1;


$note = $db->query('select * from notes where id = :id', ['id' => $_GET['id']])->findOrFail();

authorise($note['user_id'] == $currentUser);

view('notes/show.view.php', [
    'heading' => 'Note',
    'note' => $note
]);