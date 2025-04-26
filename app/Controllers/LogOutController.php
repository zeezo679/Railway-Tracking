<?php
namespace App\Controllers;

use Ziada\Mvc\Controllers\AbstractContoller;

class LogOutController extends AbstractContoller
{
    public function logoutAction()
    {
      session_start();  
      session_unset();  
      session_destroy();  

      header("Location: /login");  
      exit();
    }
}