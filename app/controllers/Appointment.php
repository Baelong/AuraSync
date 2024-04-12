<?php
namespace app\controllers;

class Appointment extends \app\core\Controller{
	
function Chose_date_and_time(){
		$this->view('Appointment/Chose_date_and_time');
	}
	function index(){
		$this->view('Appointment/index');
	}
}