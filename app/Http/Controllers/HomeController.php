<?php

namespace App\Http\Controllers;

use App\Service\QuotationService;
use App\Service\RequestService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @var QuotationService
     */
    private $quotationService;
    /**
     * @var QuotationService
     */
    private $requestService;

    /**
     * Create a new controller instance.
     *
     * @param QuotationService $quotationService
     * @param RequestService $requestService
     */
    public function __construct(
        QuotationService $quotationService,
        RequestService $requestService
    ){
        $this->middleware('auth');
        $this->quotationService =$quotationService;
        $this->requestService =$requestService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cartRequest = $this->requestService->requestItemInCart();
        return view('dashboard.customerDashboard',compact('cartRequest'));
    }
}
