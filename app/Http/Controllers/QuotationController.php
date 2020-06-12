<?php

namespace App\Http\Controllers;

use App\Http\Requests\quotationRequest;
use App\Service\RequestService;
use App\Service\UserService;
use App\User;
use Illuminate\Http\Request;
use App\Service\QuotationService;

class QuotationController extends Controller
{
    /**
     * @var QuotationService
     */
    private $quotationService;
    /**
     * @var UserService
     */
    private $userService;
    private $requestService;

    public function __construct(
        QuotationService $quotationService,
        UserService $userService,
        RequestService $requestService
    ){
        $this->quotationService =$quotationService;
        $this->userService =$userService;
        $this->requestService =$requestService;
    }

    public function cart (){
        $user = $this->userService->getUserWithId(auth()->id());
        $cartRequest = $this ->requestService->requestItemInCart();
        return view('dashboard.createRequest',compact("cartRequest","user"));
    }
    public function score (QuotationRequest $quotationRequest){
        $user_id =auth()->id();
        $this->userService->updateUserInfo($user_id,$quotationRequest);
        $discount_code = 3;
        $quotation_id= $this->quotationService->scoreQuotation($user_id,$discount_code);
        $this->requestService->updateRequest($user_id,$quotation_id);
        return "hi";
    }
    public function emptyCart (){
        dd('this is empty');
    }
}
