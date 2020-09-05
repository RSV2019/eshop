<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class IndexController extends Controller
{
    public function index()
    {
        $brands=Brand::orderBy('order','ASC')->get();
        
        return view('index');
    }
}
