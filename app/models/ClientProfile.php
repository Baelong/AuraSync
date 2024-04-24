<?php
namespace app\models;

use PDO;

class ClientProfile extends \app\core\Model{
	public $client_profile_id;
	public $client_id;
	public $first_name;
	public $last_name;
	public $age;
	public $phone_number;	

	public function insert(){
    $SQL = 'INSERT INTO client_profile(client_id,first_name,last_name,age,phone_number) VALUES (:client_id,:first_name,:last_name,:age,:phone_number)';
    $STMT = self::$_conn->prepare($SQL);
    $STMT->execute([
        'client_id' => $this->client_id,
        'first_name' => $this->first_name,
        'last_name' => $this->last_name,
        'age' => $this->age,
        'phone_number' => $this->phone_number,
    ]);

    // Retrieve the last inserted ID and store it in the profile_id property
    $this->client_profile_id = self::$_conn->lastInsertId();


	public function getForUser($client_id){
    $SQL = 'SELECT * FROM client_profile WHERE client_id = :client_id';
    $STMT = self::$_conn->prepare($SQL);
    $STMT->execute(['client_id' => $client_id]);
    $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\ClientProfile');
    return $STMT->fetch(); // Return a single profile object
}
}