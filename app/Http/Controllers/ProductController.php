<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        dd('here is index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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
