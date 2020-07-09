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
    public function getProductById ($product_id){
        return product::where('id',$product_id)
//            ->with('picture')
            ->first();
    }
    public function updateProductById ($data,$product_id){
        return product::find($product_id)->update($data);
    }
}
