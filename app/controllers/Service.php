<?php
namespace app\controllers;

class Service extends \app\core\Controller{
	
    function index(){
        $service = new \app\models\Service();
		$services = $service->getForUser($_SESSION['barber_profile_id']);
		//redirect a barber that has no services to the service creation URL
		$this->view('Service/index',$services);
    }

    function deleteService(){

    }

    function createService(){

    }

    function updateService(){

    }

}