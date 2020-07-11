<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class color extends Model
{
    public function product (){
        return $this->belongsToMany(product::class);
    }
}
