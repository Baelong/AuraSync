<?php
namespace app\models;

use PDO;

class Client extends \app\core\Model{
	public $client_id;
	public $email;
	public $password_hash;

	//implement CRUD
	
	//insert
	public function insert(){
		//define the SQL query
		$SQL = 'INSERT INTO client (email, password_hash) VALUES (:email, :password_hash)';
		//prepare the statement
		$STMT = self::$_conn->prepare($SQL);
		//execute
		$data = ['email' => $this->email,
				'password_hash' => $this->password_hash];
		$STMT->execute($data);
	}

	//get
	public function get($email){
		$SQL = 'SELECT * FROM client WHERE email = :email';//define the SQL
		$STMT = self::$_conn->prepare($SQL);//prepare
		$STMT->execute(['email' => $email]);//run
		$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Client');//choose the type of return from fetch
		return $STMT->fetch();//fetch
	}

	public function getById($client_id){
		$SQL = 'SELECT * FROM client WHERE client_id = :client_id';//define the SQL
		$STMT = self::$_conn->prepare($SQL);//prepare
		$STMT->execute(['client_id' => $client_id]);//run
		$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Client');//choose the type of return from fetch
		return $STMT->fetch();//fetch
	}

	//update
	public function update(){
		//change anything but the PK
		$SQL = 'UPDATE client SET email = :email, password_hash = :password_hash WHERE client_id = :client_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute((array)$this);
	}

/*
	//delete - this is a special delete to deactivate accounts
	function delete(){
		//change anything but the PK
		$SQL = 'UPDATE user SET active = :active WHERE user_id = :user_id';
		$STMT = self::$_conn->prepare($SQL);
		$data = ['user_id'=>$this->user_id, 'active'=>0];
		$STMT->execute($data);

	}

	*/
}