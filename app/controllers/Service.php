<?php
namespace app\controllers;

class Service extends \app\core\Controller{
	
    function index(){
        $service = new \app\models\Service();
		$services = $service->getForUser($_SESSION['barber_profile_id']);
		//redirect a barber that has no services to the service creation URL
		$this->view('Service/index',$services);
    }

    function createService(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){//data is submitted through method POST
			//make a new profile object
			$service = new \app\models\Service();
			//populate it
			$service->barber_profile_id = $_SESSION['barber_profile_id'];
			$service->name = $_POST['name'];
			$service->description = $_POST['description'];
            $service->price = $_POST['price'];
			$service->discount = $_POST['discount'];
			//insert it
			$service->insert();
			//redirect
			header('location:/Service/index');
		}else{
			$this->view('Service/createService');
		}
    }
	
    function deleteService(){

    }



    function updateService(){

    }

}