<?php
//defined a few routes "url"=>"controller,method"
$this->addRoute('Appointment/Chose_date_and_time','Appointment,Chose_date_and_time');
$this->addRoute('Client/paymentInfo','Client,paymentInfo');
$this->addRoute('Client/Pay','Client,Pay');
$this->addRoute('Client/AllAppointments','Client,AllAppointments');
$this->addRoute('Appointment/index','Appointment,index');
$this->addRoute('Client/SendMessage','Client,SendMessage');
$this->addRoute('Client/ReceiveMessage','Client,ReceiveMessage');
$this->addRoute('BarberProfile/browse_barbers','BarberProfile,browse_barbers');
$this->addRoute('BarberProfile/search','BarberProfile,search');