<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\studentResearchController;
use App\Models\StudentResearch;

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


// future plan
// Route::get('/feedback', function () {
//     return view('feedback'); //q&a.blade.php
// });

// future plan
// Route::get('/question', function () {
//     return view('question'); //question.blade.php
// });

Route::get('/', function () {
    return view('index'); //index.blade.php
});

Route::get('/upload', function () {
    return view('upload'); //upload.blade.php
});

// Route::post('/upload', [studentResearchController::class, 'upload']);

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


Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');