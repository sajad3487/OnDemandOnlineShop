<?php


namespace App\Repositories;

use App\discount;

class discountRepository
{
    public function __construct()
    {

    }
    public function getDiscountCode(){
        return discount::all();
    }
    public function createDiscountCode($data){
        return discount::create($data);
    }
    public function deleteDiscountCodeById($id){
        return discount::find($id)->delete();
    }
    public function getDiscountByCode ($discount_code){
        return discount::where('discount_code',$discount_code)->first();
    }

}
