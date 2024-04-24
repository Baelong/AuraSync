<?php
$this->addRoute('Authentication/index','Authentication,index');
$this->addRoute('Client/register','Client,register');
$this->addRoute('Client/login','Client,login');
$this->addRoute('Client/securePlace' , 'ClientProfile,index');
$this->addRoute('ClientProfile/index' , 'ClientProfile,index');
$this->addRoute('ClientProfile/createProfile' , 'ClientProfile,createProfile');
$this->addRoute('BarberProfile/browse_barbers','BarberProfile,browse_barbers');
$this->addRoute('BarberProfile/search','BarberProfile,search');

