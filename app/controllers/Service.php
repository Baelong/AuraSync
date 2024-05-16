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
		if (isset($_GET['serviceId'])) {
            $service = new \app\models\Service();
            $service->service_id = $_GET['serviceId'];
            $service->delete();
		}
		header('Location: /Service/index');
        exit(); 
    }



	function updateService() {
		$service = new \app\models\Service();
		$service = $service->getFromServiceID($_GET['serviceId']);
		
		if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'], $_POST['description'], $_POST['price'], $_POST['discount'])) {
			$service->name = $_POST['name'];
			$service->description = $_POST['description'];
			$service->price = $_POST['price'];
			$service->discount = $_POST['discount'];
			$service->update();
	
			header('Location: /Service/index');
			exit();
		}
	
		$this->view('Service/updateService', ['service' => $service]);
	}
	
}

