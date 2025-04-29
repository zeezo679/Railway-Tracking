<?php

use App\Controllers\AdminBookingController;
use App\Controllers\HomeController;
use App\Controllers\LoginController;
use App\Controllers\LogOutController;
use App\Controllers\RegisterController;
use App\Controllers\CreateAdminController;
use App\Controllers\AdminController;
use App\Controllers\AdminProfileController;
use App\Controllers\AdminStationsController;
use App\Controllers\AdminTrainsController;
use App\Controllers\AdminUsersController;
use App\Controllers\Render;
use App\Controllers\ResetPasswordController;

return [
  // ? GET from url normal navigate
  // ? POST from forms
  ['GET', '/', [HomeController::class, 'index']],
  ['GET', '/logout', [LogOutController::class, 'logoutAction']],
  ['GET', '/home', [HomeController::class, 'index']],
  ['GET', '/login', [LoginController::class, 'showLogin']],
  ['GET', '/register', [RegisterController::class, 'showRegister']],
  ['GET', '/create', [CreateAdminController::class, 'showCreateAdmin']],
  ['GET', '/admin', [AdminController::class, 'showAdminDashboard']],
  ['GET', '/admin_Profile', [AdminProfileController::class, 'showAdminProfile']],
  ['GET', '/users', [AdminUsersController::class, 'showAdmin_UsersTable']],
  ['GET', '/stations', [AdminStationsController::class, 'showAdmin_StationsTable']],
  ['GET', '/booking', [AdminBookingController::class, 'showAdmin_BookingTable']],
  ['GET', '/trains', [AdminTrainsController::class, 'showAdmin_TrainsTable']],
  ['POST','/login', [LoginController::class, 'loginAction']],  
  ['POST','/register', [RegisterController::class, 'registerAction']],
  ['POST','/create', [CreateAdminController::class, 'createAdminAction']],
  ['POST','/admin_Profile', [AdminProfileController::class, 'saveProfileInformation']],
  ['GET','/forgotPass', [Render::class, 'ShowForgotPassword']],
  ['POST','/forgotPass', [ResetPasswordController::class, 'HandlePassword']],
  ['GET', '/reset', [Render::class, 'ShowResetPassword']],
  ['POST', '/reset', [ResetPasswordController::class, 'HandleReset']],
];


