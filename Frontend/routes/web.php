<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
// use App\Http\Controllers\studentResearchController;

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

// future plan
// Route::get('/feedback', function () {
//     return view('feedback'); //q&a.blade.php
// });

// future plan
// Route::get('/question', function () {
//     return view('question'); //question.blade.php
// });

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
Route::get('/dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('/login', [CustomAuthController::class, 'index'])->name('login');
Route::post('/postlogin', [CustomAuthController::class, 'login'])->name('postlogin'); 
Route::get('/signup', [CustomAuthController::class, 'signup'])->name('register-user');
Route::post('/postsignup', [CustomAuthController::class, 'signupsave'])->name('postsignup'); 
Route::get('/signout', [CustomAuthController::class, 'signOut'])->name('signout');

// // Page - Form save record
// // URL: http://127.0.0.1:8000/member-list
// Route::get('/member-list', [RegistermemberController::class,'memberlist']);

// // FORM Register ****************************
// // Page - Form Registering
// // URL: http://127.0.0.1:8000/form-membership
// Route::get('/form-membership', [RegistermemberController::class,'showform']);

// // Page - Form save record
// // URL: http://127.0.0.1:8000/save-member
// Route::post('/save-member', [RegistermemberController::class,'saverecord']);
// // end ****************************

// // Page - Del
// // URL: http://127.0.0.1:8000/member-del/99
// Route::get('/member-del/{id}', [RegistermemberController::class,'memberdelete']);


// // FORM Update ****************************
// // page: show information
// Route::get('/form-membership-edit/{id}', [RegistermemberController::class,'showformedit']);


// // page: saved 
// // page: show information
// Route::post('/form-membership-update', [RegistermemberController::class,'showformupdate']);


// // end ****************************