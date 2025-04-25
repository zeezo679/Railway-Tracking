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
}