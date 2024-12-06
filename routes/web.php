<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controllertes;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\HomepageOwnerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfilOwnerController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\ReservationBoxController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceOwnerController;
use App\Http\Controllers\StaffController;
use App\Models\Staff;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//______________________________Owner&user sebelum login dan user setelah login
//homepage
Route::get('/', [HomepageController::class, 'homepage_controller'])->name('homepage');
Route::get('/homepage', [HomepageController::class, 'homepage_controller'])->name('homepage');

//service
Route::get('/service', [ServiceController::class, 'service_controller'])->name('service');

//contact
// Route::get('/contact', [ContactController::class, 'contact_controller'])->name('contact');
// Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::get('/contact', [ContactController::class, 'contact_controller'])->name('contact');

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');



//______________________________User setelah login
Route::get('/reservasi', [ReservasiController::class, 'index'])->name('reservasi');


//______________________________Owner
//homepage
Route::get('/homepageowner', [HomepageOwnerController::class, 'homepage_controller'])->name('homepage_owner');

//order
// Route::get('/order', [OrderController::class, 'order_controller'])->name('order');
// Route::get('/order', [OrderController::class, 'showOrders'])->name('order');

// Route::get('/order/create', [OrderController::class, 'create'])->name('order.create');


// Route untuk form tambah order
Route::get('/order', [OrderController::class, 'order_controller'])->name('order');
// Route::get('/order/create', [OrderController::class, 'create'])->name('order.create');

// Route untuk menyimpan data order
Route::post('/order-create', [OrderController::class, 'store'])->name('order-store');


//reservation Controller
Route::get('/reservation', [ReservasiController::class, 'index'])->name('reservation.index');
// Route::post('/reservation/store', [ReservationController::class, 'store'])->name('reservation.store');
// Route::get('/reservation', [ReservasiController::class, 'index'])->name('reservation.index');
Route::post('/reservation/store', [ReservasiController::class, 'store'])->name('reservation.store');

//reservation box
Route::get('/reservation_box', [ReservationBoxController::class, 'reservation_box_controller'])->name('reservation_box');

//service
//view data
Route::get('/Service', [ServiceOwnerController::class, 'service_owner_controller'])->name('service_owner');
//create data
Route::get('/createservice', [ServiceOwnerController::class, 'create'])->name('createservice');
Route::post('/createservice', [ServiceOwnerController::class, 'store'])->name('storeservice');
//edit data
Route::get('/editservice/{service}', [ServiceOwnerController::class, 'edit'])->name('editservice');
Route::put('/updateservice/{service}', [ServiceOwnerController::class, 'update'])->name('updateservice');
//delete data
Route::get('/deleteservice/{service}', [ServiceOwnerController::class, 'delete'])->name('deleteservice');

//profil
Route::get('/profil', [ProfilOwnerController::class, 'profil_controller'])->name('profil_owner');

// Staff
///view data
Route::get('/staff', [StaffController::class, 'staff_controller'])->name('staff');
//create data
Route::get('/createstaf', [StaffController::class, 'create'])->name('createstaff');
Route::post('/createstaf', [StaffController::class, 'store'])->name('storestaff');
//edit data
Route::get('/editstaf/{user}', [StaffController::class, 'edit'])->name('editstaff');
Route::put('/updatestaff/{user}', [StaffController::class, 'update'])->name('updatestaff');
//delete data
Route::get('/deletestaff/{staff}', [StaffController::class, 'delete'])->name('deletestaff');


//______________________________Auth
//Register
Route::get('/register', [AuthController::class, 'register_controller'])->name('register');

Route::post('/register', [AuthController::class, 'register'])->name('make_register');
//Login
Route::get('/login', [AuthController::class, 'login_form'])->name('loginform');
Route::post('/login', [AuthController::class, 'login'])->name('login');
//Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
