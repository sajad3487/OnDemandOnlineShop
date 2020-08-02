<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class size extends Model
{
    public $fillable= ['title'];
    public function product (){
        return $this->belongsToMany(product::class);
    }
}
