<?php

use Core\Authenticator;
use Http\LoginForm;

$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];

$form = new LoginForm();

if($form->validate($email, $password)){
    if ((new Authenticator)->authenticate($email, $password)) {
        redirect('/');
    }
    $form->error('msg', "No matching user with the given email or password");
}

return view('sessions/create.view.php', [
    'errors' => $form->errors(),
    'email' => $email,
    'password' => $password
]);