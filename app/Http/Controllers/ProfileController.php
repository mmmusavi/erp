<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function ShowListOfProfiles(){
        return view('dashboard.profiles');
    }
    public function ShowNewProfileForm(){
        return view('dashboard.NewProfile');
    }
    public function PostNewProfileForm(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'surname'=>'required',
        ]);
        $user=new \App\User;
        $user->fill($request->all());
        $user->save();
        return redirect('/dashboard/profiles');

    }
}
