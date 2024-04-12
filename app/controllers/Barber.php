<?php
namespace app\controllers;


class Barber extends \app\core\Controller
{
    public function browseBarbers()
    {
        $this->view('Barber/browse_barbers');
    }

    public function showSchedule(){
        $this->view('Barber/schedule');
    }


	
	function login(){
		//show the login form and log the user in
		if($_SERVER['REQUEST_METHOD'] === 'POST'){
			//log the user in... if the password is right
			//get the user from the database
			$barber = $_POST['username'];
			$barber = new \app\models\Barber();
			$barber = $barber->get($username);
			//check the password against the hash
			$password = $_POST['password'];
			if($barber && $barber->active && password_verify($password, $barber->password_hash)){
				//remember that this is the user logging in...
				$_SESSION['client_id'] = $barber->barber_id;

				header('location:/Barber/securePlace');
			}else{
				header('location:/Barber/login');
			}
		}else{
			$this->view('Barber/login');
		}
	}

	function logout(){
		//session_destroy();
		//$_SESSION['user_id'] = null;

		session_destroy();

		header('location:/Barber/login');
	}

	function securePlace(){
		if(!isset($_SESSION['barber_id'])){
			header('location:/Barber/login');
			return;
		}
		echo 'You are safe. You are in a secure location.';
	}

	function register(){
		//display the form and process the registration
		if($_SERVER['REQUEST_METHOD'] === 'POST'){
			//getting the user input and place it in an object
			//create the new User
			$barber = new \app\models\Barber();
			//populate the User
			$barber->username = $_POST['username'];
			$barber->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
			//insert the user
			$barber->insert();
			//redirect to a good place
			header('location:/Barber/login');
		}else{
			$this->view('Barber/registration');
		}
	}

	//update our own user record (only if I am logged in)
	function update(){
		if(!isset($_SESSION['barber_id'])){
			header('location:/Barber/login');
			return;
		}

		$barber = new \app\models\Barber();
		$barber = $barber->getById($_SESSION['barber_id']);

		if($_SERVER['REQUEST_METHOD'] === 'POST'){
			//process the update
			$barber->username = $_POST['username'];
			//change the password only if one is sent
			$password = $_POST['password'];
			if(!empty($password)){//should be false if ''
				$barber->password_hash = password_hash($password, PASSWORD_DEFAULT);
			}//otherwise remains as it was
			$barber->update();
			header('location:/Barber/update');
		}else{
			$this->view('Barber/update', $user);
		}
	}

	function delete(){
		if(!isset($_SESSION['barber_id'])){//is not logged in
			header('location:/Barber/login');
			return;
		}

		$barber = new \app\models\Barber();
		$barber = $barberbarber->getById($_SESSION['barber_id']);
		$barber->delete();
		header('location:/Barber/logout');
	}


}