<?php


$this->addRoute('Authentication/register','Authentication,register');
$this->addRoute('Authentication/login','Authentication,login');
$this->addRoute('Client/create_profile','Profile,create_profile');
$this->addRoute('Client/profile', 'Profile,viewClientProfile');
$this->addRoute('Authentication/logout', 'Authentication,logout');
$this->addRoute('Client/edit_profile', 'Profile,editProfile');
$this->addRoute('Barber/browse_barbers', 'Barber,browseBarbers');
$this->addRoute('Barber/profile', 'Profile,viewBarberProfile');
$this->addRoute('Barber/schedule', 'Barber,showSchedule');
$this->addRoute('Appointment/Chose_date_and_time','Appointment,Chose_date_and_time');
$this->addRoute('Client/paymentInfo','Client,paymentInfo');
$this->addRoute('Client/Pay','Client,Pay');
$this->addRoute('Client/AllAppointments','Client,AllAppointments');
$this->addRoute('Appointment/index','Appointment,index');
$this->addRoute('Client/SendMessage','Client,SendMessage');
$this->addRoute('Client/ReceiveMessage','Client,ReceiveMessage');
