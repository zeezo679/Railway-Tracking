<?php
namespace App\Controllers;

use App\Models\User;
use Ziada\Mvc\Controllers\AbstractContoller;

class RegisterController extends AbstractContoller
{
    public function showRegister()
    {
        return $this->render('register'); //pass the file name to this function
    }

    public function registerAction(){
      if(isset($_POST["fName"]) && isset($_POST["sName"]) 
      && isset($_POST["email"]) && isset($_POST["password"])){
        $fName = $_POST["fName"];
        $lName = $_POST["sName"];
        $email = $_POST["email"];
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $data = [
          "firstName" => $fName,
          "lastName" => $lName,
          "email" => $email,
          "password" => $password,
        ];
        // print_r($data);
        $user = new User();
        $user->register($data);
    
        header("Location: login");
        exit();
      }
    return $this->render('register');
  }
}