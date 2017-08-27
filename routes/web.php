<?php

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

Route::get('/', function () {
    return view('index');
});

Route::get('logout',function (){
    Auth::logout();
    return redirect('/');
});

route::get("/login",['as' => 'login', 'uses' => 'LoginController@index']);
route::post("/login","LoginController@PostLogin");

route::get("/register","Auth\RegisterController@ShowRegisterForm");

route::post("/register","Auth\RegisterController@register");

Route::get('home',function (){
    return redirect('/');
});

route::get("/dashboard","DashboardController@ShowDashboardHome");