<?php
namespace app\filters;

#[\Attribute]
class BarberLogin implements \app\core\AccessFilter{

	public function redirected(){
		//make sure that the user is logged in
		if(!isset($_SESSION['barber_id'])){
			header('location:/Barber/login');
			return true;
		}
		return false;//not denied
	}

}