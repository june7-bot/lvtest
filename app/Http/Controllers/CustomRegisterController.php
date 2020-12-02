<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CustomRegisterController extends Controller
{
    //

    public function __construct() {

    }

    public function showRegister(Request $request) {
        return view('register');
    }

    public function register(Request $request)
    {
        $phonenumber = $request->phonenumber;
        $password = $request->password;

        $status = DB::table('test')->insert([
            'phonenumber' => $phonenumber,
            'password' => $password,
        ]);

        if($status > 0){
            return redirect() -> route('login', ['phonenumber' => $phonenumber]);
        }else{
            return redirect('/');
        }
    }



    // public function register(Request $request) {

    //     $phonenumber = $request->phonenumber;
    //     $password = $request->password;

    //     $status = DB::table('test')->insert([
    //         'phonenumber' => $phonenumber,
    //         'password' => $password,
    //     ]);
        
    //     if($status > 0) {
    //         return redirect()->route('login', ['phonenumber' => $phonenumber]);
    //     } else {
    //         return redirect('/');
    //     }
    // }

}
