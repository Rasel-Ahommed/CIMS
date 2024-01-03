<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactContoller;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\contactDtlsController;

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


// login route
Route::get('/',[AuthController::class,'login'])->name('login');
Route::post('/login',[AuthController::class,'loginPost'])->name('login.post');

//registration route
Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/register',[AuthController::class,'registerPost'])->name('register.post');

//log out route
Route::get('/logout',[AuthController::class,'logOut'])->name('logout');

//dashbard route
Route::get('/dashboard',[CompanyController::class, "show"])->middleware('auth')->name('dashboard');

//customer add
Route::get('/addCustomer', [AuthController::class,"viewAddCustomer"])->name('addCustomer');
Route::post('/addCustomer', [CompanyController::class, "store"])->name('customar_form');

//delete data
Route::get('/destroy/{id}', [CompanyController::class, "destroy"]);

//update data
Route::get('/edit_record/{id}', [CompanyController::class, "edit"]);
Route::post('/update/{id}', [CompanyController::class, "update"])->name('update');

//company contacts
Route::get('/Add_contacts/{id}',[ContactContoller::class,'index']);
Route::post('/contact/{id}', [ContactContoller::class, 'store'])->name('contact');

//company detals
Route::get('/contactDtls/{id}',[contactDtlsController::class,'show'])->name('contactDtls');

//delete contact
Route::get('/destroy_contact/{id}',[contactDtlsController::class,'distroy']);

//update contact
Route::get('/edit_contact/{id}',[contactDtlsController::class,'edit']);
Route::post('/update_contact/{id}',[contactDtlsController::class,'update']);



