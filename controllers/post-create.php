<?php

$config = require 'config.php';
$db = new Database($config['database']);

$heading = 'Create Post';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $db->query('INSERT INTO posts(title, user_id) VALUES(:title, :user_id)', [
      'title' => $_POST['title'],
      'user_id' => 1,

   ]);
}

require "views/post-create.view.php";
