<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public $fillable =  ['title','parent_id','status'];

    public function child (){
        return $this->hasMany(category::class,'parent_id','id');
    }

    public function grandChild (){
        return $this->hasMany(category::class,'parent_id','id');
    }

    public function greatGrandChild (){
        return $this->hasMany(category::class,'parent_id','id');
    }

    public function product (){
        return $this->belongsToMany(product::class);
    }

}
