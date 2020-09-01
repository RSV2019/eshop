<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index(){
        $nume_pagina="Pagina de contact!!!";

        return view('contacts',['nume_pagina'=>$nume_pagina]);
    }
    public function save(request $request){
        $email=$request->input('email');
        echo $email;
    }
}
