<?php
namespace app\controllers;

class Client extends \app\core\Controller{
	
function login(){
	if($_SERVER['REQUEST_METHOD'] === 'POST'){
			//log the user in... if the password is right
			//get the user from the database
			
			$email = $_POST['email'];
			$client = new \app\models\Client();
			$client = $client->get($email);
			//check the password against the hash
			$password = $_POST['password'];
			if($client && $client->status && password_verify($password, $client->password_hash)){
				//remember that this is the user logging in...
				$_SESSION['client_id'] = $client->client_id;

				header('location:/Client/securePlace');
			}else{
				header('location:/Client/login');
			}
		}else{
			$this->view('Client/login');
			
		}
}

function register(){
		//display the form and process the registration
		if($_SERVER['REQUEST_METHOD'] === 'POST'){
			//getting the user input and place it in an object
			//create the new User
			$client = new \app\models\Client();
			//populate the User
			$client->email = $_POST['email'];
			$client->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
			//insert the user
			$client->insert();
			//redirect to a good place
			header('location:/Client/login');
		}else{
			$this->view('Client/register');
		}
	}

}
