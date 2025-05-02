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
    return $check;
  }
  public function index()
    {
      $check = $this->checkAdminLogin(); 
      if( $check === true){
        return $this->render('home');
      }
      return $check;
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


