<?php
namespace app\controllers;

class Barber extends \app\core\Controller
{
    public function browseBarbers()
    {
        $this->view('Barber/browse_barbers');
    }

    public function showSchedule(){
        $this->view('Barber/schedule');
    }
}