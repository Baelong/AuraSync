<?php
namespace app\core;

//Controller superclass from which all controller classes should inherit
class Controller{
	function view($name, $data=null,$data2=null,$data3=null,$data4=null){
		//load the view files to present them to the Web user
		if(is_array($data) && !array_is_list($data)){
			extract($data);
		}
		if(is_array($data2) && !array_is_list($data2)){
			extract($data2);
		}
		if(is_array($data3) && !array_is_list($data3)){
			extract($data3);
		}
		if(is_array($data4) && !array_is_list($data4)){
			extract($data4);
		}
		include('app/views/' . $name . '.php');
	}
}