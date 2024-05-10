<?php
namespace app\models;

use PDO;

class Appointment extends \app\core\Model
{

public $appointment_id;
public $client_profile_id;
public $barber_profile_id;
public $date;
public $slot;
public $service_id; 

public function insert(){
    //define the SQL query
    $SQL = 'INSERT INTO appointment (client_profile_id, barber_profile_id,date,slot,service_id) VALUES (:client_profile_id, :barber_profile_id, :date, :slot, :service_id)';
    //prepare the statement
    $STMT = self::$_conn->prepare($SQL);
    //execute
    $data = ['client_profile_id' => $this->client_profile_id,
            'barber_profile_id' => $this->barber_profile_id,
            'date' => $this->date,
            'slot' => $this->slot,
            'service_id' => $this->service_id];
    $STMT->execute($data);
}

 public function getClientAppointments($client_profile_id)
    {
        $SQL = 'SELECT * FROM appointment WHERE client_profile_id = :client_profile_id';
        // Prepare the statement
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(
        	['client_profile_id'=>$client_profile_id]);
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Appointment');
        $appointments = $STMT->fetchAll();
        return $appointments;
    }

    public function getBydate($date,$barber_profile_id)
    {
        $SQL = 'SELECT * FROM appointment WHERE date = :date AND barber_profile_id = :barber_profile_id';
        // Prepare the statement
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(
        	['date'=>$date,
            'barber_profile_id'=>$barber_profile_id]);
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Appointment');
        $appointments = $STMT->fetchAll();
        return $appointments;
    }
    public function getService($service_id)
    {
        $SQL = 'SELECT * FROM service WHERE service_id = :service_id';
        // Prepare the statement
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(
        	['service_id'=>$service_id]);
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Appointment');
        $service = $STMT->fetch();
        return $service;
    }
}
