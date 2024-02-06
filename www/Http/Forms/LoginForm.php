<?php

namespace Http\Forms;

use Core\Validator;


class LoginForm {

    protected $errors = [];

    public function validate(string $email, string $username): bool {
        if (! Validator::validateUsername($username)) {
            $this->errors['username'] = 'Username invalid';
        } 
        if (! Validator::validateEmail($email)) {
            $this->errors['email'] = 'E-mail not valid';
        }

        return empty($this->errors);
    }

    public function errors(): array {
        return $this->errors;
    }

    public function add(string $field, string $message): void {
        $this->errors[$field] = $message;
    }


}