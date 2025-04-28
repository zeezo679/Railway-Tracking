<?php

use App\Controllers\HomeController;
use App\Controllers\LoginController;
use App\Controllers\LogOutController;
use App\Controllers\RegisterController;
use App\Controllers\CreateAdminController;
use App\Controllers\AdminController;


return [
  // ? GET from url normal navigate
  // ? POST from form
  ['GET', '/', [HomeController::class, 'index']],
  ['GET', '/logout', [LogOutController::class, 'logoutAction']],
  ['GET', '/home', [HomeController::class, 'index']],
  ['GET', '/login', [LoginController::class, 'showLogin']],
  ['GET', '/register', [RegisterController::class, 'showRegister']],
  ['GET', '/create', [CreateAdminController::class, 'showCreateAdmin']],
  ['GET', '/admin', [AdminController::class, 'showAdminDashboard']],
  ['POST', '/login', [LoginController::class, 'loginAction']],  
  ['POST', '/register', [RegisterController::class, 'registerAction']],
  ['POST', '/create', [CreateAdminController::class, 'createAdminAction']],
];


