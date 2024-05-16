<?php

use Core\App;
use Core\Database;
use Core\Validator;

$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];

$db = App::container(Database::class);

if (!Validator::email($email)) {
    $errors['msg'] = "Incorrect email or password";
}

if (!empty(($errors))) {
    return view('register/index.view.php', [
        'errors' => $errors,
        'email' => $email,
        'password' => $password
    ]);
}

$result = $db->query('select * from user where email = :email', [
    'email' => $email,
])->find();

if($result){
    $errors['msg'] = 'User Already Exists';
    return view('register/index.view.php', [
        'errors' => $errors,
        'email' => $email,
        'password' => $password
    ]);
}

$db->query('INSERT INTO `user` (`id`, `email`, `password`) VALUES (DEFAULT, :email, :password);', [
    'email' => $email,
    'password' => password_hash($password, PASSWORD_DEFAULT)
]);

login([
    'email' => $email
]);

header('location: /');
exit();