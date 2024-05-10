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
        $this->view('Appointment/chooseDate',$barbers,$services,$availabilities);
        }
    else{
      $this->view('Client/viewBarberProfile');
    }
	}

	function index(){
    
		
	}

  function ConfirmInfo(){
    if($_SERVER['REQUEST_METHOD'] === 'POST'){//data is submitted through method POST
      //make a new profile object
      //pass on barber_profile_id, service_id, availabilities?
      
      $serviceModel = new \app\models\Service();
      $barberProfile = new \app\models\BarberProfile();
      $services = $serviceModel->getByServiceID($_SESSION['service_id']);
      $barbers = $barberProfile->getByProfileID($_SESSION['barber_profile_id']);

      $date =  $_SESSION['date'];

      $slot = $_POST['slot'];
      $_SESSION['slot'] = $slot;
        $this->view('Appointment/ConfirmInfo',$barbers,$services,$date,$slot);
        }
    else{
    $this->view('Appointment/chooseTime');
    }
		
	}
  function Pay(){
    if($_SERVER['REQUEST_METHOD'] === 'POST'){//data is submitted through method POST
      //make a new profile object
      //pass on barber_profile_id, service_id, availabilities?
      
        $this->view('Appointment/Pay');
        }
    else{
    $this->view('Appointment/ConfirmInfo');
    }
		
	}

  function Receipt(){
    if($_SERVER['REQUEST_METHOD'] === 'POST'){//data is submitted through method POST
      //make a new profile object
      //pass on barber_profile_id, service_id, availabilities?
      
      $serviceModel = new \app\models\Service();
      $barberProfile = new \app\models\BarberProfile();
      $clientProfile = new \app\models\ClientProfile();
      $appointment = new \app\models\Appointment();
      $services = $serviceModel->getByServiceID($_SESSION['service_id']);
      $barbers = $barberProfile->getByProfileID($_SESSION['barber_profile_id']);
      $clients = $clientProfile->getByProfileID($_SESSION['client_profile_id']);
      $date =  $_SESSION['date'];
      $slot = $_SESSION['slot'];

      $appointment->client_profile_id = $clients[0]->client_profile_id;
      $appointment->barber_profile_id = $barbers[0]->barber_profile_id;
      $appointment->date = $date;
      $appointment->slot = $slot;
      $appointment->service_id = $services[0]->service_id;
      $appointment->insert();


        $this->view('Appointment/Receipt',$barbers,$services,$date,$slot,$clients);
        }
    else{
    $this->view('Appointment/Pay');
    }
		
	}
	function chooseTime(){
    if($_SERVER['REQUEST_METHOD'] === 'POST'){//data is submitted through method POST
      //make a new profile object
      //pass on barber_profile_id, service_id, availabilities?
      $AppointmentModel = new \app\models\Appointment(); 
      $serviceModel = new \app\models\Service();
      $barberProfile = new \app\models\BarberProfile();
      $appointments = $AppointmentModel->getBydate($_POST['date'],$_SESSION['barber_profile_id']);
      $services = $serviceModel->getByServiceID($_SESSION['service_id']);
      $barbers = $barberProfile->getByProfileID($_SESSION['barber_profile_id']);

      $date = $_POST['date'];
      $_SESSION['date'] = $date;
        $this->view('Appointment/chooseTime',$barbers,$services,$date,$appointments);
        }
    else{
    $this->view('Appointment/chooseDate');
}
		
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
