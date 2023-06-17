<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Download;
use App\Models\ResearchPaper;
use App\Models\ScholarUser;
use App\Models\ScholarUserProfile;
use App\Models\StudentUser;
use App\Models\StudentUserProfile;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ScholarUserController extends Controller
{
    public function __construct()
    {
        // user must be logged in to access this controller
        $this->middleware('userAuth:scholarUser')->except('logout');
    }

    public function uploadImageProfile
    public function 
}
