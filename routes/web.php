<?php

use App\Controllers\HomeController;
use App\Controllers\LoginController;
use App\Controllers\RegisterController;

return [
   //routes will be entered here
   ['GET', '/', [HomeController::class, 'index']],
   ['GET', '/login', [LoginController::class, 'showLogin']] ,
   ['GET', '/register', [RegisterController::class, 'showRegister']],
  //  ['GET', '/home', [HomeController::class, 'index']]
];

