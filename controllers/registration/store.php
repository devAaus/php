<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$email = $_POST['email'];
$password = $_POST['password'];
$errors = [];

// validate email and password
if (!Validator::email($email)) {
   $errors['email'] = 'Please provide a valid email address.';
}

if (!Validator::string($password, 6, 255)) {
   $errors['password'] = 'Please provide a password of at least seven characters.';
}

// if there are any validation errors, return the registration form with the errors.
if (! empty($errors)) {
   return view('registration/create.view.php', [
      'errors' => $errors
   ]);
}

// check if the user already exists
$user = $db->query('select * from users where email = :email', [
   'email' => $email
])->find();

// if the user already exists, redirect the user to the login form with an error message.
if ($user) {
   header('location: /');
   exit();
} else {
   // if the user does not exist, create the user and log them in.
   $db->query('INSERT INTO users(email, password) VALUES(:email, :password)', [
      'email' => $email,
      'password' => $password // NEVER store database passwords in clear text. We'll fix this in the login form episode. :)
   ]);

   $_SESSION['user'] = [
      'email' => $email
   ];

   // redirect the user to the home page.
   header('location: /');
   exit();
}
