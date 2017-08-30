<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function ShowListOfProfiles(){
        $users= \App\User::all()->where('parent_id',Auth::user()->id);
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
        $user->parent_id=Auth::user()->id;
        $user->save();
        return redirect('/dashboard/profiles');

    }
    public function DeleteProfile($id){
        $user=\App\User::find($id);
        if(!empty($user)) {
            $pid = $user->parent_id;
            if ($pid == Auth::user()->id) {
                \App\User::destroy($id);
                return redirect('/dashboard/profiles');
            }
            else {
                return redirect('/dashboard');
            }
        }
        else {
            return redirect('/dashboard');
        }
    }
    public function ModifyProfile($id){
        $user=\App\User::find($id);
        if(!empty($user)) {
            $pid = $user->parent_id;
            if ($pid == Auth::user()->id) {
                return view('dashboard.NewProfile', compact('user'));
            } else {
                return redirect('/dashboard');
            }
        }
        else {
            return redirect('/dashboard');
        }
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
