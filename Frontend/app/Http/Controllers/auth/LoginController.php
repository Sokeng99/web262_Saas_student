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

            if (Auth::guard('scholarUser')->user()->role == 'scholarUser') {








                // chagne from this part

                // logout from scholarUser guard if normalUser is logged in
                Auth::guard('normalUser')->logout();

                return redirect()->route('user.company.name.id.profile', [
                    'name' => Auth::guard('companyUser')->user()->name,
                    'id' => Auth::guard('companyUser')->user()->company_user_id
                ])->with('success', 'Login success');
            }

        } else {
            return redirect()->back()->withErrors(['error' => 'Credentials does not match']);
        }
    }

    public function normalUserLogin(Request $request)
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


        if (Auth::guard('normalUser')->attempt($credentials)) {
            if (Auth::guard('normalUser')->user()->role == 'normalUser') {
                // logout from normalUser guard if companyUser is logged in
                Auth::guard('companyUser')->logout();

                return redirect()->route('user.normal.name.id.profile', [
                    'name' => Auth::guard('normalUser')->user()->name,
                    'id' => Auth::guard('normalUser')->user()->normal_user_id
                ])->with('success', 'Login success');
            }
        } else {
            return redirect()->back()->withErrors(['error' => 'Credentials does not match']);
        }
    }
}
