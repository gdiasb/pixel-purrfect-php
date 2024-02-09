<?php

use Core\App;
use Core\Database;
use Core\Session;
use Http\Forms\ProfileForm;


$db = App::resolve(Database::class);

$form = ProfileForm::validate([
    'name' => $_POST['name'],
    'username' => $_POST['username'],
    'email' => $_POST['email'],
#    'password' => $_POST['password']
]);



if (! empty($form->errors())) {
    Session::flash('errors', $form->errors());
    Session::flash('old', [
        'name' => $_POST['name'],
        'username' => $_POST['username'],
        'email' => $_POST['email'],
#        'password' => $_POST['password']
    ]);

    view('profile/edit.view.php', [
        'errors' => $form->errors()
    ]);
}

$db->query('Update users set name=:name, username=:username, email=:email where id = :id', [
    'id' => Session::get('user')['id'],
    'name' => $_POST['name'],
    'username' => $_POST['username'],
    'email' => $_POST['email'],
#    'password' => $_POST['password']
]);

$user = $db->query('Select * from users where id = :id', [
    'id' => Session::get('user')['id']
])->find();

Session::put('user', $user);

redirect('/profile');