<?php
namespace App\Controllers;

use App\Database\DB;
use App\Models\User;
use Ziada\Mvc\Controllers\AbstractContoller;

class RegisterController extends AbstractContoller
{

    public function showRegister()
    {
        return $this->render('register'); //pass the file name to this function
    }


    public function registerAction(){

      if($_SERVER["REQUEST_METHOD"] === "POST")
      {
        
        $errors = $this->EmptyFieldsValidation();

        if(!empty($errors))
        {
          return $this->render('register', ['errors' => $errors, 'old' => $_POST]);
        }

        $fName = trim($_POST["fName"]);  //trimmed to avoid unequal data during validation
        $lName = trim($_POST["sName"]);
        $email = trim($_POST["email"]);
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

        $DuplicateMail = $this->DuplicateEmailValidation($email);

        if($DuplicateMail)
        {
          $errors[] = "Email Already Exists!";
          return $this->render('register', ['errors' => $errors, 'old' => $_POST]);
        }
        else
        {
          $data = [
            "firstName" => $fName,
            "lastName" => $lName,
            "email" => $email,
            "password" => $password,
            "role" => "user",
          ];
          // print_r($data);
          $user = new User();
          $user->register($data);
      
          header("Location: login");
          exit();
        }

      }
      return $this->render('register');
    }


    private function EmptyFieldsValidation()
    {
        $errors = [];
        if(empty($_POST["fName"]))
        {
          $errors[] = "First name is required";
        }
        if(empty($_POST["sName"]))
        {
          $errors[] = "Last name is required";
        }
        if(empty($_POST["email"]))
        {
          $errors[] = "Email is required";
        }
        if(empty($_POST["password"]))
        {
          $errors[] = "Password is required";
        }

        return $errors;
    }

    private function DuplicateEmailValidation($email)
    {
        $db = new DB("users");

        $emailExists = $db
                        ->select('email')
                        ->where('email', '=', $email)
                        ->getRow();

        if($emailExists)
          return true;
        return false;
    }
}

