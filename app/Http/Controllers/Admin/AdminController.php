<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminValidationRequest;
use App\Http\Requests\ValidationCourse;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function adminLogin()
    {
        return view('admin.admin_login');
    }

    public function doAdminLogin(AdminValidationRequest $request)
    {
        if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password]))
        {
            return redirect()->route('admindashboard');
        }
        else{
            return redirect()->back()->with(['error'=>'This Account Is Not True']);
        }
    }

    public function adminDshboard()
    {
        $page='dashboard';
        return view('admin.dashboard',compact('page'));
    }

    public function adminLogOut()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('homepage');
    }


    // start show pages inside admin dashboard

    public function addCoursePage()
    {
        $page='add_course';
        return view('admin.add_course',compact('page'));
    }

    public function addInstructorPage()
    {
        $page='add_instructor';
        return view('admin.add_instructor',compact('page'));
    }

    public function userDataPage()
    {
        $page='user_data';
        return view('admin.user_data',compact('page'));
    }


    // start put data to database

    public function createCourse(ValidationCourse $request)
    {
        
        $course=Course::create([]);
    }
}

