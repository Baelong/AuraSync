<?php
namespace app\controllers;

#[\app\filters\BarberLogin]
class BarberProfile extends \app\core\Controller{
	
  #[\app\filters\HasBarberProfile]
	public function index(){
		$barberProfile = new \app\models\BarberProfile();
		$barberProfile = $barberProfile->getForUser($_SESSION['barber_id']);
		$_SESSION['barber_profile_id'] = $barberProfile->barber_profile_id;
		//redirect a user that has no profile to the profile creation URL
		$this->view('BarberProfile/index',$barberProfile);
	}

  public function createProfile(){
		if($_SERVER['REQUEST_METHOD'] === 'POST'){//data is submitted through method POST
			//make a new profile object
			$barberProfile = new \app\models\BarberProfile();
			//populate it
			$barberProfile->barber_id = $_SESSION['barber_id'];
			$barberProfile->first_name = $_POST['first_name'];
			$barberProfile->last_name = $_POST['last_name'];
      		$barberProfile->age = $_POST['age'];
			$barberProfile->phone_number = $_POST['phone_number'];
     		 $barberProfile->bio = $_POST['bio'];
			//insert it
			$barberProfile->insert();
			$_SESSION['barber_profile_id'] = $barberProfile->barber_profile_id;
			//redirect
			header('location:/BarberProfile/index');
		}else{
			$this->view('BarberProfile/createProfile');
		}
	}

	public function editProfile(){
		$profile = new \app\models\BarberProfile();
		$profile = $profile->getForUser($_SESSION['barber_id']);

		if($_SERVER['REQUEST_METHOD'] === 'POST'){//data is submitted through method POST
			//make a new profile object
			//populate it
			$profile->first_name = $_POST['first_name'];
			$profile->last_name = $_POST['last_name'];
      $profile->bio = $_POST['bio'];
      $profile->phone_number = $_POST['phone_number'];
      $profile->age = $_POST['age'];
			//update it
			$profile->update();
			//redirect
			header('location:/BarberProfile/index');
		}else{
			$this->view('BarberProfile/editProfile', $profile);
		}
	}

}










