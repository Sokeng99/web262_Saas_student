<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class LogoutController extends Controller
{
    public function logScholarUserOut()
    {
        Auth::guard('scholarUser')->logout();
        return redirect()->route('index');
    }

    public function logStudentUserOut()
    {
        Auth::guard('studentUser')->logout();
        return redirect()->route('index');
    }
}
