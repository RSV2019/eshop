<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\user;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function loginIndex()
    {
        if(Auth::check())
        {
            return redirect('/profile');
        }
        return view('auth.login');
    }
    

    public function login(request $request)
    {
        $email=$request->input('email');
        $password=$request->input('password');
        $remember=$request->input('remember');
        
        if (Auth::attempt(['email' => $email, 'password' => $password], $remember)) 
        {
            return redirect('/profile');

        } else{
                toastr()->error('Parola sau email gresite.');
                return redirect()->back();
            }
    }

    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleProviderCallback()
    {
        
        $user = Socialite::driver('facebook')->user();
        
        $user_exist=User::where('email',$user->user["email"])->first();
        if(!$user_exist){
            $u=new User;
            $u->name=$user->user["name"];
            $u->email=$user->user["email"];
            $u->avatar=$user->avatar;
            $u->password=0;
            $u->save();
            Auth::login($u);
            return redirect('/profile');
        }else
            {
                $user_exist->provider='Facebook';
                $user_exist->provider_id=$user->id;
                $user_exist->save();
                Auth::login($user_exist);
                return redirect('/profile');

            }
    }
}
