<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    protected $guarded=[];
    public function section(){
        return $this->belongsTo('App\Sections','section_id');
    }
}
