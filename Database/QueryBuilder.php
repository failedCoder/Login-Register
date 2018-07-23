<?php

namespace App\Database;


#preforms database queries

class QueryBuilder {

	private $DB;
	
	public function __construct(\PDO $databaseConnection)
	{

		$this->DB = $databaseConnection;

	}


	/*username column is set to unique in the database,so the 
	query fails if username is taken*/

	public function insertUser($username, $password)
	{

		$query = "INSERT INTO users (username, password) VALUES (?, ?)";

		$statement = $this->DB->prepare($query);

		$statement->bindParam(1, $username);

		$statement->bindParam(2, $password);

		return $statement->execute();

	}

	#returns hashed password if the user exists

	public function fetchHashIfUserExists($username)
	{

		$query = "SELECT password FROM users WHERE username=?";

		$statement = $this->DB->prepare($query);

		$statement->bindParam(1, $username);

		$statement->execute();

		$result = $statement->fetch();

		return $result["password"];

	}
		
}