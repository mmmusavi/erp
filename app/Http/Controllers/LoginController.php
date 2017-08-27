<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index(){
        return view('login');
    }

    public function PostLogin(Request $request){
        $email=$request['email'];
        $pass=$request['password'];
        if(Auth::attempt(['email'=>$email,'password'=>$pass])){
            return redirect('/dashboard');
        }
        else{
            $errors='اطلاعات وارد شده نادرست است.';
            return view('login',compact('errors'));
        }
    }
}
