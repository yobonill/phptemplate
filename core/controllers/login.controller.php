<?php 
	//Start the session if it is not already started
		if (!isset($_SESSION)) {
			session_start();
		}
	//Start the session if it is not already started

	//Load Configuration with config data as an array, to be able to use the directory root parameter
        require_once($_SERVER['DOCUMENT_ROOT'] . '/plantillaphp/config.php');
	//Load Configuration with config data as an array, to be able to use the directory root paramete

	//Require db and user model to use the functions in this file
		require_once($config['__DOCUMENT_ROOT__'] . '/models/user.model.php');
	//Require db and user model to use the functions in this file

	//Require db and user model to use the functions in this file

	//Log in if the requirements are met
		//check if $_POST has the values user and pass
		if (isset($_POST['user']) && isset($_POST['pass'])) {
		//check if $_POST has the values user and pass
			//if they do, assign those to a variable
				$user = db_quote($_POST['user']);
				//Encript the password to match with encripted pass in database
					$pass = db_quote($_POST['pass']);
				//Encript the password to match with encripted pass in database
			//if they do, assign those to a variable

			//run the function that logs in the user
				$result = login(strtoupper($user), strtoupper($pass));
			//run the function that logs in the user

			if (!is_string($result)) {
				//Assign the values of result to the $_SESSION variable
                    foreach ($result as $value) {
                        $_SESSION = $value;
                    }
				//Assign the values of result to the $_SESSION variable

				//Send the user to the index page and return a message
                    $_SESSION['msj'] = "success";
                    $_SESSION['msjTitle'] = "Exito";
                    $_SESSION['msjText'] = "Estas logeado en el sistema";
                    header("Location: ../../?view=default");    
                //Send the user to the index page and return a message
                
			} else {
				//Send the user to the index page and return a message
                    $_SESSION['msj'] = "error";
                    $_SESSION['msjTitle'] = "Error";
                    $_SESSION['msjText'] = $result;
                    header("Location: ../../?view=login");
				//Send the user to the index page and return a message
			}
		}
	//Log in if the requirements are met
?>