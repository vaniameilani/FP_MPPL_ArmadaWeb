<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController; 
use App\Http\Controllers\ServicesController; 
use App\Http\Controllers\CustomersController; 
use App\Http\Controllers\InstructorsController; 
use App\Http\Controllers\OrdersController; 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//main home
Route::get('/', function () {
    return view('index');
});

Auth::routes();

//customer 
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home']);     //pemesanan page
Route::get('/order', [App\Http\Controllers\OrdersController::class, 'index']);     //pemesanan page
Route::get('/customer', [App\Http\Controllers\CustomersController::class, 'index']);     //customer page
Route::get('/instructor', [App\Http\Controllers\InstructorsController::class, 'index'])->name('instructor.index');   //instruktur page

//admin
Route::get('/admin/register', [App\Http\Controllers\Auth\AdminRegisterController::class, 'showRegistrationAdminForm'])->name('admin.register');
Route::post('/admin/register', [App\Http\Controllers\Auth\AdminRegisterController::class, 'registerAdminSubmit']);
Route::get('/admin/login', [App\Http\Controllers\Auth\AdminLoginController::class,'ShowLoginForm'])->name('admin.login');
Route::post('/admin/login', [App\Http\Controllers\Auth\AdminLoginController::class,'login'])->name('admin.login.submit');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');

//admin instruktur
Route::get('/admin/instructor/add', [App\Http\Controllers\Auth\AddInstructorController::class, 'showAddInstructorForm'])->name('add.instructor');
Route::post('/admin/instructor/add', [App\Http\Controllers\Auth\AddInstructorController::class, 'AddInstructorSubmit'])->name('add.instructor.submit');
Route::get('/admin/instructors', [App\Http\Controllers\Auth\AddInstructorController::class, 'index']);
Route::get('/admin/instructors/detail', [App\Http\Controllers\Auth\AddInstructorController::class, 'show']);
Route::get('/admin/instructors/{instructor}', [App\Http\Controllers\Auth\AddInstructorController::class, 'destroy']);
Route::get('/admin/instructors/{instructor}/edit', [App\Http\Controllers\Auth\AddInstructorController::class, 'edit']);
Route::put('/admin/instructors/{instructor}', [App\Http\Controllers\Auth\AddInstructorController::class, 'update']);

//cars CRUD
Route::get('/cars', [CarsController::class, 'index']);
Route::get('/cars/create', [CarsController::class, 'create']);
Route::get('/cars/{car}', [CarsController::class, 'show']);
Route::post('/cars', [CarsController::class, 'store']);
Route::delete('/cars/{car}', [CarsController::class, 'destroy']);
Route::get('/cars/{car}/edit', [CarsController::class, 'edit']);
Route::put('/cars/{car}', [CarsController::class, 'update']);

//paket CRUD
Route::get('/services', [ServicesController::class, 'index']);
Route::get('/services/create', [ServicesController::class, 'create']);
Route::get('/services/{service}', [ServicesController::class, 'show']);
Route::post('/services', [ServicesController::class, 'store']);
Route::delete('/services/{service}', [ServicesController::class, 'destroy']);
Route::get('/services/{service}/edit', [ServicesController::class, 'edit']);
Route::put('/services/{service}', [ServicesController::class, 'update']);

Route::get('/instructor/login', [App\Http\Controllers\Auth\InstructorLoginController::class,'ShowLoginForm'])->name('instructor.login');
Route::post('/instructor/login', [App\Http\Controllers\Auth\InstructorLoginController::class,'login'])->name('instructor.login.submit');

//about order
Route::get('/order/success', [App\Http\Controllers\OrdersController::class, 'store']);
Route::get('/admin/order/list', [App\Http\Controllers\OrdersController::class, 'order_admin']);
Route::post('/order/success', [App\Http\Controllers\OrdersController::class, 'success']);
Route::delete('/orders/{order}', [App\Http\Controllers\OrdersController::class, 'destroy']);