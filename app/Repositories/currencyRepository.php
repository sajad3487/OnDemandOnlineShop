<?php


namespace App\Repositories;

use App\currency;

class currencyRepository
{

    public function getCurrencies (){
        return currency::all();
    }
    public function newCurrencyPrice($data){
        return currency::create($data);
    }
    public function deletePrice ($id){
        return currency::find($id)->delete();
    }
}
