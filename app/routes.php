<?php

$this->addRoute('Authentication/register','Authentication,register');
$this->addRoute('Authentication/login','Authentication,login');
$this->addRoute('Client/create_profile','Profile,create_profile');
$this->addRoute('Client/profile', 'Profile,viewProfile');
$this->addRoute('Authentication/logout', 'Authentication,logout');
$this->addRoute('Client/edit_profile', 'Profile,editProfile');

