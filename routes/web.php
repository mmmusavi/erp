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

route::get("/dashboard/profiles","ProfileController@ShowListOfProfiles");

route::get("/dashboard/NewProfile","ProfileController@ShowNewProfileForm");
route::post("/dashboard/NewProfile","ProfileController@PostNewProfileForm");

route::get("/dashboard/profiles/delete/{id}","ProfileController@DeleteProfile");
route::get("/dashboard/profiles/modify/{id}","ProfileController@ModifyProfile");
route::post("/dashboard/profiles/modify/{id}","ProfileController@PostModifyProfile");
route::post("/dashboard/profiles/search","ProfileController@SearchProfile");

route::get("/dashboard/FieldCreator","FieldCreatorController@ShowFieldCreatorForm");
route::get("/dashboard/FieldCreatorList","FieldCreatorController@ShowFields");
route::post("/dashboard/FieldCreator","FieldCreatorController@FieldCreatorPost");
route::get("/dashboard/fields/delete/{id}","FieldCreatorController@DeleteField");
route::get("/dashboard/fields/modify/{id}","FieldCreatorController@ModifyField");

route::get("/dashboard/calendar","CalendarController@ShowCalendar");