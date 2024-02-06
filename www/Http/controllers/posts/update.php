<?php

use Core\Database;
use Core\App;
use Core\Session;
use Http\Forms\PostForm;

$db = App::resolve(Database::class);


$form = PostForm::validate([
    'post_title' => $_POST['post_title'],
    'post_body' => $_POST['post_body']
]);


if (! empty($form->errors())) {
    Session::flash('errors', $form->errors()); 
    Session::flash('old', [
        'post_title' => $_POST['post_title'],
        'post_body' => $_POST['post_body']
    ]);
    
    view('posts/edit.view.php', [
        'errors' => $form->errors()
    ]);
}

$db->query('Update blog_posts set post_title=:post_title, post_body=:post_body where id = :id', [
    'id' => $_POST['id'],
    'post_body' => htmlspecialchars($_POST['post_body']),
    'post_title' => htmlspecialchars($_POST['post_title'])
]);

redirect('/posts');

