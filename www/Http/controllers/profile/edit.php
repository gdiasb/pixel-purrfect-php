<?php

use Core\Session;

view('profile/edit.view.php', [
    'user' => Session::get('user'),
    'errors' => Session::get('errors')
]);