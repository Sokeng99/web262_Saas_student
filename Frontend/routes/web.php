<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('index'); //index.blade.php
});

Route::get('/feedback', function () {
    return view('feedback'); //q&a.blade.php
});

Route::get('/question', function () {
    return view('question'); //question.blade.php
});

Route::get('/welcome', function () {
    return view('welcome'); //welcome.blade.php
});

Route::get('/upload', function () {
    return view('upload'); //upload.blade.php
});

Route::get('/template', function () {
    return view('template'); //template.blade.php
});

Route::get('/edit', function () {
    return view('edit'); //edit.blade.php
});

Route::get('/user_pro', function () {
    return view('user_pro'); //user_pro.blade.php
});

Route::get('/scholar_pro', function () {
    return view('scholar_pro'); //scholar_pro.blade.php
});

// Route::get('/dashboard', function () {
//     return view('dashboard'); //scholar_pro.blade.php
// });

Route::get('/home', [CustomAuthController::class, 'home']); 
Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('postlogin', [CustomAuthController::class, 'login'])->name('postlogin'); 
Route::get('signup', [CustomAuthController::class, 'signup'])->name('register-user');
Route::post('postsignup', [CustomAuthController::class, 'signupsave'])->name('postsignup'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
