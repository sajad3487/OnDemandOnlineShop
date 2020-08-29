<?php


namespace App\Repositories;

use App\DesignPatterns\Repository;
use App\product;
use Illuminate\Database\Eloquent\Model;

class productRepository extends Repository
{
    public function __construct()
    {
        $this->model = new product();
    }

    public function getProduct()
    {
        return product::all();
    }

    public function createProduct($product)
    {
        return product::create($product);
    }

    public function getProductById($product_id)
    {
        return product::where('id', $product_id)
            ->with('color')
            ->with('size')
            ->with('category')
            ->first();
    }

    public function updateProductById($data, $product_id)
    {
        return product::find($product_id)->update($data);
    }

    public function addColorForProduct($product, $colors)
    {
        return $product->color()->sync($colors);
    }

    public function addSizeForProduct($product, $size)
    {
        return $product->size()->sync($size);
    }

    public function addCategoryForProduct($product, $category)
    {
        return $product->category()->sync($category);
    }

}
