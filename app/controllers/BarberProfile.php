<?php
namespace app\controllers;

#[\app\filters\BarberLogin]
class BarberProfile extends \app\core\Controller{
	
  #[\app\filters\HasBarberProfile]
	public function index(){
		$barberProfile = new \app\models\BarberProfile();
		$barberProfile = $barberProfile->getForUser($_SESSION['barber_id']);

		//redirect a user that has no profile to the profile creation URL
		$this->view('BarberProfile/index',$barberProfile);
	}
/*
  public function browse_barbers()
  {
    $barberModel = new \app\models\BarberProfile(); 
    $allBarbers = $barberModel->getAll();
    $this->view('BarberProfile/browse_barbers',$allBarbers);
  }

  public function search()
  {
    if($_SERVER['REQUEST_METHOD'] === 'POST'){//data is submitted through method POST
			//make a new profile object
      $barberModel = new \app\models\BarberProfile(); 
      $barberProfile = $barberModel->getByName($_POST['name']);
			$this->view('BarberProfile/search',$barberProfile);
		}
    else{
      $this->view('BarberProfile/browse_barbers');
    }
  }
  
  public function choose()
  {
    if($_SERVER['REQUEST_METHOD'] === 'POST'){//data is submitted through method POST
			//make a new profile object
      $barberModel = new \app\models\BarberProfile();
      $barberProfile = $barberModel->getByProfileID($_POST['barber_profile_id']);
      $serviceModel = new \app\models\Service(); 
      $barberServices = $serviceModel->getForUser($_POST['barber_profile_id']);
      $availabilityModel = new \app\models\Availability(); 
      $availabilities = $availabilityModel->getForUser($_POST['barber_profile_id']);
			$this->view('BarberProfile/choose',$barberProfile,$barberServices,$availabilities);
		}
    else{
      $this->view('BarberProfile/browse_barbers');
    }
  }
*/
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










