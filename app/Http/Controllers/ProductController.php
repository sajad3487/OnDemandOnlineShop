<?php

namespace App\Http\Controllers;

use App\Http\Requests\productRequest;
use App\product;
use App\Service\productService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * @var productService
     */
    private $productService;

    public function __construct(
        productService $productService
    )
    {
        $this->productService = $productService;
    }

    public function index()
    {
        $products = $this->productService->getAllProduct();
        return view('panel.shop.indexProduct', compact('products'));
    }

    public function create()
    {
        return view('panel.shop.createProduct');
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
        return view('panel.shop.createProduct', compact('product'));

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
}
