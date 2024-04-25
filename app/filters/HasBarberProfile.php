<?php
namespace app\filters;

#[\Attribute]
class HasBarberProfile implements \app\core\AccessFilter{

	public function redirected(){
		$barberProfile = new \app\models\BarberProfile();
		$barberProfile = $barberProfile->getForUser($_SESSION['barber_id']);
		//redirect a user that has no profile to the profile creation URL
		if($barberProfile){
			return false;
		}else{
			header('location:/BarberProfile/createProfile');
			return true;
		}
	}

}