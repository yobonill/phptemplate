<?php
	//------------Require the database model that connects to our database------------
		require_once 'db.model.php';
	//------------Require the database model that connects to our database------------

	//Define Timezone
		date_default_timezone_set('America/Santo_Domingo');	
	//Define Timezone

	//------------Function that allows us to add an user to the database------------
		function add_user() {
			// $password = hash('sha256', $pass); Example of encripting a password

			//Variables used for the query
				$code = db_quote($_POST['userCode']);
				$userType = db_quote($_POST['userLevel']);
				$name = db_quote($_POST['userName']);
				$lastname = db_quote($_POST['userLastName']);
				$user = db_quote($_POST['userUser']);
				//Encript the password for better security
					$password = db_quote($_POST['userPass']);
				//Encript the password for better security
			//Variables used for the query

			//Create a variable containing the query that inserts the user into the database
				$query = "INSERT INTO users (code, user_type, name, lastname, user, password) VALUES ('$code','$userType', '$name', '$lastname', '$user','$password')";
			//Create a variable containing the query that inserts the user into the database

			//Create a variable that runs the query
				$result = db_query($query);
			//Create a variable that runs the query

			//Check if the query ran correctly, if not return the error
			if($result === false) {
				$error = db_error();
				return $error;
			} else {
				return $result;
			}
			//Check if the query ran correctly, if not return the error
		}
	//------------Function that allows us to add an user to the database------------

	//------------Function that allows us to delete an user from the database------------
		function delete_user() {

			//Variables used for the query
				$code = db_quote($_POST['userCode']);
			//Variables used for the query

			//Create a variable containing the query that inserts the user into the database
				$query = "DELETE FROM users WHERE code = '$code'";
			//Create a variable containing the query that inserts the user into the database

			//Create a variable that runs the query
				$result = db_query($query);
			//Create a variable that runs the query

			//Check if the query ran correctly, if not return the error
			if($result === false) {
				$error = db_error();
				return $error;
			} else {
				return $result;
			}
			//Check if the query ran correctly, if not return the error
		}
	//------------Function that allows us to delete an user from the database------------

	//------------Function to get all the users from database ------------
		function select_users(){
			//Create a variable that contains the query that log in the page
				$query = "SELECT id_user, code, user, name, lastname, user_type FROM users";
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

	//------------Function that allows us to add an user to the database------------
		function edit_user() {
			// $password = hash('sha256', $pass); Example of encripting a password

			//Variables used for the query
				$idUser = $_POST['id_user'];

				if (isset($_POST['editUserCode'])) {
					$code = db_quote($_POST['editUserCode']);
				}
				if (isset($_POST['editUserLevel'])) {
					$userType = db_quote($_POST['editUserLevel']);
				}
				if (isset($_POST['editUserName'])) {
					$name = db_quote($_POST['editUserName']);
				}
				if (isset($_POST['editUserLastName'])) {
					$lastname = db_quote($_POST['editUserLastName']);
				}
				if (isset($_POST['editUserUser'])) {
					$user = db_quote($_POST['editUserUser']);
				}
				if (isset($_POST['editUserPass'])) {
					//Encript the password for better security
						$password = db_quote($_POST['editUserPass']);
					//Encript the password for better security
				}
			//Variables used for the query

			//Create a variable containing the query that inserts the user into the database
				$query = "UPDATE users SET code = isNull('$code', code) WHERE id_user = '$idUser'";
			//Create a variable containing the query that inserts the user into the database

			//Create a variable that runs the query
				$result = db_query($query);
			//Create a variable that runs the query

			//Check if the query ran correctly, if not return the error
			if($result === false) {
				$error = db_error();
				return $error;
			} else {
				return $result;
			}
			//Check if the query ran correctly, if not return the error
		}
	//------------Function that allows us to add an user to the database------------
?>