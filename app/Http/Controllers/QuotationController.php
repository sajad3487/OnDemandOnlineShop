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

    public function create (){
        $user_id = auth()->id();
        $itemsInCart = $this->quotationService->ItemOfCart();
        $user = $this->userService->getUserWithId($user_id);
        $cartRequest = $this ->requestService->requestItemInCart();
    return view('dashboard.createQuotation',compact("cartRequest","user","itemsInCart"));
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
        $user_id =auth()->id();
        $this->requestService->deleteRequestByUserId($user_id);
        return back();
    }
    public function index(){
        $user_id = auth()->id();
        $itemsInCart = $this->quotationService->ItemOfCart();
        $quotations = $this->quotationService->unpaidQuotationByUserId($user_id);
        return view('dashboard.quotations',compact('itemsInCart','quotations'));
    }
    public function view ($quotation_id){
        $itemsInCart = $this->quotationService->ItemOfCart();
        $quotation = $this->quotationService->getQuotationById($quotation_id);
        return view('dashboard.viewQuotation',compact('itemsInCart','quotation'));
    }


}
