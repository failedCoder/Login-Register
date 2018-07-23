<?php

namespace App\Controllers;


#barebones uri router

class Router {

	private $routes = [

		'GET' => [],

		'POST' => []

	];

	#registering routes with GET method

	public function get($uri, $controller)
	{

		$this->routes["GET"][$uri] = $controller;

	}

	#registering routes with POST method

	public function post($uri, $controller)
	{
		
		$this->routes["POST"][$uri] = $controller;

	}

	#returns the controller name that matches the uri and method in routes.php file

	public function directTo($uri, $method)
	{
		if (array_key_exists($uri, $this->routes[$method])) {
			
			return $this->routes[$method][$uri];

		} 

		throw new \Exception("Route not found", 1);
		
	}

}