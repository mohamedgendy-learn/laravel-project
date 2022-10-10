<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\LogInValdation;
use App\Http\Requests\ValidateSignUp;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class UserController extends Controller
{
    // Here Will Be Some User'function Like Create User Update Data and so on 

    public function doRegist(ValidateSignUp $request)
    {   

        $user=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
            
        ]);
        if($user)
        {
            Auth::login($user);
            return redirect()->route('user_DB');
        }
        else{
            return redirect()->back()->with(['error'=>'something went wrong please try again']);
        }
    }

    public function dashBoard()
    {
        return view('front.user.user_DB');
    }

    public function goForLogin(LogInValdation $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {            
            return redirect()->route('user_DB');
        }

        return redirect()->back()->with(['error'=>'This Account Is Not True']);
    }

    public function logOut()
    {
        Auth::logout();
        return redirect()->route('homepage');
    }

    public function LogBySocail($service)
    {
        
        return Socialite::driver($service)->redirect();

    }

    public function socialBack($service)
    {
        try {
            
             $user = Socialite::driver($service)->user();
             
            
            $user=User::firstOrCreate([
                'email'=> $user->email
            ],[
                'name'=>$user->name,
                'password'=>Hash::make(Str::random(23)),
            ]);
            
     
            if($user){
                Auth::login($user);
                return redirect()->route('user_DB');
            }
    
        } catch (Exception $exception) {
            
            return redirect()->back()->with(['error'=>$exception->getMessage()]);
        }
    }

    // profile view

    public function profile()
    {
        $page='profile';
        return view('front.user.profile',compact('page'));
    }

    public function editProfile(Request $request,$id)
    {
        $nameOfImage=Auth::user()->photo;
        if($request->photo!=null)
        {
            $nameOfImage=time().'.'.$request->photo->getClientOriginalExtension();
            $request->photo-> move('img',$nameOfImage);
            
        }
         
        $user=User::find($id);
        if($user)
        {
            $user->update(['name'=>$request->name,'email'=>$request->email,'photo'=>$nameOfImage]);
            return redirect()->back()->with(['success'=>'Successfully Updated']);
        }
        else{
            return redirect()->back()->with(['error'=>'Something went Wrong']);
        }
        
        
        

    }
    

    
}
