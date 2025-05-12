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
use App\Controllers\TrackingController;

return [
  // User Authentication
  ['GET', '/', [LoginController::class, 'showLogin']],
  ['GET', '/login', [LoginController::class, 'showLogin']],
  ['POST','/login', [LoginController::class, 'loginAction']],  
  ['GET', '/logout', [LogOutController::class, 'logoutAction']],
  
  ['GET', '/register', [RegisterController::class, 'showRegister']],
  ['POST','/register', [RegisterController::class, 'registerAction']],

  // Password Reset
  ['GET','/forgotPass', [Render::class, 'ShowForgotPassword']],
  ['POST','/forgotPass', [ResetPasswordController::class, 'HandlePassword']],
  ['GET', '/reset', [Render::class, 'ShowResetPassword']],
  ['POST', '/reset', [ResetPasswordController::class, 'HandleReset']],

  // User Home & City Search
  ['GET', '/home', [UserController::class, 'index']],
  ['POST', '/home/findCity', [UserController::class, 'findCity']],

  // Booking Process
  ['GET', '/book', [BookingController::class, 'ShowBooking']],              // Show form
  ['POST', '/selecttrains', [BookingController::class, 'HandleBookingForm']], // Handle form
  ['GET', '/selecttrains', [BookingController::class, 'ShowSelectTrains']],   // Show train list

  // Payment
  ['GET', '/payment', [PaymentController::class, 'ShowPay']],
  ['POST', '/payment', [PaymentController::class, 'HandlePayment']],
  ['POST', '/confirm', [PaymentController::class, 'HandlePaymentConfirmation']],
  ['GET', '/confirm', [PaymentController::class, 'HandlePaymentConfirmation']],
  ['GET', '/tracking-train', [PaymentController::class, 'showTrackingTrain']],

  // Admin Dashboard and Management
  ['GET', '/admin', [Render::class, 'showAdminDashboard']],
  ['GET', '/create', [CreateAdminController::class, 'showCreateAdmin']],
  ['POST','/create', [CreateAdminController::class, 'createAdminAction']],
  ['GET', '/admin_Profile', [AdminProfileController::class, 'showAdminProfile']],
  ['POST','/admin_Profile', [AdminProfileController::class, 'saveProfileInformation']],

  // Admin Management - Users
  ['GET', '/users', [AdminController::class, 'showAdmin_UsersTable']],
  ['POST','/addUser', [AdminController::class, 'addData']],
  ['POST','/updateUser', [AdminController::class, 'updateData']],
  ['GET', '/delete/users/{id}', [AdminController::class, 'deleteData']],

  // Admin Management - Trains
  ['GET', '/trains', [AdminController::class, 'showAdmin_TrainsTable']],
  ['POST','/addTrain', [AdminController::class, 'addData']],
  ['POST','/updateTrain', [AdminController::class, 'updateData']],
  ['GET', '/delete/trains/{id}', [AdminController::class, 'deleteData']],

  // Admin Management - Stations
  ['GET', '/stations', [AdminController::class, 'showAdmin_StationsTable']],
  ['POST','/addStation', [AdminController::class, 'addData']],
  ['POST','/updateStation', [AdminController::class, 'updateData']],
  ['GET', '/delete/stations/{id}', [AdminController::class, 'deleteData']],

  // Admin Management - Bookings
  ['GET', '/bookings', [AdminController::class, 'ShowBooking']],
  ['POST','/updateBooking', [AdminController::class, 'updateData']],
  ['GET', '/delete/bookings/{id}', [AdminController::class, 'deleteData']],

  // Notifications
  ['GET', '/dismiss/notification/{id}', [AdminController::class, 'dismissNotification']],
  ['GET', '/delete/notifications/{id}', [AdminController::class, 'deleteData']],

  // Tracking Page
  ['GET', '/tracking', [TrackingController::class, 'ShowTrackingPage']],
];

