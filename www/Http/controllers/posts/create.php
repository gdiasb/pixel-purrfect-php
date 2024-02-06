<?php

use Core\Session;

view("posts/create.view.php", [
    'errors' => Session::get('errors')
]); 