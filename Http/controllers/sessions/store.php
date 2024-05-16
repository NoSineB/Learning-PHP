<?php

use Core\App;
use Core\Database;
use Http\LoginForm;

$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];

$db = App::container(Database::class);

$form = new LoginForm();
$result = $form->validate($email, $password);

if(! $result){
    return view('sessions/create.view.php', [
        'errors' => $form->errors(),
        'email' => $email,
        'password' => $password
    ]);
}

$user = $db->query('select * from user where email = :email', [
    'email' => $email,
])->find();

if($user){
    if (password_verify($password, $user['password'])) {
        login([
            'email' => $email
        ]);

        header('location: /');
        exit();
    }
}

$errors['msg'] = "No matching user with the given email or password";
return view('sessions/create.view.php', [
    'errors' => $errors,
    'email' => $email,
    'password' => $password
]);