<?php
 
use Core\Database;
use Core\App;
use Core\Session;
use Core\Authenticator;
use Http\Forms\RegisterForm;

$db = App::resolve(Database::class);
$auth = new Authenticator;


$form = RegisterForm::validate($attributes = [
    'username' => $_POST['username'],
    'email' => $_POST['email'],
    'password'=> $_POST['password'],
    'check_password' => $_POST['check_password']
]);



$user = $db->query('Select * from users where email = :email', [ 
    'email' => $_POST['email']
])->find();


if ($user) {
    $form->add('email', 'Ops, looks like you already have an account.')->throw();
}
    


if (! empty($form->errors())) {
    Session::flash('errors', $form->errors());
    Session::flash('old', [
        'username' => $_POST['username'], 
        'email' => $_POST['email']
    ]);
    redirect('/register');
}

$db->query('INSERT INTO users(email, username, password) VALUES(:email, :username, :password)', [
    'email' => $_POST['email'],
    'username' => $_POST['username'],
    'password' => password_hash($_POST['password'], PASSWORD_BCRYPT)
]);


$user = $db->query('Select * from users where email = :email', [ 
    'email' => $_POST['email']
])->find();

$auth->login($user);

redirect('/posts');

