<?php 

$router->get('/', 'index.php');
$router->get('/about', 'about.php');

$router->get('/posts', 'posts/index.php');
$router->post('/posts', 'posts/store.php');

$router->get('/post', 'posts/show.php');
$router->delete('/post', 'posts/destroy.php');


$router->get('/post/create', 'posts/create.php');
$router->get('/post/edit', 'posts/edit.php');
$router->patch('/post', 'posts/update.php');

$router->get('/register', 'registration/create.php')->only('guest');
$router->post('/register', 'registration/store.php')->only('guest');

$router->get('/login', 'session/create.php')->only('guest');
$router->post('/session', 'session/store.php')->only('guest');
$router->delete('/session', 'session/destroy.php')->only('auth');

$router->get('/profile', 'profile/index.php')->only('auth');