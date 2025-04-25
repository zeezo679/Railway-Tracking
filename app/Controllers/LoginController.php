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
}