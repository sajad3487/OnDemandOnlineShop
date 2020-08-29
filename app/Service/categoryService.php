<?php


namespace App\Service;


use App\Repositories\categoryRepository;

class categoryService
{
    /**
     * @var categoryRepository
     */
    private $categoryRepo;

    public function __construct(
        categoryRepository $categoryRepository
    )
    {
        $this->categoryRepo = $categoryRepository;
    }

    public function getCategoryById($id)
    {
        return $this->categoryRepo->getById($id);
    }

    public function getAllCategories()
    {
        return $this->categoryRepo->getAllCategories();
    }

    public function deleteAllSubCat($id)
    {
        $categoryWithSubCat = $this->getCategoryWithAllSubCat($id);
        $categoriesId = $this->allSubCategoryToArray($categoryWithSubCat);
        $this->categoryRepo->deleteCategoryWithSubCategories($categoriesId);
    }

    public function createNewCategory($data)
    {
        return $this->categoryRepo->create($data);
    }

    public function getSubCategory($category_id)
    {
        return $this->categoryRepo->getChild($category_id)->toArray();
    }

    public function uncategorizedProductOfCategory($category_id)
    {
        $categoryWithSubCat = $this->getCategoryWithAllSubCat($category_id);
        $categoriesId = $this->allSubCategoryToArray($categoryWithSubCat);
        foreach ($categoriesId as $category_id) {
            $category = $this->getCategoryWithProducts($category_id);
            $products = $category->product->pluck('id')->toArray();
            $uncategorized = $this->categoryRepo->getById(1);
            $this->categoryRepo->detachCategory($category, $products);
            $this->categoryRepo->addCategoryForProduct($uncategorized, $products);
        }
    }

    public function getCategoryWithAllSubCat($id)
    {
        return $this->categoryRepo->getCategoryWithSubCategories($id)->toArray();
    }

    public function getCategoryWithProducts($category_id)
    {
        return $this->categoryRepo->getCategoryWithAllProducts($category_id);
    }

    public function allSubCategoryToArray($category)
    {
        $categories[0] = $category['id'];
        foreach ($category['child'] as $cat) {
            array_push($categories, $cat['id']);
            foreach ($cat['grand_child'] as $cat) {
                array_push($categories, $cat['id']);
            }
        }
        return $categories;
    }

    public function syncProductWithCategory($categories, $product)
    {
        return $this->categoryRepo->addCategoryForProduct($categories, $product);
    }

    public function getAllProductOfCategory($category_id)
    {
        $categoryWithSubCat = $this->getCategoryWithAllSubCat($category_id);
        $categoriesId = $this->allSubCategoryToArray($categoryWithSubCat);
        $products = $this->categoryRepo->getProductOfCategories($categoriesId)->toArray();
        return $products['product'];
    }

}
