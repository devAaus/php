<?php

$config = require 'config.php';
$db = new Database($config['database']);

$heading = 'Posts';

$posts = $db->query('select * from posts where user_id = 4')->fetchAll();

require "views/posts.view.php";
