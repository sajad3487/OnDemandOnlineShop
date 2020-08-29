<?php


namespace App\Repositories;


use App\category;
use App\DesignPatterns\Repository;

class categoryRepository extends Repository
{
    public function __construct()
    {
        $this->model = new category();
    }

    public function getAllCategories()
    {
        return category::where('parent_id', '0')
            ->with('child')
            ->with('child.grandChild')
            ->with('child.grandChild.greatGrandChild')
            ->get();
    }

    public function deleteCategoryWithSubCategories($categories)
    {
        return category::whereIn('id', $categories)->delete();

    }

    public function getChild($id)
    {
        return category::where('parent_id', $id)
            ->where('status', 1)
            ->select('id', 'title')
            ->get();
    }

    public function getCategoryWithSubCategories($id)
    {
        return category::where('id', $id)
            ->with('child')
            ->with('child.grandChild')
            ->with('child.grandChild.greatGrandChild')
            ->first();
    }

    public function getCategoryWithAllProducts($category_id)
    {
        return category::where('id', $category_id)
            ->with('product:id')
            ->first();
    }

    public function addCategoryForProduct($categories, $products)
    {
        return $categories->product()->sync($products);
    }

    public function detachCategory($categories, $products)
    {
        return $categories->product()->detach($products);
    }

    public function getProductOfCategories ($category_id){
        return category::whereIn('id',$category_id)
            ->with('product')
            ->first();
    }


}
