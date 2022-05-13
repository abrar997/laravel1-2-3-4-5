<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewrController extends Controller
{

    #Middleware with controller by __construct

    // public function __construct()
    // {
    //     $this->middleware('auth');
    //     $this->middleware('log')->only('index'); #only this فقط هذا
    //     $this->middleware('subscribed')->except('store'); //عدا هذا
    // }


    public function about()
    {

        return view('home.index');
    }
}
