<?php

$errors = [];

view('notes/create.view.php', [
    'heading' => 'Add Note',
    'errors' => $errors
]);

