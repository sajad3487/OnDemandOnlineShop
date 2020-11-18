<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shopping_order_item extends Model
{
    protected $fillable = [
        'product_id',
        'order_id',
        'description',
        'color_id',
        'size_id',
        'quantity',
        'price',
        'status',
    ];

    public function product (){
        return $this->hasOne(product::class,'id','product_id');
    }
}
