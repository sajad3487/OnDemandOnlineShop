<?php


namespace App\Repositories;

use App\product;

class productRepository
{
    public function getProduct(){
        return product::all();
    }
}
