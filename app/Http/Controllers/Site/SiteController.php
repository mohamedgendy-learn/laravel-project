<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateSignUp;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SiteController extends Controller
{
    
    //Here Will Be Every Thing About Site Like Nevigate And Explore
    
    public function homePage()
    {
        $page='home';
        
        return view('layouts.home',compact('page'));
    }

    public function aboutPage()
    {
        $page='About';
        
        return view('layouts.about',compact('page'));
    }

    public function coursesPage()
    {
        $page='Courses';
        
        return view('layouts.courses',compact('page'));
    }

    public function featuresPage()
    {
        $page='features';
        return view('layouts.features',compact('page'));
    }

    public function contactPage()
    {
        $page='Contact';
        return view('layouts.contact',compact('page'));
    }
    
    public function instractorPage()
    {
        $page='Instractor';
        return view('layouts.team',compact('page'));
    }
    public function opinionPage()
    {
        $page='Tesimonial';
        return view('layouts.opinion',compact('page'));
    }
    public function signUpPage()
    {
        return view('front.user.signup');
    }

    public function logInPage()
    {
        return view('front.user.login');
    }

    
}
