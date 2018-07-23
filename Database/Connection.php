<?php

namespace App\Database;


#class using singleton to fetch single instance of database connection

class Connection {

	private static $instance;

	public static function make($config){

		if(self::$instance === NULL) {

			self::$instance = new \PDO (

				"mysql:host=" . $config['host'] . ";
				dbname=" . $config['name'],$config['username'],$config['password']
			);

		}

		return self::$instance;

	}
}

