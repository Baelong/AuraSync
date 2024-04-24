<?php
namespace app\filters;

#[\Attribute]
class Login implements \app\core\AccessFilter{

	public function redirected(){
		//make sure that the user is logged in
		if(!isset($_SESSION['client_id'])){
			header('location:/Client/login');
			return true;
		}
		return false;//not denied
	}

}