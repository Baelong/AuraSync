<?php
namespace app\controllers;

class Appointment extends \app\core\Controller{
	
	function Chose_date(){
		
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
 
         $this->view('appointment/clientAppointments', ['appointments' => $appointments]);
    }
}
