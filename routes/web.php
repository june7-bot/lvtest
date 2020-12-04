<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Task;

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

Route::get('testregister', 'WelcomeController@testregister');
Route::post('success', 'WelcomeController@success');
Route::get('/register', 'CustomRegisterController@showRegister');
Route::post('/register', 'TestRegister@register');
Route::get('/login', 'CustomLoginController@showLogin')->name('login');


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

//할일 만들기

Route::get('/', function () {
   return view('welcome');
});
Route::get('/tasks', 'TaskController@index');
Route::post('/task', 'TaskController@store');
Route::delete('/task/{task}', 'TaskController@destroy');


Auth::routes();
Route::auth();
Route::get('/home', 'TaskController@index');


//연습
Route::get('/', function () {
    $fruite = [];
    return view('welcome' , ['fruites' => $fruite]);
   
});

Route::get('/test', function() {
return view('test');
});

Route::resource('test1', 'testController');
Route::resource('articles' , 'ArticlesController');
// DB::listen(function($query){
//     var_dump($query->sql);
// });
    
