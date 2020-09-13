<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ConfirmationController extends Controller
{
    public function confirmationIndex()
    {
        return view('auth.confirmation');
    }
    public function confirmation(Request $request)
    {
        $code=$request->input('code');
        $user=Auth::user();
        if($user->confirmation_code=$code){
            $user->confirmed=1;
            $user->save();
            return redirect('/profile');
        } else{
            toastr()->error('Code incorect');
            return redirect()->back();
        }
    }
}
