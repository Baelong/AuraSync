<?php
namespace app\controllers;

class Authentication extends \app\core\Controller{


public function register(){
   $this->view('Authentication/register');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    	 $email = $_POST["email"] ?? "";
    	 $password = $_POST["password"] ?? "";

    	  header("Location: login.php");
          exit;
	}

}

}