<?php

namespace Http\Forms;

use Core\ValidationException;
use Core\Validator;

class PostForm implements Form {

    protected array $errors = [];

    public function __construct(public array $attributes) {
        if (! Validator::validatePost($attributes['post_body'])) {
            $this->errors['post_body'] = 'The text must have one or more characters and less of 10,000';
        } 
        if (! Validator::validatePost($attributes['post_title'], 1, 1000)) {
            $this->errors['post_title'] = 'The title must have one or more characters and less of 1000';
        }
    }
    static function validate(array $attributes): PostForm {

        $instance = new static($attributes);
        return $instance->failed() ? $instance->throw() : $instance;
    }

    function failed(): bool {
        return count($this->errors);
    }

    function throw(): ValidationException {
        ValidationException::throw($this->errors(), $this->attributes);
    }

    function errors(): array {
        return $this->errors;
    }

    function add(string $field, string $message): PostForm {
        $this->errors[$field] = $message;
        return $this;
    }
}