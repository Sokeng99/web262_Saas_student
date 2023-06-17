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
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:student_user',
            'password' => 'required|min:8',
        ]
    );

        try{
            StudentUser::create([
                'name' => trim($request->input('name')),
                'email' => strtolower($request->input('email')),
                'password' => bcrypt($request->input('password')),  // Password bcrypt
            ]);

            session()->flash('message', 'Your account is created successfully');

        } catch (\Illuminate\Database\QueryException $e) {
            //report($e);
            session()->flash('message', 'Your registration failed');

        }

        $saveUser = StudentUser::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);

        if ($saveUser) {
            $credentials = $request->only('email', 'password');

            if (Auth::guard('studentUser')->attempt($credentials)) {
                if (Auth::guard('studentUser')->user()->status == 'studentUser') {
                    // logout from scholarUser guard if studentUser is logged in
                    Auth::guard('scholarUser')->logout();

                    return redirect()->route('user.student.name.profile')->with('success', 'Login success');
                }
            }
        } else {
            return redirect()->back()->withErrors(['error' => 'Failed to create student user']);
        }
    }

    public function scholarUserRegister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:scholar_user',
            'password' => 'required|min:8',
        ]);

        try{
            ScholarUser::create([
                'name' => trim($request->input('name')),
                'email' => strtolower($request->input('email')),

                'password' => bcrypt($request->input('password')),  // Password bcrypt
            ]);

            session()->flash('message', 'Your account is created successfully');

        } catch (\Illuminate\Database\QueryException $e) {
            //report($e);
            session()->flash('message', 'Your registration failed');

        }

        $saveUser = ScholarUser::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);

        if ($saveUser) {
            $credentials = $request->only('email', 'password');

            if (Auth::guard('ScholarUser')->attempt($credentials)) {
                if (Auth::guard('ScholarUser')->user()->status == 'scholarUser') {
                    // logout from studentUser guard if scholarUser is logged in
                    Auth::guard('studentUser')->logout();

                    return redirect()->route('user.scholar.name.profile')->with('success', 'Login success');
                }
            }
        } else {
            return redirect()->back()->withErrors(['error' => 'Failed to create scholar user']);
        }
    }
}
