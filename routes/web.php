<?php

use App\Controllers\AdminController;
use App\Controllers\LoginController;
use App\Controllers\LogOutController;
use App\Controllers\RegisterController;
use App\Controllers\CreateAdminController;
use App\Controllers\AdminProfileController;
use App\Controllers\AdminUsersController;
use App\Controllers\BookingController;
use App\Controllers\PaymentController;
use App\Controllers\Render;
use App\Controllers\ResetPasswordController;
use App\Controllers\UserController;

return [
  // ? GET from url normal navigate
  // ? POST from forms
  ['GET', '/', [LoginController::class, 'showLogin']],
  ['GET', '/home', [UserController::class, 'index']],
  ['POST', '/home/findCity', [UserController::class, 'findCity']],
  
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
  
  ['GET', '/users', [AdminController::class, 'showAdmin_UsersTable']],
  ['GET', '/delete/users/{id}', [AdminController::class, 'deleteData']],
  ['POST','/updateUser', [AdminController::class, 'updateData']],  
  ['POST','/addUser', [AdminController::class, 'addData']],  

  ['GET', '/trains', [AdminController::class, 'showAdmin_TrainsTable']],
  ['GET', '/delete/trains/{id}', [AdminController::class, 'deleteData']],
  ['POST','/updateTrain', [AdminController::class, 'updateData']],  
  ['POST','/addTrain', [AdminController::class, 'addData']],  

  ['GET', '/stations', [AdminController::class, 'showAdmin_StationsTable']],
  ['GET', '/delete/stations/{id}', [AdminController::class, 'deleteData']],
  ['POST','/updateStation', [AdminController::class, 'updateData']],  
  ['POST','/addStation', [AdminController::class, 'addData']],  

  ['GET','/forgotPass', [Render::class, 'ShowForgotPassword']],
  ['POST','/forgotPass', [ResetPasswordController::class, 'HandlePassword']],
  
  ['GET', '/reset', [Render::class, 'ShowResetPassword']],
  ['POST', '/reset', [ResetPasswordController::class, 'HandleReset']],

  ['GET', '/bookings', [AdminController::class, 'ShowBooking']],
  ['GET', '/delete/bookings/{id}', [AdminController::class, 'deleteData']],
  ['POST','/updateBooking', [AdminController::class, 'updateData']],

  ['POST', '/selecttrains', [BookingController::class, 'HandleBookingForm']],
  ['GET', '/selecttrains', [BookingController::class, 'ShowSelectTrains']],  

  ['GET', '/book', [BookingController::class, 'ShowBooking']],

  ['GET', '/payment', [PaymentController::class, 'ShowPay']],
  ['POST', '/payment', [PaymentController::class, 'HandlePayment']],

  ['GET', '/dismiss/notification/{id}', [AdminController::class, 'dismissNotification']],
  
  ['GET', '/delete/notifications/{id}', [AdminController::class, 'deleteData']],
  ['GET', '/tracking-train', [PaymentController::class, 'showTrackingTrain']],
  ['POST', '/confirm', [PaymentController::class, 'HandlePaymentConfirmation']],
];


