<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddMediaRequest;
use App\Http\Requests\productColorRequest;
use App\Http\Requests\productRequest;
use App\Http\Requests\productSizeRequest;
use App\Http\Requests\RemoveMediaRequest;
use App\product;
use App\Service\categoryService;
use App\Service\colorService;
use App\Service\mediaService;
use App\Service\productService;
use App\Service\sizeService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * @var productService
     */
    private $productService;
    /**
     * @var colorService
     */
    private $colorService;
    /**
     * @var sizeService
     */
    private $sizeService;
    /**
     * @var categoryService
     */
    private $categoryService;
    /**
     * @var categoryService
     */
    private $mediaService;

    public function __construct(
        productService $productService,
        colorService $colorService,
        categoryService $categoryService,
        mediaService $mediaService,
        sizeService $sizeService
    )
    {
        $this->productService = $productService;
        $this->colorService = $colorService;
        $this->categoryService = $categoryService;
        $this->mediaService = $mediaService;
        $this->sizeService = $sizeService;
    }

    public function index()
    {
        $products = $this->productService->getAllProduct();
        return view('panel.shop.indexProduct', compact('products'));
    }

    public function create()
    {
        $colors = $this->colorService->getAllColor();
        $sizes = $this->sizeService->getAllSize();
        $categories = $this->categoryService->getAllCategories();
        $pictures = $this->mediaService->getProductPicture();
        return view('panel.shop.createProduct', compact('colors', 'sizes', 'categories','pictures'));
    }

    public function store(productRequest $productRequest)
    {
        $data = $productRequest->all();
        $categories = $this->productService->preparationCategory($data);
        $price = $data['price'];
        $discount = $data['discount'];
        $data['final_price'] = $this->productService->caculateFinalPrice($price, $discount);
        $product = $this->productService->createNewProduct($data);
        $this->productService->syncProductCategory($product, $categories);
        return redirect("/admin/shop/" . $product->id . "/edit");
    }

    public function edit($product_id)
    {
        $product = $this->productService->getProductWithId($product_id);
        $colors = $this->colorService->getAllColor();
        $sizes = $this->sizeService->getAllSize();
        $categories = $this->categoryService->getAllCategories();
        $cat = $product->category->toArray();
        $allPictures = $this->mediaService->getProductPicture();
        $pictures = $this->mediaService->getPicturesExceptProductPic(array_diff($allPictures->pluck('id')->toArray(),$product->media->pluck('id')->toArray()));
        return view('panel.shop.createProduct', compact('product', 'colors', 'sizes', 'categories', 'cat','pictures'));
    }

    public function update(productRequest $productRequest, $product_id)
    {
        $data = $productRequest->all();
        $categories = $this->productService->preparationCategory($data);
        $price = $data['price'];
        $discount = $data['discount'];
        $data['final_price'] = $this->productService->caculateFinalPrice($price, $discount);
        $this->productService->updateProductWithId($data, $product_id);
        $product = $this->productService->getProductWithId($product_id);
        $this->productService->syncProductCategory($product, $categories);
        return back();
    }

    public function destroy($product_id)
    {
        $this->productService->deleteProduct($product_id);
        return back();
    }

    public function addColor(productColorRequest $productColorRequest)
    {
        $product = $this->productService->getProductWithId($productColorRequest->product_id);
        $this->productService->addColorToProduct($product, $productColorRequest->colorId);
        return back();
    }

    public function addSize(productSizeRequest $productSizeRequest)
    {
        $product = $this->productService->getProductWithId($productSizeRequest->product_id);
        $this->productService->addSizeToProduct($product, $productSizeRequest->sizeId);
        return back();
    }

    public function remove_media(RemoveMediaRequest $removeMediaRequest,$product_id)
    {
        $data = $removeMediaRequest->all();
        $this->productService->detachedMediaWithProduct($data['picture'],$product_id);
        return back();
    }

    public function add_media_to_product(AddMediaRequest $request,$product_id)
    {
        $data = $request->all();
        $this->productService->attachedMediaWithProduct($data['picture'],$product_id);
        return back();
    }

    public function showProduct ($product_id){
        $categories = $this->categoryService->getAllCategories();
        $product = $this->productService->getProductWithId($product_id);
        $this->productService->addViewForProduct($product_id);
        return view('dashboard.shop.shopProduct',compact('product','categories'));
    }

    public function allProducts (){
        $categories = $this->categoryService->getAllCategories();
        $products = $this->productService->getAllProduct();
        return view('dashboard.shop.Products',compact('categories','products'));
    }

    public function categoryProducts ($category_id){
        $categories = $this->categoryService->getAllCategories();
        $products = $this->categoryService->getAllProductOfCategory($category_id);
        $category_name = $this->categoryService->getCategoryById($category_id)->title;
        return view('dashboard.shop.Products',compact('products','categories','category_name'));
    }

}
