<?php

namespace Core;

class Authenticator{
    public function attempt($email, $password){
        $user = (App::container(Database::class))->query('select * from user where email = :email', [
            'email' => $email,
        ])->find();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                login([
                    'email' => $email
                ]);
                return true;
            }
        }
        return false;
    }
}