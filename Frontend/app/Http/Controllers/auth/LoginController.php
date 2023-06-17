<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginOption()
    {
        return view('login-option');
    }

    public function scholarUserLoginView()
    {
        return view('scholar-user-login');
    }

    public function studentUserLoginView()
    {
        return view('student-user-login');
    }

    public function scholarUserLogin(Request $request)
    {
        $validate = $request->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ],
            [
                'email.required' => 'Email is required',
                'password.required' => 'Password is required',
            ]
        );

        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        if (Auth::guard('scholarUser')->attempt($credentials)) {

            if (Auth::guard('scholarUser')->user()->status == 'scholarUser') {

                // logout from studentUser guard if scholarUser is logged in
                Auth::guard('studentUser')->logout();

                return redirect()->route('user.scholar.name.id.profile', [
                    'name' => Auth::guard('scholarUser')->user()->name,
                    'id' => Auth::guard('scholarUser')->user()->scholar_user_id
                ])->with('success', 'You are Login');
            }

        } else {
            return redirect()->back()->withErrors(['error' => 'Does not match with credentials in our databases']);
        }
    }

    public function studentUserLogin(Request $request)
    {
        $validate = $request->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ],
            [
                'email.required' => 'Email is required',
                'password.required' => 'Password is required',
            ]
        );

        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];


        if (Auth::guard('studentUser')->attempt($credentials)) {
            if (Auth::guard('studentUser')->user()->status == 'studentUser') {
                // logout from scholarUser guard if studentUser is logged in
                Auth::guard('scholarUser')->logout();

                return redirect()->route('user.student.name.id.profile', [
                    'name' => Auth::guard('studentUser')->user()->name,
                    'id' => Auth::guard('studentUser')->user()->student_user_id
                ])->with('success', 'You are Login');
            }
        } else {
            return redirect()->back()->withErrors(['error' => 'Does not match with credentials in our databases']);
        }
    }
}
