<?php
namespace App\Controllers;

use App\Models\User;
use Ziada\Mvc\Controllers\AbstractContoller;
class LoginController extends AbstractContoller
{
    public function showLogin()
    {
        return $this->render('login',['errors'=>null,'old'=>[]]);
    }
    public function loginAction()
    {
      $errors="";
      if(isset($_POST["email"]) && isset($_POST["password"])){
        $checkEmail = $_POST["email"];
        $checkPassword = $_POST["password"];
        if(empty($checkEmail) || empty ($checkPassword)){
          $errors="Please Enter your E-mail and Password";
          return $this->render("login",['errors' => $errors, 'old' => $_POST]);
        }
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
          $errors="Invalid Email OR Invalid Password";
          return $this->render("login",['errors' => $errors, 'old' => $_POST]);
    }
    return $this->render("login",['errors' => $errors, 'old' => $_POST]);
  }
}