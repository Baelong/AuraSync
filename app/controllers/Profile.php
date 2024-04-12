<?php
namespace app\controllers;

class Profile extends \app\core\Controller{


public function create_profile(){
	 $this->view('Client/create_profile');
	if ($_SERVER["REQUEST_METHOD"] === "POST") {

		 $name = $_POST["name"] ?? "";
         $age = $_POST["age"] ?? "";
          header("Location: /Client/profile");
            exit();
	}
}

public function viewClientProfile()
{
  $this->view('Client/profile');
}

public function viewBarberProfile()
{
  $this->view('Barber/profile');
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