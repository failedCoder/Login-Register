<?php


$router->get('', 'controllers/IndexController.php');

$router->get('login', 'controllers/FormController.php');

$router->get('register', 'controllers/FormController.php');

$router->get('homepage', 'controllers/HomeController.php');

$router->post('login', 'controllers/LoginController.php');

$router->post('register', 'controllers/RegisterController.php');

$router->post('logout', 'controllers/LogoutController.php');
