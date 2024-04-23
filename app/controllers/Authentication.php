<?php
namespace app\controllers;

class Authentication extends \app\core\Controller{

  public function index(){
      $this->view('Authentication/index');
  }
}
