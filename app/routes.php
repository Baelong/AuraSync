<?php
$this->addRoute('Authentication/index','Authentication,index');

$this->addRoute('Client/login','Client,login');
$this->addRoute('Client/viewBarberProfile','Client,viewBarberProfile');
$this->addRoute('Client/browse_barbers','Client,browse_barbers');
$this->addRoute('Client/search','Client,search');
$this->addRoute('Client/register','Client,register');
$this->addRoute('Client/logout' , 'Client,logout');
$this->addRoute('Client/securePlace' , 'ClientProfile,index');

$this->addRoute('Barber/login','Barber,login');
$this->addRoute('Barber/securePlace' , 'BarberProfile,index');
$this->addRoute('Barber/register','Barber,register');
$this->addRoute('Barber/logout' , 'Barber,logout');

$this->addRoute('ClientProfile/edit_profile' , 'ClientProfile,modify');
$this->addRoute('ClientProfile/createProfile','ClientProfile,createProfile');
$this->addRoute('ClientProfile/index','ClientProfile,index');

$this->addRoute('BarberProfile/createProfile','BarberProfile,createProfile');
$this->addRoute('BarberProfile/index','BarberProfile,index');
$this->addRoute('BarberProfile/editProfile','BarberProfile,editProfile');

$this->addRoute('Appointment/clientAppointments','Appointment,clientAppointments');
$this->addRoute('Appointment/chooseDate','Appointment,chooseDate');
$this->addRoute('Appointment/chooseTime','Appointment,chooseTime');
$this->addRoute('Appointment/ConfirmInfo','Appointment,ConfirmInfo');
$this->addRoute('Appointment/Pay','Appointment,Pay');
$this->addRoute('Appointment/Receipt','Appointment,Receipt');
$this->addRoute('Appointment/index','Appointment,index');
$this->addRoute('Appointment/editAppointmentDate','Appointment,editAppointmentDate');
$this->addRoute('Appointment/editAppointmentTime','Appointment,editAppointmentTime');
$this->addRoute('Appointment/UpdatedReceipt','Appointment,UpdatedReceipt');
$this->addRoute('Appointment/deleteAppointment','Appointment,deleteAppointment');
