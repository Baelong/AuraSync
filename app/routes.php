<?php
$this->addRoute('Authentication/index','Authentication,index');
$this->addRoute('Client/login','Client,login');
$this->addRoute('Barber/login','Barber,login');
$this->addRoute('Client/register','Client,register');
$this->addRoute('Barber/register','Barber,register');
$this->addRoute('Client/securePlace' , 'ClientProfile,index');
$this->addRoute('BarberProfile/browse_barbers','BarberProfile,browse_barbers');
$this->addRoute('BarberProfile/search','BarberProfile,search');

