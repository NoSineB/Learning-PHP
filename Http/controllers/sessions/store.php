<?php

use Core\Authenticator;
use Http\LoginForm;
use Core\Session;

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

$_SESSION['_flash']['old']['email'] = $email;

Session::flash('errors', $form->errors());

return redirect('/login');