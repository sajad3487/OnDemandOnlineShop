<?php

namespace App\Http\Controllers;

use App\Service\shoppingOrderService;
use Illuminate\Http\Request;

class ShoppingOrderController extends Controller
{
    /**
     * @var shoppingOrderService
     */
    private $shoppingOrderService;

    public function __construct(
        shoppingOrderService $shoppingOrderService
    )
    {
        $this->shoppingOrderService = $shoppingOrderService;
    }

    public function payCart(Request $request){
        dd($request->all());
    }
}
