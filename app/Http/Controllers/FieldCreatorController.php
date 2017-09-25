<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FieldCreatorController extends Controller
{
    public function ShowFields(){
        $fields= \App\Field ::all();
        return view('dashboard.FieldCreatorList',compact('fields'));
    }

    public function ModifyField($id){
        $fields=\App\Field::find($id);
        $parent= \App\Sections ::all();
                return view('dashboard.FieldCreator', compact('fields','parent'));
    }
    public function DeleteField($id){
                \App\Field::destroy($id);
                return redirect('/dashboard/FieldCreatorList');
        }
    public function ShowFieldCreatorForm(){
        $parent= \App\Sections ::all();
      return view('dashboard.FieldCreator',compact('parent'));
    }
    public function FieldCreatorPost(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'unique_name' => 'required',
            'section_id' => 'required',
        ]);
        $a = new \App\Field ();
        $a->place=0;
        $a->fill($request->all());
        $a->save();
        return redirect('#');
    }
}
