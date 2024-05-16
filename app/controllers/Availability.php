<?php
namespace app\controllers;

class Availability extends \app\core\Controller{

    #[\app\filters\HasAvailability]
	public function index(){
		$availability = new \app\models\Availability();
		$availability = $availability->getForUser($_SESSION['barber_profile_id']);
		$this->view('Availability/index',$availability);
	}

    public function createAvailability() {
        $availability = new \app\models\Availability();
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['Monday'], $_POST['Tuesday'], $_POST['Wednesday'], $_POST['Thursday'], $_POST['Friday'], $_POST['Saturday'], $_POST['Sunday'])) {
           
            $availability->barber_profile_id = $_SESSION['barber_profile_id']; 
            $availability->Monday = $_POST['Monday'];
            $availability->Tuesday = $_POST['Tuesday'];
            $availability->Wednesday = $_POST['Wednesday'];
            $availability->Thursday = $_POST['Thursday'];
            $availability->Friday = $_POST['Friday'];
            $availability->Saturday = $_POST['Saturday'];
            $availability->Sunday = $_POST['Sunday'];
            $availability->insert(); // Insert the availability record
            header('Location: /Availability/index');
            exit();
        }
        $this->view('Availability/createAvailability');
    }
    
    
}
