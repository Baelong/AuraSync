<?php
namespace app\controllers;

#[\app\filters\ClientLogin]
class ClientProfile extends \app\core\Controller{

    #[\app\filters\HasClientProfile]
	public function index(){
		$clientProfile = new \app\models\ClientProfile();
		$clientProfile = $clientProfile->getForUser($_SESSION['client_id']);

		//redirect a user that has no profile to the profile creation URL
		$this->view('ClientProfile/index',$clientProfile);
	}
    public function createProfile(){
		if($_SERVER['REQUEST_METHOD'] === 'POST'){//data is submitted through method POST
			//make a new profile object
			$clientProfile = new \app\models\ClientProfile();
			//populate it
			$clientProfile->client_id = $_SESSION['client_id'];
			$clientProfile->first_name = $_POST['first_name'];
			$clientProfile->last_name = $_POST['last_name'];
            $clientProfile->age = $_POST['age'];
			$clientProfile->phone_number = $_POST['phone_number'];
			//insert it
			$clientProfile->insert();
			//redirect
			header('location:/ClientProfile/index');
		}else{
			$this->view('ClientProfile/createProfile');
		}
	}

	public function modify(){
		$profile = new \app\models\Profile();
		$profile = $profile->getForUser($_SESSION['user_id']);

		if($_SERVER['REQUEST_METHOD'] === 'POST'){//data is submitted through method POST
			//make a new profile object
			//populate it
			$profile->first_name = $_POST['first_name'];
			$profile->last_name = $_POST['last_name'];
			//update it
			$profile->update();
			//redirect
			header('location:/Profile/index');
		}else{
			$this->view('Profile/modify', $profile);
		}
	}

	public function delete(){
		//present the user with a form to confirm the deletion that is requested and delete if the form is submitted
/*		//make sure that the user is logged in
		if(!isset($_SESSION['user_id'])){
			header('location:/User/login');
			return;
		}
*/
		$profile = new \app\models\Profile();
		$profile = $profile->getForUser($_SESSION['user_id']);

		if($_SERVER['REQUEST_METHOD'] === 'POST'){
			$profile->delete();
			header('location:/Profile/index');
		}else{
			$this->view('Profile/delete',$profile);
		}
	}
}

