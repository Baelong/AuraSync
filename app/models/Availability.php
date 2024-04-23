<?php
namespace app\models;

use PDO;

class Availability extends \app\core\Model{
	public $availability_id;//PK
	public $barber_profile_id;
	public $Monday;
    public $Tuesday;
    public $Wednesday;
    public $Thursday;
    public $Friday;
    public $Saturday;
    public $Sunday;
    

	//CRUD

	//create
	public function insert(){
		$SQL = 'INSERT INTO availabilities(barber_profile_id,Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday) VALUE (:barber_profile_id,:Monday,:Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday)';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['barber_profile_id'=>$this->barber_profile_id,
			'Monday'=>$this->Monday,
			'Tuesday'=>$this->Tuesday,
            'Wednesday'=>$this->Wednesday,
			'Thursday'=>$this->Thursday,
            'Friday'=>$this->Friday,
            'Saturday'=>$this->Saturday,
			'Sunday'=>$this->Sunday]
		);
	}

	//read
	public function getForUser($barber_profile_id){
		$SQL = 'SELECT * FROM availabilities WHERE barber_profile_id = :barber_profile_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['barber_profile_id'=>$barber_profile_id]
		);
		//there is a mistake in the next line
		$STMT->setFetchMode(PDO::FETCH_CLASS,'app\models\Availability');//set the type of data returned by fetches
		return $STMT->fetchAll();//return (what should be) the only record
	}

	public function getAll(){
		$SQL = 'SELECT * FROM availabilities';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(PDO::FETCH_CLASS,'app\models\Availability');//set the type of data returned by fetches
		return $STMT->fetchAll();//return all records
	}

	
   


	//update
	//you can't change the user_id that's a business logic choice that gets implemented in the model
	public function update(){
		$SQL = 'UPDATE availabilities SET Monday=:Monday,Tuesday=:Tuesday,Wednesday=:Wednesday,Thursday=:Thursday,Friday=:Friday,Saturday=:Saturday,Sunday=:Sunday WHERE availability_id = :availability_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['availability_id'=>$this->availability_id,
			'Monday'=>$this->Monday,
			'Tuesday'=>$this->Tuesday,
            'Wednesday'=>$this->Wednesday,
			'Thursday'=>$this->Thursday,
            'Friday'=>$this->Friday,
            'Saturday'=>$this->Saturday,
			'Sunday'=>$this->Sunday]
		);
	}

	//delete
	public function delete(){
		$SQL = 'DELETE FROM availabilities WHERE availability_id = :availability_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['availability_id'=>$this->availability_id]
		);
	}


}