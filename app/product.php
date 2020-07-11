<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public $guarded=[];

    public function color (){
        return $this->belongsToMany(color::class);
    }
}
