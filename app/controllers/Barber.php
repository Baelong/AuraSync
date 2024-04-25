<?php
namespace app\controllers;

class Barber extends \app\core\Controller{
	
function login(){
	if($_SERVER['REQUEST_METHOD'] === 'POST'){
			//log the user in... if the password is right
			//get the user from the database
			
			$email = $_POST['email'];
			$barber = new \app\models\Barber();
			$barber = $barber->get($email);
			//check the password against the hash
			$password = $_POST['password'];
			if($barber && $barber->status && password_verify($password, $barber->password_hash)){
				//remember that this is the user logging in...
				$_SESSION['barber_id'] = $barber->barber_id;

				header('location:/Barber/securePlace');
			}else{
				header('location:/Barber/login');
			}
		}else{
			$this->view('Barber/login');
			
		}
}

function register(){
		//display the form and process the registration
		if($_SERVER['REQUEST_METHOD'] === 'POST'){
			//getting the user input and place it in an object
			//create the new User
			$barber = new \app\models\Barber();
			//populate the User
			$barber->email = $_POST['email'];
			$barber->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
			//insert the user
			$barber->insert();
			//redirect to a good place
			header('location:/Barber/login');
		}else{
			$this->view('Barber/register');
		}
	}

	function logout(){
		session_destroy();

		header('location:/Barber/login');
	}

}
