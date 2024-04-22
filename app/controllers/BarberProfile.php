<?php
namespace app\controllers;

class BarberProfile extends \app\core\Controller{



public function viewBarberProfile()
{
  $this->view('Barber/profile');
}

public function editProfile(){
	 $this->view('Barber/edit_profile');
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"] ?? "";
    $age = $_POST["age"] ?? "";

 	header("Location: /Barber/profile");
    exit();
}

}

}