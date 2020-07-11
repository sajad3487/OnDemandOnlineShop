<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class color extends Model
{
    public $fillable= ['name','code'];
    public function product (){
        return $this->belongsToMany(product::class);
    }
}
