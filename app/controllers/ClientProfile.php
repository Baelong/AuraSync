<?php
namespace app\controllers;

#[\app\filters\ClientLogin]
class ClientProfile extends \app\core\Controller{

    #[\app\filters\HasClientProfile]
	public function index(){
		$clientProfile = new \app\models\ClientProfile();
		$clientProfile = $clientProfile->getForUser($_SESSION['client_id']);
		$_SESSION['client_profile_id'] = $clientProfile->client_profile_id;
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
			$_SESSION['client_profile_id'] = $clientProfile->client_profile_id;
			header('location:/ClientProfile/index');
		}else{
			$this->view('ClientProfile/createProfile');
		}
	}

	public function editprofile(){
		$clientProfile = new \app\models\ClientProfile();
		$clientProfile = $clientProfile->getForUser($_SESSION['client_id']);

		if($_SERVER['REQUEST_METHOD'] === 'POST'){//data is submitted through method POST
			//make a new profile object
			//populate it
			$clientProfile->first_name = $_POST['first_name'];
			$clientProfile->last_name = $_POST['last_name'];
			$clientProfile->age = $_POST['age'];
			$clientProfile->last_name = $_POST['last_name'];
			//update it
			$clientProfile->update();
			//redirect
			header('location:/ClientProfile/index');
		}else{
			$this->view('ClientProfile/editprofile', $clientProfile);
		}
	}

}

