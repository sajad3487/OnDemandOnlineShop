<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public $guarded=[];

    public function color (){
        return $this->belongsToMany(color::class);
    }
    public function size (){
        return $this->belongsToMany(size::class);
    }
    public function category (){
        return $this->belongsToMany(category::class);
    }
}
