<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\message;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }
    public function SendMessage(Request $request)
    {
        $name=$request->input('name');
        $email=$request->input('email');
        $message=$request->input('message');
        
        $m=new Message;
        $m->name=$name;
        $m->email=$email;
        $m->message=$message;
        $m->save();
        return redirect()->back();

        

    }
}
