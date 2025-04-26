<?php

use App\Controllers\HomeController;
use App\Controllers\LoginController;
use App\Controllers\LogOutController;
use App\Controllers\RegisterController;

return [
  // ? GET from url normal navigate
  // ? POST from form
  ['GET', '/', [HomeController::class, 'index']],
  ['GET', '/logout', [LogOutController::class, 'logoutAction']],
  ['GET', '/home', [HomeController::class, 'index']],
  ['GET', '/login', [LoginController::class, 'showLogin']],
  ['GET', '/register', [RegisterController::class, 'showRegister']],
  ['POST', '/login', [LoginController::class, 'loginAction']],  
  ['POST', '/register', [RegisterController::class, 'registerAction']]  
];


