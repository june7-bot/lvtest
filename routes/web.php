<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'WelcomeController@index');
Route::get('testregister', 'WelcomeController@testregister');
Route::post('success', 'WelcomeController@success');
Route::get('/register', 'CustomRegisterController@showRegister');
Route::post('/register', 'CustomRegisterController@register');
Route::get('/login', 'CustomLoginController@showLogin')->name('login');
//header('Location: http://naver.com/');


Route::get('auth/login', function () {
    $credentials = [
        'email' => 'june1@naver.com',
        'password' => 'password'
    ];

    if( !auth() -> attempt($credentials))
        return '로그인 실패';
    
    return redirect('protected');
});
Route::get('protected', function () {
    dump(session()->all());

    if(! auth()-> check()){
        return 'who are u';
    }
    return '어서오세요' . auth()->user()->name;
});

Route::get('auth/logout', function () {
    auth() -> logout();

    return 'bye';
});

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
