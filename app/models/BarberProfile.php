<?php
namespace app\models;

use PDO;

class BarberProfile extends \app\core\Model{
	public $barber_profile_id;//PK
	public $barber_id;
	public $first_name;
	public $last_name;
    public $bio;
    public $phone_number;
    public $age;
    

	//CRUD

	//create
	public function insert(){
		$SQL = 'INSERT INTO barber_profile(barber_id,first_name,last_name,bio,phone_number,age) VALUE (:barber_id,:first_name,:last_name,bio,phone_number,age)';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['barber_id'=>$this->barber_id,
			'first_name'=>$this->first_name,
			'last_name'=>$this->last_name,
            'bio'=>$this->bio,
			'phone_number'=>$this->phone_number,
			'age'=>$this->age]
		);
	}

	//read
	public function getForUser($barber_id){
		$SQL = 'SELECT * FROM barber_profile WHERE barber_id = :barber_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['barber_id'=>$barber_id]
		);
		//there is a mistake in the next line
		$STMT->setFetchMode(PDO::FETCH_CLASS,'app\models\BarberProfile');//set the type of data returned by fetches
		return $STMT->fetch();//return (what should be) the only record
	}

	public function getAll(){
		$SQL = 'SELECT * FROM barber_profile';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(PDO::FETCH_CLASS,'app\models\BarberProfile');//set the type of data returned by fetches
		return $STMT->fetchAll();//return all records
	}

	public function getByName($name){//search
		$SQL = 'SELECT * FROM barber_profile WHERE CONCAT(first_name,\' \',last_name) = :name';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['name'=>$name]
		);
		$STMT->setFetchMode(PDO::FETCH_CLASS,'app\models\BarberProfile');//set the type of data returned by fetches
		return $STMT->fetchAll();//return all records
	}


	//update
	//you can't change the user_id that's a business logic choice that gets implemented in the model
	public function update(){
		$SQL = 'UPDATE barber_profile SET first_name=:first_name,last_name=:last_name,bio=:bio,phone_number=:phone_number,age=:age WHERE barber_profile_id = :barber_profile_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['barber_profile_id'=>$this->barber_profile_id,
			'first_name'=>$this->first_name,
			'last_name'=>$this->last_name,
            'bio'=>$this->bio,
			'phone_number'=>$this->phone_number,
			'age'=>$this->age]
		);
	}

	//delete
	public function delete(){
		$SQL = 'DELETE FROM barber_profile WHERE barber_profile_id = :barber_profile_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['barber_profile_id'=>$this->barber_profile_id]
		);
	}


}