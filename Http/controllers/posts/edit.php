<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentUserId = 1;


$post = $db->query('select * from posts where id = :id', [
   'id' => $_GET['id']
])->findOrFail();

authorize($post['user_id'] === $currentUserId);

view("posts/edit.view.php", [
   'heading' => 'Edit Post',
   'errors' => [],
   'post' => $post
]);
