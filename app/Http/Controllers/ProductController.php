<?php

namespace App\Http\Controllers;

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

    public function store(Request $request)
    {
        dd($request->all());
    }


    public function show(product $product)
    {
        //
    }


    public function edit(product $product)
    {
        //
    }

    public function update(Request $request, product $product)
    {
        //
    }

    public function destroy(product $product)
    {
        //
    }
}
