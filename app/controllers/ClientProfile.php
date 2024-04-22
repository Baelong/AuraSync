<?php
namespace app\controllers;

class ClientProfile extends \app\core\Controller{



public function viewClientProfile()
{
  $this->view('Client/profile');
}


public function editProfile(){
	 $this->view('Client/edit_profile');
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"] ?? "";
    $age = $_POST["age"] ?? "";

 	header("Location: /Client/profile");
    exit();
}

}

}