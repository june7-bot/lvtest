<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function success()
    {   
        return view('lgsuccess');
    }

    public function testregister()
    {   
        return view('register');
    }
}
