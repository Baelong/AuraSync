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



