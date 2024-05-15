<?php

use Core\Database;

$config = require base_dir('config.php');
$db = new Database($config['database']);
$currentUser = 1;


$note = $db->query('select * from notes where id = :id', ['id' => $_GET['id']])->findOrFail();

authorise($note['user_id'] == $currentUser);

view('notes/show.view.php', [
    'heading' => 'Note',
    'note' => $note
]);