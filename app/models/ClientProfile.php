<?php
namespace app\models;

use PDO;

class ClientProfile extends \app\core\Model{
	public $client_profile_id;//PK
	public $client_id;
	public $first_name;
	public $last_name;
    public $age;
    public $phone_number;
    

	//CRUD

	//create
    public function insert(){
        $age = !empty($this->age) ? intval($this->age) : null;
    
        $SQL = 'INSERT INTO client_profile (client_id, first_name, last_name, age, phone_number) VALUES (:client_id, :first_name, :last_name, :age, :phone_number)';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(
            ['client_id'=>$this->client_id,
            'first_name'=>$this->first_name,
            'last_name'=>$this->last_name,
            'age'=>$age,
            'phone_number'=>$this->phone_number]
        );
    }
    
    

	//read
	public function getForUser($client_id){
		$SQL = 'SELECT * FROM client_profile WHERE client_id = :client_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['client_id'=>$client_id]
		);
		//there is a mistake in the next line
		$STMT->setFetchMode(PDO::FETCH_CLASS,'app\models\ClientProfile');//set the type of data returned by fetches
		return $STMT->fetch();//return (what should be) the only record
	}

	public function getAll(){
		$SQL = 'SELECT * FROM client_profile';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(PDO::FETCH_CLASS,'app\models\ClientProfile');//set the type of data returned by fetches
		return $STMT->fetchAll();//return all records
	}

	
    public function getByProfileID($client_profile_id){//search
		$SQL = 'SELECT * FROM client_profile WHERE client_profile_id = :client_profile_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['client_profile_id'=>$client_profile_id]
		);
		$STMT->setFetchMode(PDO::FETCH_CLASS,'app\models\ClientProfile');//set the type of data returned by fetches
		return $STMT->fetchAll();//return all records
	}


	//update
	//you can't change the user_id that's a business logic choice that gets implemented in the model
	public function update(){
		$SQL = 'UPDATE client_profile SET first_name=:first_name,last_name=:last_name,age=:age,phone_number=:phone_number WHERE client_profile_id = :client_profile_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['client_profile_id'=>$this->barber_profile_id,
			'first_name'=>$this->first_name,
			'last_name'=>$this->last_name,
			'age'=>$this->age,
			'phone_number'=>$this->phone_number]
		);
	}

	//delete
	public function delete(){
		$SQL = 'DELETE FROM client_profile WHERE client_profile_id = :client_profile_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['client_profile_id'=>$this->client_profile_id]
		);
	}


}