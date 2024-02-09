<?php

namespace Http\Forms;

use Core\ValidationException;
use Core\Validator;

class ProfileForm implements Form {

    protected array $errors = [];

    public function __construct(public array $attributes) {
        if (!Validator::validateName($attributes['name'])) {
            $this->errors['name'] = 'Invalid name. It should only characters on range \'A\' to \'Z\' and it is case sensitive. ';
        }
        if (! Validator::validateUsername($attributes['username'])) {
            $this->errors['username'] = 'Username invalid';
        } 
        if (! Validator::validateEmail($attributes['email'])) {
            $this->errors['email'] = 'E-mail not valid';
        }

        // if (! Validator::validatePassword($attributes['password'])) {
        //     $this->errors['password'] = 'Password should have a minimum of 8 characters, and include at least one uppercase letter, a number and a special character';
        // }

        // if (! Validator::checkPassword($attributes['password'], $attributes['check_password'])) {
        //     $this->errors['check_password'] = 'Passwords do not match';
        // }
    }


    public static function validate(array $attributes): ProfileForm {
        $instance = new static($attributes);
        return $instance->failed() ? $instance->throw() : $instance;
    }

    function throw() {
        ValidationException::throw($this->errors(), $this->attributes);
    }

    function failed(): bool {
        return count($this->errors);
    }

    function errors(): array {
        return $this->errors;
    }

    function add(string $field, string $message): ProfileForm {
        $this->errors[$field] = $message;
        return $this;
    }
}



