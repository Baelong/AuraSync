<?php
namespace app\models;

use PDO;

class Appointment extends \app\core\Model
{

public $appointment_id;
public $client_profile_id;
public $barber_profile_id;
public $date;
public $time;
public $status;
public $payment_status;
public $service_id; 

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
}
