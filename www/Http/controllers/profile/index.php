<?php 

use Core\Session; 


$user = Session::get('user');


view('profile/index.view.php', [
    'user' => $user
]);