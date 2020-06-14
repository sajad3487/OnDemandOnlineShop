<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class quotation extends Model
{
    public $guarded = [];
    public function request (){
        return $this->hasMany(RequestItem::class);
    }
    public function user (){
        return $this->belongsTo(User::class);
    }
    public function purchased (){
        return $this->hasMany(purchasedItem::class);
    }
}

