<?php
	//------------Require the database model that connects to our database------------
		require_once 'db.model.php';
	//------------Require the database model that connects to our database------------

	//Define Timezone
		date_default_timezone_set('America/Santo_Domingo');	
	//Define Timezone

	//------------Function to log into the web page ------------

		function login($user, $pass){

			//Create a variable that contains the query that log in the page
				$query = "SELECT id_usuario, tipo, nombre, apellido, usuario FROM usuarios WHERE usuario = '$user' AND pass = '$pass'";
			//Create a variable that contains the query that log in the page

			//Run the query and assign it to the variable result
				$result = db_select($query);
			//Run the query and assign it to the variable result

			//Check if the query ran correctly, if not return the error
				if($result === false) {
					$error = db_error();
					return $error;
				} else {
					return $result;
				}
			//Check if the query ran correctly, if not return the error
		}
	//------------Function to log into the web page ------------

	//------------Function to get all the users from database ------------

		function selectUsers(){
			//Create a variable that contains the query that log in the page
				$query = "SELECT id_usuario, tipo, nombre, apellido, usuario FROM usuarios";
			//Create a variable that contains the query that log in the page

			//Run the query and assign it to the variable result
				$result = db_select($query);
			//Run the query and assign it to the variable result

			//Check if the query ran correctly, if not return the error
				if($result === false) {
					$error = db_error();
					return $error;
				} else {
					return $result;
				}
			//Check if the query ran correctly, if not return the error
		}
	//------------Function to get all the users from database ------------

	//------------Check if the user is login------------
		function isLogin(){
			return isset($_SESSION['id_usuario']);
		}
	//------------Check if the user is login------------

	//------------Check if the user is and Admin depending on the level on the database------------
		function isAdmin(){
			if(isset($_SESSION['tipo']) && $_SESSION['tipo'] == 'ADMIN'){
				return true;
			} else {
				return false;
			}
		}
	//------------Check if the user is and Admin depending on the level on the database------------
	
	//------------Log out of the user------------
		function logout(){
			return session_destroy();
		}
	//------------Log out of the user------------

?>