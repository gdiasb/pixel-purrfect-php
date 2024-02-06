<?php

use Core\Database;
use Core\App;
use Core\Session;

$db = App::resolve(Database::class);

$post = $db->query('Select * from blog_posts where id = :id', [
    ':id' => $_GET['id'],
])->findOrFail();

$user_id = Session::get('user')['id'];

authorize($post['author_id'] === $user_id);


$db->query('Delete from blog_posts where id=:id', [
    ':id' => $_GET['id']
]);

header('location: /posts');