<?php
namespace app\models;

use PDO;

class Service extends \app\core\Model{
	public $service_id;//PK
	public $barber_profile_id;
	public $name;
    public $description;
    public $price;
    public $discount;
    

	//CRUD

	//create
	public function insert(){
		$SQL = 'INSERT INTO service(barber_profile_id,name,description,price,discount) VALUE (:barber_profile_id,:name,:description,price,discount)';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['barber_profile_id'=>$this->barber_profile_id,
			'name'=>$this->name,
			'description'=>$this->description,
            'price'=>$this->price,
			'discount'=>$this->discount]
		);
	}

	//read
	public function getForUser($barber_profile_id){
		$SQL = 'SELECT * FROM service WHERE barber_profile_id = :barber_profile_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['barber_profile_id'=>$barber_profile_id]
		);
		//there is a mistake in the next line
		$STMT->setFetchMode(PDO::FETCH_CLASS,'app\models\Service');//set the type of data returned by fetches
		return $STMT->fetchAll();//return (what should be) the only record
	}

	public function getAll(){
		$SQL = 'SELECT * FROM service';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(PDO::FETCH_CLASS,'app\models\Service');//set the type of data returned by fetches
		return $STMT->fetchAll();//return all records
	}

	public function getByName($name){//search
		$SQL = 'SELECT * FROM service WHERE name = :name';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['name'=>$name]
		);
		$STMT->setFetchMode(PDO::FETCH_CLASS,'app\models\Service');//set the type of data returned by fetches
		return $STMT->fetchAll();//return all records
	}
    public function getByServiceID($service_id){//search
		$SQL = 'SELECT * FROM service WHERE service_id = :service_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['service_id'=>$service_id]
		);
		$STMT->setFetchMode(PDO::FETCH_CLASS,'app\models\Service');//set the type of data returned by fetches
		return $STMT->fetchAll();//return all records
	}


	//update
	//you can't change the user_id that's a business logic choice that gets implemented in the model
	public function update(){
		$SQL = 'UPDATE service SET name=:name,description=:description,price=:price,discount=:discount WHERE service_id = :service_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['service_id'=>$this->service_id,
			'name'=>$this->name,
			'description'=>$this->description,
            'price'=>$this->price,
			'discount'=>$this->discount]
		);
	}

	//delete
	public function delete(){
		$SQL = 'DELETE FROM service WHERE service_id = :service_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['service_id'=>$this->service_id]
		);
	}


}