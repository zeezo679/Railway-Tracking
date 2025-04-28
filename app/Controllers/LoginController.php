<?php
namespace App\Controllers;

use App\Models\User;
use Ziada\Mvc\Controllers\AbstractContoller;
class LoginController extends AbstractContoller
{
    public function showLogin()
    {
        return $this->render('login');
    }
    public function loginAction()
    {
      if(isset($_POST["email"]) && isset($_POST["password"])){
        $checkEmail = $_POST["email"];
        $checkPassword = $_POST["password"];
        $user = new User();
        $trustData = $user->getUserInfo($checkEmail);
        // ? compare if trust open session and move to home
        if ($trustData && password_verify($checkPassword, $trustData['password'])) {
          session_start();
          $_SESSION['user'] = $trustData;
          
          if($trustData['role'] === 'admin')
          {
            header('Location: admin');
            exit();
          }
          else{
            header('Location: home');
            exit();
          }
          
      }
      return $this->render('login');
    }
  }
}