<?php

namespace App\Http\Controllers;

use App\Http\Requests\productColorRequest;
use App\Http\Requests\productRequest;
use App\Http\Requests\productSizeRequest;
use App\product;
use App\Service\categoryService;
use App\Service\colorService;
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

    public function __construct(
        productService $productService,
        colorService $colorService,
        categoryService $categoryService,
        sizeService $sizeService
    )
    {
        $this->productService = $productService;
        $this->colorService = $colorService;
        $this->categoryService = $categoryService;
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
        return view('panel.shop.createProduct',compact('colors','sizes','categories'));
    }

    public function store(productRequest $productRequest)
    {
        $data = $productRequest->all();
        $data = $this->productService->preprationCategory($data);
        $price = $data['price'];
        $discount = $data['discount'];
        $data['final_price']=$this->productService->caculateFinalPrice($price,$discount);
        $product = $this->productService->createNewProduct($data);
        return redirect("/admin/shop/".$product->id."/edit");
    }

    public function edit($product_id)
    {
        $product = $this->productService->getProductWithId($product_id);
        $colors = $this->colorService->getAllColor();
        $sizes = $this->sizeService->getAllSize();
        $categories = $this->categoryService->getAllCategories();
        $cat = $product->category->toArray();
        return view('panel.shop.createProduct', compact('product','colors','sizes','categories','cat'));
    }

    public function update(productRequest $productRequest,$product_id)
    {
        $data = $productRequest->all();
        $data = $this->productService->preprationCategory($data);
        $this->productService->updateProductWithId($data,$product_id);
        return back();
    }

    public function destroy(product $product)
    {
        //
    }
    public function addColor (productColorRequest $productColorRequest){
        $product = $this->productService->getProductWithId($productColorRequest->product_id);
        $this->productService->addColorToProduct($product,$productColorRequest->colorId);
        return back();
    }
    public function addSize (productSizeRequest $productSizeRequest){
        $product = $this->productService->getProductWithId($productSizeRequest->product_id);
        $this->productService->addSizeToProduct($product,$productSizeRequest->sizeId);
        return back();
    }
}
