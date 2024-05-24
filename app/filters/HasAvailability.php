<?php
namespace app\filters;

#[\Attribute]
class HasAvailability implements \app\core\AccessFilter{

	public function redirected(){
		$availability = new \app\models\Availability();
		$availability = $availability->getForUser($_SESSION['barber_profile_id']);
		//redirect a user that has no profile to the profile creation URL
		if($availability){
			return false;
		}else{
			header('location:/Availability/createAvailability');
			return true;
		}
	}

}