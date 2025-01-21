<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$currentUserId = 1;


$post = $db->query('select * from posts where id = :id', [
   'id' => $_POST['id']
])->findOrFail();

authorize($post['user_id'] === $currentUserId);

// form was submitted. delete the current post.
$db->query('DELETE FROM posts WHERE id = :id', [
   'id' => $_POST['id']
]);

header('location: /posts');
exit();
