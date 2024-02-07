<?php 

namespace Core;

class Validator {
    public static function validatePost(string $value, int $min = 1, int $max = 10000): bool {
        return strlen(trim($value)) >= $min && strlen(trim($value)) <= $max;
    }

    public static function validateEmail(string $value):bool {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    public static function validateUsername(string $username): bool {
        return preg_match('/^[a-zA-Z][0-9a-zA-Z_]{2,10}[0-9a-zA-Z]$/', $username);
    }

    public static function validatePassword(string $password): bool {
        return preg_match('/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[@#!$%^&+=])(?=\S+$).{8,}$/', $password);
    }

    public static function checkPassword(string $password, string $check_password): bool {
        return strcmp($password, $check_password) == 0;
    }

    public static function validateName(string $name): bool {
        return preg_match('/(^[a-zA-Z][a-zA-Z\s]{0,20}[a-zA-Z]$)/', $name);
    }
}