<?php

use Core\Authenticator;
use Core\Session;
use Http\Forms\LoginForm;

$email = $_POST['email'];
$password = $_POST['password'];

$form = new LoginForm();

if ($form->validate($email, $password)) {
   // authenticate the user and redirect to the home page
   if ((new Authenticator)->attempt($email, $password)) {
      redirect('/');
   }

   $form->error('email', 'Invalid email or password');
}

Session::flash('errors', $form->errors());
Session::flash('old', [
   'email' => $_POST['email']
]);

return redirect('/login');
