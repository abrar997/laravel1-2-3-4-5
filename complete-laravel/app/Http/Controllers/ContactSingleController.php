<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactSingleController extends Controller
{
    //
    public function __invoke()
    {
        return view('home.contact');
    }
}
