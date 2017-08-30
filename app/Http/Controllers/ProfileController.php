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
        $users= \App\User::all();
        return view('dashboard.profiles',compact('users'));
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
    public function DeleteProfile($id){
        \App\User::destroy($id);
        return redirect('/dashboard/profiles');
    }
    public function ModifyProfile($id){
        $user=\App\User::find($id);
        return view('dashboard.NewProfile',compact('user'));
    }
    public function PostModifyProfile($id ,Request $request){
        $this->validate($request,[
            'name'=>'required',
            'surname'=>'required',
        ]);
        $user=\App\User::find($id);
        $user->fill($request->all());
        $user->save();
        return redirect('/dashboard/profiles/modify/'.$id);
    }
}
