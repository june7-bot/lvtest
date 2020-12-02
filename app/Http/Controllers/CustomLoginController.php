<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomLoginController extends Controller
{

    public function __construct() {

    }

    public function showLogin(Request $request) {
        $phonenumber = $request->input('phonenumber', null);
        
        return view('login')->with('phonenumber', $phonenumber);
    }
}
