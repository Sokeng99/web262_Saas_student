<?php

namespace App\Http\Controllers\auth;

use App\Models\ScholarUser;
use App\Models\StudentUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function signUpOption()
    {
        return view('sign-up-option');
    }

    public function studentUserSignUpView()
    {
        return view('student-user-signup');
    }

    public function scholarUserSignUpView()
    {
        return view('scholar-user-signup');
    }

    public function studentUserRegister(Request $request)
    {

    }

    public function scholarUserRegister(Request $request)
    {
        
    }
}
