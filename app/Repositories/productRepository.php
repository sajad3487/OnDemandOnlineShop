<?php


namespace App\Repositories;

use App\product;

class productRepository
{
    public function getProduct(){
        return product::all();
    }
    public function createProduct($product){
        return product::create($product);
    }
}
