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
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $availability->barber_profile_id = $_SESSION['barber_profile_id']; 
            
            // Check each day and assign 0 if not set
            $availability->Monday = isset($_POST['Monday']) ? $_POST['Monday'] : 0;
            $availability->Tuesday = isset($_POST['Tuesday']) ? $_POST['Tuesday'] : 0;
            $availability->Wednesday = isset($_POST['Wednesday']) ? $_POST['Wednesday'] : 0;
            $availability->Thursday = isset($_POST['Thursday']) ? $_POST['Thursday'] : 0;
            $availability->Friday = isset($_POST['Friday']) ? $_POST['Friday'] : 0;
            $availability->Saturday = isset($_POST['Saturday']) ? $_POST['Saturday'] : 0;
            $availability->Sunday = isset($_POST['Sunday']) ? $_POST['Sunday'] : 0;
            
            $availability->insert(); // Insert the availability record
            header('Location: /Availability/index');
            exit();
        }
        $this->view('Availability/createAvailability');
    }
    
    public function editAvailability(){
        $availability = new \app\models\Availability();
		$availability = $availability->getForUser($_SESSION['barber_profile_id']);

		if($_SERVER['REQUEST_METHOD'] === 'POST'){//data is submitted through method POST
			//make a new profile object
			//populate it
            $availability->Monday = isset($_POST['Monday']) ? $_POST['Monday'] : 0;
            $availability->Tuesday = isset($_POST['Tuesday']) ? $_POST['Tuesday'] : 0;
            $availability->Wednesday = isset($_POST['Wednesday']) ? $_POST['Wednesday'] : 0;
            $availability->Thursday = isset($_POST['Thursday']) ? $_POST['Thursday'] : 0;
            $availability->Friday = isset($_POST['Friday']) ? $_POST['Friday'] : 0;
            $availability->Saturday = isset($_POST['Saturday']) ? $_POST['Saturday'] : 0;
            $availability->Sunday = isset($_POST['Sunday']) ? $_POST['Sunday'] : 0;
            
			//update it
			$availability->update();
			//redirect
			header('location:/Availability/index');
		}else{
			$this->view('Availability/editAvailability', $availability);
		}
    }
    
}
