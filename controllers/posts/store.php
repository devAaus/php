<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$errors = [];

if (!Validator::string($_POST['title'], 1, 100)) {
   $errors['title'] = 'Title should be greater than 1 and less than 100 characters';
}

if (!empty($errors)) {
   return view("posts/create.view.php", [
      'heading' => 'Create Post',
      'errors' => $errors
   ]);
}

$db->query('INSERT INTO posts(title, user_id) VALUES(:title, :user_id)', [
   'title' => $_POST['title'],
   'user_id' => 1,

]);
header('location: /posts');
exit();
