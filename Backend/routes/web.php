<?php

use Illuminate\Support\Facades\Route;

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
    return view('index-2');
});
Route::get('/about-student', function () {
    return view('about-student');
});

// add routes
Route::get('/add-library', function () {
    return view('add-library');
});
Route::get('/add-scholar', function () {
    return view('add-scholar');
});
Route::get('/add-student', function () {
    return view('add-student');
});

// all routes
Route::get('/all-library', function () {
    return view('all-library');
});
Route::get('/all-scholars', function () {
    return view('all-scholars');
});
Route::get('/all-students', function () {
    return view('all-students');
});


Route::get('/app-profile', function () {
    return view('app-profile');
});

//edit routes
Route::get('/edit-library', function () {
    return view('edit-library');
});
Route::get('/edit-scholar', function () {
    return view('edit-scholar');
});
Route::get('/edit-student', function () {
    return view('edit-student');
});

//register routes
Route::get('/page-login', function () {
    return view('page-login');
});
Route::get('/page-register', function () {
    return view('page-register');
});
Route::get('/scholar-profile', function () {
    return view('scholar-profile');
});