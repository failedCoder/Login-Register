<?php

//App entry point

require_once "bootstrap.php";

$router = new App\Controllers\Router();

require_once "routes.php";

$method = $_SERVER["REQUEST_METHOD"];

$uri = trim($_SERVER["REQUEST_URI"],'/');

require $router->directTo($uri, $method);









