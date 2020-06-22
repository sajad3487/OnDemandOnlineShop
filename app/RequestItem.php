<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestItem extends Model
{
    public $guarded = [];
    public function purchased (){
        return $this->hasOne(purchasedItem::class);
    }
}

