<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$currentUserId = 1;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

   $post = $db->query('select * from posts where id = :id', [
      'id' => $_GET['id']
   ])->findOrFail();

   authorize($post['user_id'] === $currentUserId);

   // form was submitted. delete the current post.
   $db->query('DELETE FROM posts WHERE id = :id', [
      'id' => $_GET['id']
   ]);

   header('location: /posts');
   exit();
} else {

   $post = $db->query('select * from posts where id = :id', [
      'id' => $_GET['id']
   ])->findOrFail();

   authorize($post['user_id'] === $currentUserId);

   view("posts/show.view.php", [
      'heading' => 'Post',
      'post' => $post
   ]);
}
