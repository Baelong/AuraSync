<?php
namespace app\controllers;

class Authentication extends \app\core\Controller{


//will apply further logic later on
public function register(){
   $this->view('Authentication/register');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    	 $email = $_POST["email"] ?? "";
    	 $password = $_POST["password"] ?? "";

    	  header("Location: login");
          exit;
	}

}

//will apply further logic later on
public function login(){
   $this->view('Authentication/login');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $email = $_POST["email"] ?? "";
       $password = $_POST["password"] ?? "";

        $testEmail = "user@gmail.com";
        $testPassword = "password123";

    if ($email === $testEmail && $password === $testPassword) {
        header("Location: /Client/create_profile");
        exit;
    } else{

        header("Location: login?error=invalid_credentials");
        exit;
    }

  }

}

}

