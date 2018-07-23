<?php

//Bootstrap file for loading all necessary components 

require_once "vendor/autoload.php";

$config = require_once "config.php";

$connection = App\Database\Connection::make($config["database"]);

$query = new App\Database\QueryBuilder($connection);

$user = new App\Models\User($query);