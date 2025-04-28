<?php
namespace App\Controllers;

use Ziada\Mvc\Controllers\AbstractContoller;
use App\Models\User;

class CreateAdminController extends AbstractContoller
{
    public function showCreateAdmin()
    {
        return $this->render('create-admin');
    }


    public function createAdminAction()
    {
        $adminData = [
            'firstName' => trim($_POST['fname']),
            'lastName' => trim($_POST['lname']),
            'email' => trim($_POST['mail']),
            'password' => password_hash('admin', PASSWORD_DEFAULT),
            'role' => 'admin',
            'balance' => 100000
        ];


        $user = new User();
        $user->register($adminData);
        header('Location: login');
        exit();
    }
}
?>


