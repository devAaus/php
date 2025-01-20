<?php

require 'Validator.php';

$config = require 'config.php';
$db = new Database($config['database']);

$heading = 'Create Post';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $errors = [];

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

require "views/posts/create.view.php";
