<?php
class dbConn{
	//parametars for initialazing new PDO object
	private static $host = "localhost";  
	private static $dbName = "authtest";  
	private static $user = "root";
	private static $pass = "";

	private static $connection;
    
    //function returns database connection if it exists,or crates a new one if it doesn't(singleton pattern)
	public static function getConn(){
		if(self::$connection === NULL){
          self::$connection = new PDO ("mysql:host=".self::$host.";dbname=".self::$dbName, self::$user, self::$pass);
		}
		return self::$connection;
	}
}


?>