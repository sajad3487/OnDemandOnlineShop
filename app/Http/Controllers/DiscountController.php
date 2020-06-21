<?php

namespace App\Http\Controllers;

use App\Http\Requests\discountRequest;
use App\Service\discountService;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    /**
     * @var discountService
     */
    private $discountService;

    public function __construct(
        discountService $discountService
    )
    {
        $this->discountService = $discountService;
    }

    public function index(){
        $discounts = $this->discountService->getAllDiscountCode();
        return view('panel.discount',compact('discounts'));
    }
    public function delete($discount_id){
        $this->discountService->deleteDiscountCode($discount_id);
        $discounts = $this->discountService->getAllDiscountCode();
        return view('panel.discount',compact('discounts'));
    }

    public function store (discountRequest $discountRequest){
        $this->discountService->storeDiscountCode($discountRequest->all());
        return back();
    }

}
