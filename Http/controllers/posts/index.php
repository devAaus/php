<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$posts = $db->query('select * from posts where user_id = 1')->get();


view("posts/index.view.php", [
   'heading' => 'My Posts',
   'posts' => $posts
]);
