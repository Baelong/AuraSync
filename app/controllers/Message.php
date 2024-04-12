<?php
namespace app\controllers;

class Message extends \app\core\Controller{
	
function paymentInfo(){
		$this->view('Client/paymentInfo');
	}

	function Pay(){
		$this->view('Client/Pay');
	}
	function AllAppointments(){
		$this->view('Client/AllAppointments');
	}
	function SendMessage(){
		$this->view('Client/SendMessage');
	}
}