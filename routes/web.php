<?php

use App\Controllers\LoginController;
use App\Controllers\LogOutController;
use App\Controllers\RegisterController;
use App\Controllers\CreateAdminController;
use App\Controllers\AdminProfileController;
use App\Controllers\AdminUsersController;
use App\Controllers\BookingController;
use App\Controllers\Render;
use App\Controllers\ResetPasswordController;

return [
  // ? GET from url normal navigate
  // ? POST from forms
  ['GET', '/home', [Render::class, 'index']],

  
  ['GET', '/', [LoginController::class, 'showLogin']],
  ['GET', '/login', [LoginController::class, 'showLogin']],
  ['POST','/login', [LoginController::class, 'loginAction']],  
  ['GET', '/logout', [LogOutController::class, 'logoutAction']],
  
  ['GET', '/register', [RegisterController::class, 'showRegister']],
  ['POST','/register', [RegisterController::class, 'registerAction']],
  
  ['GET', '/create', [CreateAdminController::class, 'showCreateAdmin']],
  ['POST','/create', [CreateAdminController::class, 'createAdminAction']],
  
  ['GET', '/admin', [Render::class, 'showAdminDashboard']],
  
  ['GET', '/admin_Profile', [AdminProfileController::class, 'showAdminProfile']],
  ['POST','/admin_Profile', [AdminProfileController::class, 'saveProfileInformation']],
  
  ['GET', '/users', [AdminUsersController::class, 'showAdmin_UsersTable']],
  ['GET', '/deleteUser/{id}', [AdminUsersController::class, 'deleteData']],
  ['POST','/updateUser', [AdminUsersController::class, 'updateData']],  
  ['POST','/addUser', [AdminUsersController::class, 'addData']],  
  
  ['GET','/forgotPass', [Render::class, 'ShowForgotPassword']],
  ['POST','/forgotPass', [ResetPasswordController::class, 'HandlePassword']],
  
  ['GET', '/reset', [Render::class, 'ShowResetPassword']],
  ['POST', '/reset', [ResetPasswordController::class, 'HandleReset']],

  ['GET', '/book', [BookingController::class, 'ShowBooking']],
];


