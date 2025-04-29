<?php
namespace App\Controllers;

use App\Models\ForgotPass;
use Ziada\Mvc\Controllers\AbstractContoller;
use App\Models\User;

class ResetPasswordController extends AbstractContoller
{
    public function HandlePassword()
    {
        $errors = [];
        session_start();
        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            $email = $_POST['email'];
            $reset = new ForgotPass();
    
            if (empty($email)) {
                $errors[] = "Email cannot be empty.";
            } else if(!$reset->EmailExists($email))
            {
                $errors[] = "Email not found.";
            }
    
            if (!empty($errors)) {
                return $this->render('forgotPassword', ['errors' => $errors]);
            }

            $_SESSION['reset-email'] = $email;
            header('Location: reset');
            exit();
        }

        return $this->render('resetPassword');

    }


    public function HandleReset()
    {
        $errors = [];
        session_start();
        
        $pass = $_POST['pass'] ?? '';  //good practice :)
        $secondPass = $_POST['second-pass'] ?? '';

        if (empty($pass) || empty($secondPass)) {
            $errors[] = "Both fields are required.";
        } elseif ($pass !== $secondPass) {
            $errors[] = "Passwords do not match.";
        }

        if (!empty($errors)) {
            return $this->render('resetPassword', ['errors' => $errors]);
        }

        $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);

        $userEmail = $_SESSION['reset-email'] ?? null;

        if (!$userEmail) {
            $errors[] = "Invalid session. Please log in again.'$userEmail'";
            return $this->render('resetPassword', ['errors' => $errors]);
        }

        $userModel = new User();
        $userModel->updatePassword($userEmail, $hashedPassword);

        header("Location: /login");
        exit;
    }
}
