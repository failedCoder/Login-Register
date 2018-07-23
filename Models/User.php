<?php

namespace App\Models;

class User {

	private $query;

	public function __construct($queryBuilder)
	{

		$this->query = $queryBuilder;

	}

	public function login($username, $password)
	{
		
		$hash = $this->query->fetchHashIfUserExists($username);

		if (password_verify($password, $hash)) {
			
			$_SESSION["username"] = $username;

			$_SESSION["authorized"] = true;

			return true;

		} 
			
		return false;
	
	}

	public function register($username, $password)
	{

		$cleanUserName = htmlspecialchars($username);

		$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

		return $this->query->insertUser($cleanUserName, $hashedPassword); 

	}

	public function logout()
	{

		session_start();

		session_destroy();

		header("Location: /");
		
	}
}