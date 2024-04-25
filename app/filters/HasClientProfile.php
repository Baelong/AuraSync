<?php
namespace app\filters;

#[\Attribute]
class HasClientProfile implements \app\core\AccessFilter{

	public function redirected(){
		$clientProfile = new \app\models\ClientProfile();
		$clientProfile = $clientProfile->getForUser($_SESSION['client_id']);
		//redirect a user that has no profile to the profile creation URL
		if($clientProfile){
			return false;
		}else{
			header('location:/ClientProfile/createProfile');
			return true;
		}
	}

}