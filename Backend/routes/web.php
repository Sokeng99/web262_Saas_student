<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Postcontroller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Pagescontroller;
use App\Http\Controllers\ScholarController;
use App\Http\Controllers\CustomAuthController;
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
// Homepage 
Route::get('/home', [Pagescontroller::class,'homepage'])->middleware('isLoggedIn');
Route::get('/about-student', [Pagescontroller::class,'aboutstudent']);

// profile 
Route::get('/app-profile', [Pagescontroller::class,'appprofile'])->middleware('isLoggedIn');

// login /register
Route::get('/login',[CustomAuthController::class,'login'])->middleware('alreadyLoggedIn');
Route::get('/registration',[CustomAuthController::class,'registration']);
Route::post('/register-admin',[CustomAuthController::class,'registerAdmin'])->name('register-admin');
Route::post('/login-admin',[CustomAuthController::class,'loginAdmin'])->name('login-admin');
Route::get('/logout',[CustomAuthController::class,'logout']);
Route::get('/',[CustomAuthController::class,'login'])->middleware('alreadyLoggedIn');

// ban and unban route 
Route::get('/all-users', [UserController::class, 'users'])->middleware('isLoggedIn');
Route::get('/ban', [UserController::class, 'banUser'])->middleware('isLoggedIn');
// ban and unban 
Route::post('/banUpdate', [UserController::class, 'updateBanUser'])->middleware('isLoggedIn');
Route::post('/unban', [UserController::class, 'unbanUser']);

// ban and unban route for scholar
Route::get('/all-scholars', [ScholarController::class, 'scholars'])->middleware('isLoggedIn');
Route::get('/banScholar', [ScholarController::class, 'banScholar'])->middleware('isLoggedIn');
// ban and unban 
Route::post('/banUpdateScholar', [ScholarController::class, 'updateBanscholar']);
Route::post('/unbanScholar', [ScholarController::class, 'unbanScholar']);


