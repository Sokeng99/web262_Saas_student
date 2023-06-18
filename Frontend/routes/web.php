<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\LogoutController;
use App\Http\Controllers\auth\RegisterController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ScholarUserController;
use App\Http\Controllers\StudentUserController;

use App\Http\Controllers\studentResearchController;
use App\Http\Controllers\WebsiteController;
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

Route::get('/template-results', function () {
    return view('template-results'); //template-results.blade.php
});

Route::get('/edit-scholar-profile', function () {
    return view('edit-scholar-profile'); //edit-scholar-profile.blade.php
});

Route::get('/edit-student-profile', function () {
    return view('edit-student-profile'); //edit-student-profile.blade.php
});

Route::get('/student_profile', function () {
    return view('student_profile'); //student_profile.blade.php
});

Route::get('/scholar_profile', function () {
    return view('scholar_profile'); //scholar_profile.blade.php
});

Route::get('/login-option', function () {
    return view('login-option'); //login-option.blade.php
});

Route::get('/create-student-profile', function () {
    return view('create-student-profile'); //create-student-profile.blade.php
});

Route::get('/create-scholar-profile', function () {
    return view('create-scholar-profile'); //create-scholar-profile.blade.php
});

//* End Route without controller ------------------------------------------------------------------

//* Route with controller
Route::controller(WebsiteController::class)->group(function() {

    Route::get('/', 'index')->name('index');

    route::get('/search' , 'search')->name('search');

    Route::post('/category/{categoryName}/{ResearchPaperName}/save', 'saveCompany')->name('category.categoryName.researchpaperName.save');

});

//*---------------------------Sign up Controller --------------------------------------------------
// Group route by RegisterController
Route::controller(RegisterController::class)->group(function() {

    Route::get('/sign-up', 'signUpOption')->name('sign-up');

    Route::get('sign-up/scholar', 'scholarUserSignUpView')->name('sign-up.scholar');

    Route::get('sign-up/student', 'studentUserSignUpView')->name('sign-up.student');

    // Route for saving user to database
    Route::post('/register/scholar', 'scholarUserRegister')->name('register.scholar');

    Route::post('/register/student', 'studentUserRegister')->name('register.student');

});

//*---------------------------Login Controller --------------------------------------------------
// Group route by LoginController
Route::controller(LoginController::class)->group(function() {

    Route::get('/login', 'loginOption')->name('login');

    Route::get('login/scholar', 'scholarUserLoginView')->name('login.scholar');

    Route::get('login/student', 'studentUserLoginView')->name('login.student');

    // Route for saving user to database
    Route::post('/logging-in/scholar', 'scholarUserLogin')->name('logging-in.scholar');

    Route::post('/logging-in/student', 'studentUserLogin')->name('logging-in.student');

});

//*---------------------------Logout Controller --------------------------------------------------
// Group route by LogoutController
Route::controller(LogoutController::class)->group(function() {

    Route::get('/user/scholar/logout', 'logScholarUserOut')->name('user.scholar.logout');

    Route::get('/user/student/logout', 'logStudentUserOut')->name('user.student.logout');

});

//* End of Route with controller


//* ---------------Authenticated Routes---------------------------- *//

/*
 * 1. Group route for auth student user (Only accessible after login)
 *
 * 2. userAuth is the registered custom middleware that can be found in app\Http\Kernel.php line 67
 *
 * 3. :studentUser is the guard name that can be found in config\auth.php line 50 and 78.
 *    + :studentUser is the argument that will be passed to the custom middleware ($role)
 *
 * 4. related to custom middleware, the guard name is used to determine access to the route
 *    the custom middleware can be found in app\Http\Middleware\UserMiddleware.php
 */

Route::middleware(['userAuth:studentUser'])->group(function () {

    Route::get('/user/student/{name}/{id}/profile', [StudentUserController::class, 'profile'])->name('user.student.name.id.profile');

    Route::get('/user/student/{name}/{id}/profile/edit', [StudentUserController::class, 'editProfile'])->name('user.student.name.id.profile.edit');

    Route::post('/user/student/{name}/{id}/profile/edit/save', [StudentUserController::class, 'saveEditProfile'])->name('user.student.name.id.profile.edit.save');

});

Route::middleware(['userAuth:scholarUser'])->group(function () {

    Route::get('/user/scholar/{name}/{id}/profile', [ScholarUserController::class, 'profile'])->name('user.scholar.name.id.profile');

    Route::get('/user/scholar/{name}/{id}/profile/edit', [ScholarUserController::class, 'editProfile'])->name('user.scholar.name.id.profile.edit');

    Route::post('/user/scholar/{name}/{id}/profile/edit/save', [ScholarUserController::class, 'saveEditProfile'])->name('user.scholar.name.id.profile.edit.save');



    Route::get('/user/scholar/{name}/{id}/add-researchPaper', [ScholarUserController::class, 'addResearchPaper'])->name('user.scholar.name.id.add-researchPaper');

    Route::post('/user/scholar/{name}/{id}/add-researchPaper/save', [ScholarUserController::class, 'addResearchPaperSave'])->name('user.scholar.name.id.add-researchPaper.save');

    Route::get('/user/scholar/{name}/{id}/edit-researchPaper', [ScholarUserController::class, 'editResearchPaper'])->name('user.scholar.name.id.edit-researchPaper');

    Route::patch('/user/scholar/{name}/{id}/edit-researchPaper/save', [ScholarUserController::class, 'saveEditResearchPaper'])->name('user.scholar.name.id.edit-researchPaper.save');

    Route::get('/user/scholar/{name}/{id}/remove-researchPaper', [ScholarUserController::class, 'removeResearchPaper'])->name('user.scholar.name.id.removeResearchPaper');

});

//* ----------------End of Authenticated Routes-------------------- *//
Route::get('/test', [WebsiteController::class, 'test']);





// Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
// Route::get('login', [CustomAuthController::class, 'index'])->name('login');
// Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
// Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
// Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
// Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

// Route::get('/login', [StudentUserController::class, 'index'])->name('login');