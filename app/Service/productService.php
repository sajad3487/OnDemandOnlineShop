<?php


namespace App\Service;


use App\Repositories\productRepository;

class productService
{
    public function __construct(
        productRepository $productRepository
    )
    {
        $this->productRepo = $productRepository;
    }
    public function getAllProduct (){
        return $this->productRepo->getProduct();
    }
}
