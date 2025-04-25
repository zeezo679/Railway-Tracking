<?php
namespace App\Controllers;

use App\Models\User;
use Ziada\Mvc\Controllers\AbstractContoller;

class HomeController extends AbstractContoller
{
    public function index()
    {
        //mock variables to show some data in home screen
        $data = [
            'title' => 'Welcome to Our Site',
            'content' => 'This is the home page content.',
        ];
        
        return $this->render('home', $data);
    }
}