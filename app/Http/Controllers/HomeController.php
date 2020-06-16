<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Service\QuotationService;
use App\Service\RequestService;
use App\User;
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
        $user_id=auth()->id();
        $itemsInCart = $this->quotationService->ItemOfCart();
        $cartRequest = $this->requestService->requestItemInCart();
        return view('dashboard.customerDashboard',compact('cartRequest','itemsInCart'));
    }
    public function view (){
        $user = User::findOrFail(auth()->id());
        return view('dashboard.editProfile',compact('user'));
    }
    public function edit (UserRequest $userRequest){
        $user = User::findOrFail(auth()->id());
        $user->update($userRequest->all());
        return back();
    }
}
