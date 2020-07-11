<?php

namespace App\Http\Controllers;

use App\Http\Requests\productColorRequest;
use App\Http\Requests\productRequest;
use App\product;
use App\Service\colorService;
use App\Service\productService;
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

    public function __construct(
        productService $productService,
        colorService $colorService
    )
    {
        $this->productService = $productService;
        $this->colorService = $colorService;
    }

    public function index()
    {
        $products = $this->productService->getAllProduct();
        return view('panel.shop.indexProduct', compact('products'));
    }

    public function create()
    {
        $colors = $this->colorService->getAllColor();
        return view('panel.shop.createProduct',compact('colors'));
    }

    public function store(productRequest $productRequest)
    {
        $data = $productRequest->all();
        $price = $data['price'];
        $discount = $data['discount'];
        $data['final_price']=$this->productService->caculateFinalPrice($price,$discount);
        $product = $this->productService->createNewProduct($data);
        return redirect("/admin/shop/".$product->id."/edit");
    }


    public function show(product $product)
    {
        //
    }


    public function edit($product_id)
    {
        $product = $this->productService->getProductWithId($product_id);
        $colors = $this->colorService->getAllColor();
        return view('panel.shop.createProduct', compact('product','colors'));

    }

    public function update(productRequest $productRequest,$product_id)
    {
        $data = $productRequest->all();
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
}
