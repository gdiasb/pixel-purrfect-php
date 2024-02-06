<?php

namespace Core;

use Core\Database;
use Core\App;
use Core\Session;

class Authenticator {

    protected $errors = [];

    function attempt(string $email, string $password): array {

        $user = App::resolve(Database::class)->query('Select * from users where email = :email', [
            'email' => $email
        ])->find();

        if ($user) {
            if (! password_verify($password, $user['password'])) {
                $this->errors['password'] = 'Incorrect password, try again';
                return $this->errors;
            }
            
            $this->login($user);
            return [];
        }

        $this->errors['email'] = 'Ops, looks like you don\'t have an account. Wanna register instead?';

        
        return $this->errors;
    }


    public static function login(array $user): void {
        $_SESSION['user'] = $user;

        session_regenerate_id(true);
    }

    public static function logout():void {
        Session::destroy();
    }
}