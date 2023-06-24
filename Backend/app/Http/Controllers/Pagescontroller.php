<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pagescontroller extends Controller
{
    // homepage 
    public function homepage()
    {
        return view('/homepage');
    }
    //unessessary
    public function aboutstudent()
    {
        return view('/about-student');
    }
    // add 
    public function addlibrary()
    {
        return view('/add-library');
    }
    public function addscholar()
    {
        return view('/add-scholar');
    }
    public function addstudent()
    {
        return view('/add-student');
    }
    // all
    public function alllibrary()
    {
        return view('all-library');
    }
    public function allscholars()
    {
        return view('all-scholars');
    }
    // public function allstudents()
    // {
    //     return view('all-students');
    // }
    //edit 
    public function editlibrary()
    {
        return view('edit-library');
    }
    public function editscholar()
    {
        return view('edit-scholar');
    }
    public function editstudent()
    {
        return view('edit-student');
    }
     //profile
     public function appprofile()
     {
         return view('app-profile');
     }
     public function scholarprofile()
     {
         return view('scholar-profile');
     }
     public function studentprofile()
     {
         return view('student-profile');
     }


}
