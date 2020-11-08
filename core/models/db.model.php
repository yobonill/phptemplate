<?php  
	//--------------Handles the connection to the database--------------
		function db_connect() {
			// Define connection as a static variable, to avoid connection more than once
				static $connection;
			// Define connection as a static variable, to avoid connection more than once

			// Try and connect to the database, if a connection has not been stablished yet
				if(!isset($connection)) {
					//Load Configuration with config data as an array, to be able to use the directory root parameter
					    require('../../config.php');
					//Load Configuration with config data as an array, to be able to use the directory root parameter

					//Try and connect to the database
						$connection = mysqli_connect($config['__MYSQL_SERVER__'], $config['__MYSQL_USER__'], $config['__MYSQL_PASS__'], $config['__MYSQL_DATABASE__']);
					//Try and connect to the database
				}
			// Try and connect to the database, if a connection has not been stablished yet

			//Check if connection was successful, if not, return the error
				if($connection === false) {
					return mysqli_connect_error();
				}
			//Check if connection was successful, if not, return the error

			//Return the connection already made
				return $connection;
			//Return the connection already made
		}
	//--------------Handles the connection to the database--------------

	//--------------Handles the queries sent to the database--------------
		function db_query($query) {
			//connect to the database
				$connection = db_connect();
			//connect to the database

			//Query the database
				$result = mysqli_query($connection, $query);
			//Query the database

			//Return the variable with the result of the query
				return $result;
			//Return the variable with the result of the query
		}
	//--------------Handles the queries sent to the database--------------

	//--------------Handles the error returned from the database--------------
		function db_error() {
			//create a connection to the database
				$connection = db_connect();
			//create a connection to the database

			//Return the error in the connection to the database
				return mysqli_error($connection);
			//Return the error in the connection to the database
		}
	//--------------Handles the error returned from the database--------------

	//--------------Handles the select queries sent to the database--------------
		function db_select($query) {
			$rows = array();
			$result = db_query($query);

			//If query failed, return 'false'
				if($result === false) {
					return false;
				}
			//If query failed, return 'false'

			//If query was successful, retrieve all the rows into an array
				while ($row = mysqli_fetch_assoc($result)) {
					$rows[] = $row;
				}
				return $rows;
			//If query was successful, retrieve all the rows into an array
		}
	//--------------Handles the select queries sent to the database--------------

	//Escape inserted values in the query to avoid SQL injection
		function db_quote($value) {
			$connection = db_connect();
			return mysqli_real_escape_string($connection,$value);

			// Example
			// 	// Quote and escape form submitted values
			// 	$name = db_quote($_POST['username']);
			// 	$email = db_quote($_POST['email']);

			// 	// Insert the values into the database
			// 	$result = db_query("INSERT INTO `users` (`name`,`email`) VALUES (" . $name . "," . $email . ")");
			// // Example
		}
	//Escape inserted values in the query to avoid SQL injection
?>