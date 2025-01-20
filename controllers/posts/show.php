<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$currentUserId = 1;

$post = $db->query('select * from posts where id = :id', [
   'id' => $_GET['id']
])->findOrFail();

authorize($post['user_id'] === $currentUserId);


view("posts/show.view.php", [
   'heading' => 'Post',
   'post' => $post
]);
