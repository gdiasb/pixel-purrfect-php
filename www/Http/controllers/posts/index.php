<?php

use Core\Database;
use Core\App;

$db = App::resolve(Database::class);

$posts = $db->query('Select * from blog_posts')->get();

foreach ($posts as $key => $post) {
    $author = $db->query('Select * from users where id = :id', [
        'id' => $post['author_id']
    ])->find();

    $posts[$key]['author_name'] = $author['name'] ?? $author['username'];
}


view("posts/index.view.php", [
    'posts' => $posts
]);