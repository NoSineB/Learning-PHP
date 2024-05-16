<?php 

namespace Http;

use Core\Validator;

class LoginForm{
    protected $errors = [];

    public function validate($email, $password){
        if (!Validator::email($email)) {
            $this->errors['msg'] = "Email has failed validation";
        }

        if (!Validator::string($password, 7, 23)) {
            $this->errors['msg'] = "Password has failed validation";
        }

        return empty($this->errors);
    }

    public function errors(){
        return $this->errors;
    }
}