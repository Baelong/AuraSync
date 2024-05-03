<?php
namespace app\controllers;

class Appointment extends \app\core\Controller{
	
	function chooseDate(){
		if($_SERVER['REQUEST_METHOD'] === 'POST'){//data is submitted through method POST
            //make a new profile object
            //pass on barber_profile_id, service_id, availabilities?
      $serviceModel = new \app\models\Service();
      $availabilityModel = new \app\models\Availability(); 
      $barberProfile = new \app\models\BarberProfile();
      $services = $serviceModel->getByServiceID($_POST['service_id']);
      $barbers = $barberProfile->getByProfileID($_POST['barber_profile_id']);
      $availabilities = $availabilityModel->getForUser($_POST['barber_profile_id']);
      foreach($barbers as $index => $barber){
        $_SESSION['barber_profile_id'] = $barber->barber_profile_id;
      }
      foreach($services as $index => $service){
        $_SESSION['service_id'] = $service->service_id;
      }
    
     
            $this->view('Appointment/chooseDate',$barberProfile,$service,$availabilities);
        }
    else{
      $this->view('Client/viewBarberProfile');
    }
	}

	function index(){
		
	}
	function Chose_time(){
		
	}

	function clientAppointments(){
        if (!isset($_SESSION['client_id'])) {
            header('Location: /Client/login');
            exit;
        }

        $client_profile_id = $_SESSION['client_profile_id'];
        $appointment = new \app\models\Appointment();
        $appointments = $appointment->getClientAppointments($client_profile_id);
        $services = array();
        foreach($appointments as $appointment){
            $service = $appointment->getService($appointment->service_id);
            array_push($services,$service);
        }

 
         $this->view('appointment/clientAppointments', ['appointments' => $appointments],['services' => $services]);
    }
}
