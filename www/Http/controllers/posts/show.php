<?php

use Core\Database;
use Core\App;
use Core\Session;

$db = App::resolve(Database::class);

$post = $db->query('Select * from blog_posts where id = :id', [
    ':id' => $_GET['id'],
])->findOrFail();

$author = $db->query('Select * from users where id = :id', [
    'id' => $post['author_id']
])->find();

$post['author_name'] = $author['name'] ?? $author['username'];

(bool) is_null(Session::get('user')) ? $userIsAuthor = false : $userIsAuthor = $post['author_id'] === Session::get('user')['id'];

view("posts/show.view.php", [
    'post' => $post,
    'authorize' => $userIsAuthor
]); 