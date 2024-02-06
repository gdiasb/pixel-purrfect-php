<?php

use Core\Database;
use Core\App;

$db = App::resolve(Database::class);

$three_posts = $db->query('Select * from blog_posts order by id desc limit 0, 3')->get();



foreach ($three_posts as $key => $post) {
    $author = $db->query('Select * from users where id = :id', [
        'id' => $post['author_id']
    ])->find();

    $three_posts[$key]['author_name'] = $author['name'] ?? $author['username'];
}


view("index.view.php", [
    'posts' => $three_posts
]);