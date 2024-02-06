<?php

use Core\Database;
use Http\Forms\PostForm;
use Core\App;
use Core\Session;

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

    redirect('/post/create');
}

$db->query('INSERT INTO blog_posts(create_time,author_id,post_body,post_title) VALUES(:create_time, :author_id, :post_body, :post_title)', [
    'create_time' => date("Y-m-d H:i:s"),
    'author_id' => Session::get('user')['id'],
    'post_body' => htmlspecialchars($_POST['post_body']),
    'post_title' => htmlspecialchars($_POST['post_title'])
]);

redirect('/posts');