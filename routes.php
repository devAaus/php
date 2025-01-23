<?php

$router->get('/', 'controllers/index.php');
$router->get('/about', 'controllers/about.php');
$router->get('/contact', 'controllers/contact.php');

$router->get('/posts', 'controllers/posts/index.php')->only('auth');
$router->get('/post', 'controllers/posts/show.php');
$router->delete('/post', 'controllers/posts/destroy.php');

$router->get('/post/edit', 'controllers/posts/edit.php');
$router->patch('/post', 'controllers/posts/update.php');

$router->get('/posts/create', 'controllers/posts/create.php');
$router->post('/posts', 'controllers/posts/store.php');

$router->get('/register', 'controllers/registration/create.php')->only('guest');
$router->post('/register', 'controllers/registration/store.php');

$router->get('/login', 'controllers/session/create.php')->only('guest');
$router->post('/session', 'controllers/session/store.php')->only('guest');
$router->delete('/session', 'controllers/session/destroy.php')->only('auth');
