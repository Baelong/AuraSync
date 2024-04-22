<?php
namespace app\controllers;

class Client extends \app\core\Controller{
	
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
	function ReceiveMessage(){
		$this->view('Client/ReceiveMessage');
	}
	 public function browseBarbers()
    {
        $this->view('Barber/browse_barbers');
    }
}