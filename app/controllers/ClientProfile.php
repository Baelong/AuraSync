<?php
namespace app\controllers;

#[\app\filters\ClientLogin]
class ClientProfile extends \app\core\Controller{

#[\app\filters\HasClientProfile]
  public function index(){
    $clientProfile = new \app\models\ClientProfile();
    $clientProfile = $clientProfile->getForUser($_SESSION['client_id']);

    //redirect a user that has no profile to the profile creation URL
    $this->view('ClientProfile/index',$profile);
  }

public function create(){
    if($_SERVER['REQUEST_METHOD'] === 'POST'){//data is submitted through method POST
        // Make a new profile object
        $clientProfile = new \app\models\ClientProfile();
        // Populate it
        $clientProfile->client_id = $_SESSION['client_id'];
        $clientProfile->first_name = $_POST['first_name'];
        $clientProfile->last_name = $_POST['last_name'];
        $clientProfile->age = $_POST['age'];
         $clientProfile->phone_number = $_POST['phone_number'];
        // Insert it
        $clientProfile->insert();

        // Set the profile_id in the session to the ID of the newly created profile
        $_SESSION["client_profile_id"] = $clientProfile->client_profile_id;
/*
        // Debugging: Output session variables to console
        echo "<script>console.log('Session variables after profile creation:', " . json_encode($_SESSION) . ");</script>";
        header('Refresh: 10; url=/Profile/index');
        */
          header('Location: /ClientProfile/index');
        exit;
    } else {
        $this->view('ClientProfile/createProfile');
    }
}
}