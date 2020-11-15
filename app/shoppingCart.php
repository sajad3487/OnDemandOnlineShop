<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shoppingCart extends Model
{
    protected $fillable = [
        'product_id',
        'user_id',
        'quantity'
    ];

    public function product(){
        return $this->hasOne(product::class,'id','product_id');
    }
}
