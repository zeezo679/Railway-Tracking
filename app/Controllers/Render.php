<?php
namespace App\Controllers;

use Ziada\Mvc\Controllers\AbstractContoller;
use App\Models\User;
use Ziada\Mvc\Http\Response;

class Render extends AbstractContoller
{


  public function showAdminDashboard(){    
    $check = $this->checkAdminLogin(); 
    if( $check === true){
      return $this->render('adminDashboard');
    }
    return $this->render('home');
  }
  public function index()
    {
      $check = $this->checkUserLogin(); 
      if( $check === true){
        return $this->render('home');
      }
      return $this->render('home');
    }
    public function ShowForgotPassword()
    {
        return $this->render('forgotPassword');
    }   
    
    public function ShowResetPassword()
    {
        return $this->render('resetPassword');
    }   
    
}
?>


