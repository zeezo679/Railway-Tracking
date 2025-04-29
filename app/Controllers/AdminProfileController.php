<?php
namespace App\Controllers;
session_start(); 

use Ziada\Mvc\Controllers\AbstractContoller;

class AdminProfileController extends AbstractContoller
{
    public function showAdminProfile()
    {
        return $this->render('adminProfile');
    }

    public function saveProfileInformation(){
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $_SESSION["user"]["firstName"] = $_POST['firstName'];
        $_SESSION["user"]["lastName"] = $_POST['lastName'];
        $_SESSION["user"]["mobile"] = $_POST['mobile'];
        $_SESSION["user"]["address1"] = $_POST['address1'];
        $_SESSION["user"]["address2"] = $_POST['address2'];
        $_SESSION["user"]["postcode"] = $_POST['postcode'];
        $_SESSION["user"]["state"] = $_POST['state'];
        $_SESSION["user"]["area"] = $_POST['area'];
        $_SESSION["user"]["email"] = $_POST['email'];
        $_SESSION["user"]["education"] = $_POST['education'];
        $_SESSION["user"]["country"] = $_POST['country'];
        $_SESSION["user"]["region"] = $_POST['region'];
        $_SESSION["user"]["exp"] = $_POST['exp'];
        $_SESSION["user"]["details"] = $_POST['details'];
    
        header("Location: admin_Profile");
        exit();
    }
  }
}
?>


