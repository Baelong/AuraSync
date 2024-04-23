<?php
namespace app\controllers;

class BarberProfile extends \app\core\Controller{

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

  public function index()
  {
    if($_SERVER['REQUEST_METHOD'] === 'POST'){//data is submitted through method POST
			//make a new profile object
      $barberModel = new \app\models\BarberProfile(); 
      $barberProfile = $barberModel->getByProfileID($_POST['barber_profile_id']);
      $serviceModel = new \app\models\Service(); 
      $barberServices = $serviceModel->getForUser($_POST['barber_profile_id']);
      $availabilityModel = new \app\models\Availability(); 
      $availabilities = $availabilityModel->getForUser($_POST['barber_profile_id']);
			$this->view('BarberProfile/index',$barberProfile,$barberServices,$availabilities);
		}
    else{
      $this->view('BarberProfile/browse_barbers');
    }
  }




public function viewBarberProfile()
{
  $this->view('Barber/profile');
}

public function editProfile(){
	 $this->view('Barber/edit_profile');
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"] ?? "";
    $age = $_POST["age"] ?? "";

 	header("Location: /Barber/profile");
    exit();
}

}

}