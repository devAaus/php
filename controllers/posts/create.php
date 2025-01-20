<?php

use Core\Database;
use Core\Validator;

$config = require base_path('config.php');
$db = new Database($config['database']);

$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


   if (!Validator::string($_POST['title'], 1, 100)) {
      $errors['title'] = 'Title should be greater than 1 and less than 100 characters';
   }

   if (empty($errors)) {
      $db->query('INSERT INTO posts(title, user_id) VALUES(:title, :user_id)', [
         'title' => $_POST['title'],
         'user_id' => 1,

      ]);
   }
}

view("posts/create.view.php", [
   'heading' => 'Create Post',
   'errors' => $errors
]);
