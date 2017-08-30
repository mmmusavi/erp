<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FieldCreatorController extends Controller
{
    public function ShowFieldCreatorForm(){
      return view('dashboard.FieldCreator');
    }
    public function FieldCreatorPost(Request $request){
        return redirect('#');
    }
}
