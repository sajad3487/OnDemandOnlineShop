<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shoppingOrder extends Model
{
    protected $fillable = [
        'user_id',
        'net_price',
        'discount_code',
        'discount',
        'total_price',
        'description',
        'status'
    ];

    public function order_item (){
        return $this->hasMany(shopping_order_item::class,'order_id','id');
    }

    public function user (){
        return $this->hasOne(User::class,'id','user_id');
    }
}
