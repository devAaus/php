<?php

$config = require base_path('config.php');
$db = new Database($config['database']);

$posts = $db->query('select * from posts where user_id = 1')->get();


view("posts/index.view.php", [
   'heading' => 'My Posts',
   'posts' => $posts
]);
