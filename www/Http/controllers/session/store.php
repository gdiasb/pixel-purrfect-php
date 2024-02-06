<?php


use Core\Authenticator;


$errors = (new Authenticator)->attempt($_POST['email'], $_POST['password']);

if (! empty($errors)) {
    return view("session/create.view.php", [
        'errors' => $errors
    ]);
}

redirect('/');