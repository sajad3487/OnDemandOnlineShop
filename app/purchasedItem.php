<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class purchasedItem extends Model
{
    public $fillable = ['quotation_id','request_item_id','purchased_price','purchased_number','buyer','co_worker','receiving_date','passenger','sending_date','arrival_date','customer_date','status'];
    public function request (){
        return $this->belongsTo('App\RequestItem','request_item_id','id');
    }
    public function quotation (){
        return $this->belongsTo(quotation::class);
    }
}
