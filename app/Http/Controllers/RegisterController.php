<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\Mail\UserConfirmation;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function registerIndex()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $fullname=$request->input('fullname');
        $phone=$request->input('phone');
        $email=$request->input('email');
        $password=$request->input('password');
        $c_password=$request->input('c_password');
        
        $code = Str::random(7);


        if($password!==$c_password)
        {
            toastr()->error('Parolele nu coincid.');
            return redirect()->back();
        }
            else 
            {
                $exist_user=User::where('email',$email)->first();
                    if($exist_user)
                    {
                        toastr()->error('Acest email a fost inregistrat.');
                        return redirect()->back();
                    }
                        else
                        {
                            $user=new User;
                            $user->name=$fullname;
                            $user->phone=$phone;
                            $user->email=$email;
                            $user->password=bcrypt($password);
                            $user->confirmed=0;
                            $user->confirmation_code=$code;
                            $user->save();
                            //send code to user
                            Mail::to($user)->send(new UserConfirmation($code, $fullname));

                            toastr()->success('Registrarea este cu succes.');
                            return redirect('/login');
                        }
            }
    }
    
}
