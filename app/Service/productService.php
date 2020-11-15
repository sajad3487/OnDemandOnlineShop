<?php


namespace App\Service;


use App\Repositories\productRepository;

class productService
{
    /**
     * @var categoryService
     */
    private $categoryService;
    /**
     * @var productRepository
     */
    private $productRepo;
    /**
     * @var array
     */
    private $columns;

    public function __construct(
        productRepository $productRepository,
        categoryService $categoryService
    )
    {
        $this->productRepo = $productRepository;
        $this->categoryService = $categoryService;
    }

    public function getAllProduct()
    {
        return $this->productRepo->getProduct();
    }

    public function createNewProduct($product)
    {
        $product = $this->preparingProduct($product);
        return $this->productRepo->createProduct($product);
    }

    public function caculateFinalPrice($price, $discount)
    {
        return $price - (($price * $discount) / 100);
    }

    public function getProductWithId($product_id)
    {
        return $this->productRepo->getProductById($product_id);
    }

    public function updateProductWithId($data, $product_id)
    {
        $data = $this->preparingProduct($data);
        return $this->productRepo->updateProductById($data, $product_id);
    }

    public function addColorToProduct($product, $colors)
    {
        return $this->productRepo->addColorForProduct($product, $colors);
    }

    public function addSizeToProduct($product, $sizes)
    {
        return $this->productRepo->addSizeForProduct($product, $sizes);
    }

    public function syncProductCategory($product, $categories)
    {
        return $this->productRepo->addCategoryForProduct($product, $categories);
    }

    public function preparationCategory($data)
    {
        if (isset($data['grandChild'])) {
            $categories[0] = $data['grandChild'];
        }
        if (isset($data['child'])) {
            $categories[1] = $data['child'];
        }
        $categories[2] = $data['category_id'];
        return $categories;
    }

    public function preparingProduct($product)
    {
        unset($product['category_id']);
        unset($product['child']);
        unset($product['grandChild']);
        return $product;
    }

    public function deleteProduct($product_id)
    {
        $this->productRepo->delete($product_id);
    }

    public function attachedMediaWithProduct($pictures, $product_id)
    {
        $product = $this->productRepo->getProductById($product_id);
        if ($product->media->count() == 0){
            $data['status'] = 2;
            $this->productRepo->update($data,$product_id);
        }
        $this->productRepo->attachedMediaToProduct($pictures, $product);
    }

    public function detachedMediaWithProduct($pictures, $product_id)
    {
        $product = $this->productRepo->getById($product_id);
        $this->productRepo->detachedMediaToProduct($pictures, $product);
        $updated_product = $this->productRepo->getProductById($product_id);
        if ($updated_product->media->count() == 0){
            $data['status'] = 1;
            $this->productRepo->update($data,$product_id);
        }
    }

    public function getLatestProduct ($number){
        return $this->productRepo->getProductByElement('id',$number);
    }

    public function getPopularProduct ($number){
        return $this->productRepo->getProductByElement('view',$number);
    }

    public function addViewForProduct ($product_id){
        return $this->productRepo->addViewToProduct ($product_id);
    }

}
