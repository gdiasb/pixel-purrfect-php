<?php


namespace Http\Forms;

use Core\Validator;
use Core\ValidationException;

class RegisterForm implements Form {

    protected $errors = [];

    public function __construct(public array $attributes) {

        if (! Validator::validateUsername($attributes['username'])) {
            $this->errors['username'] = 'Username invalid';
        } 
        if (! Validator::validateEmail($attributes['email'])) {
            $this->errors['email'] = 'E-mail not valid';
        }

        if (! Validator::validatePassword($attributes['password'])) {
            $this->errors['password'] = 'Password should have a minimum of 8 characters, and include at least one uppercase letter, a number and a special character';
        }

        if (! Validator::checkPassword($attributes['password'], $attributes['check_password'])) {
            $this->errors['check_password'] = 'Passwords do not match';
        }
    }

    public static function validate(array $attributes): RegisterForm {

        $instance = new static($attributes);
        return $instance->failed() ? $instance->throw() : $instance;
    }

    public function throw(): ValidationException {
        ValidationException::throw($this->errors(), $this->attributes);
    }

    public function failed(): bool {
        return count($this->errors);
    }

    public function errors(): array {
        return $this->errors;
    }

    public function add(string $field, string $message): RegisterForm {
        $this->errors[$field] = $message;
        return $this;
    }

}