<?php 

use Core\Session; 
use Core\Database;
use Core\App;

$db = App::resolve(Database::class);
$user = Session::get('user');

$my_posts = $db->query('Select * from blog_posts where author_id = :author_id', [
    'author_id' => $user['id']
])->get();


view('profile/index.view.php', [
    'user' => $user,
    'my_posts' => $my_posts
]);