<?php

namespace App\Http\Controllers;

use App\Http\Requests\quotationRequest;
use App\Http\Requests\ReportRequest;
use App\Http\Requests\userProfileRequest;
use App\Service\currencyService;
use App\Service\purchasedItemService;
use App\Service\RequestService;
use App\Service\UserService;
use App\Service\discountService;
use App\User;
use Illuminate\Http\Request;
use App\Service\QuotationService;

class QuotationController extends Controller
{
    /**
     * @var QuotationService
     */
    private  $quotationService;
    /**
     * @var UserService
     */
    private $userService;
    private $requestService;
    /**
     * @var currencyService
     */
    private $currencyService;
    /**
     * @var discountService
     */
    private $discountService;
    /**
     * @var purchasedItemService
     */
    private $purchasedItemService;

    public function __construct(
        QuotationService $quotationService,
        UserService $userService,
        RequestService $requestService,
        CurrencyService $currencyService,
        discountService $discountService,
        purchasedItemService $purchasedItemService
    ){
        $this->quotationService =$quotationService;
        $this->userService =$userService;
        $this->requestService =$requestService;
        $this->currencyService =$currencyService;
        $this->discountService =$discountService;
        $this->purchasedItemService =$purchasedItemService;
    }

    public function create (){
        $user_id = auth()->id();
        $itemsInCart = $this->quotationService->ItemOfCart();
        $user = $this->userService->getUserWithId($user_id);
        $cartRequest = $this ->requestService->requestItemInCart();
    return view('dashboard.createQuotation',compact("cartRequest","user","itemsInCart"));
    }
    public function store (userProfileRequest $userProfileRequest){
        $user_id =auth()->id();
        $this->userService->updateUserInfo($user_id,$userProfileRequest);
        $discount_code = 3;
        $quotation_id= $this->quotationService->storeQuotation($user_id,$discount_code);
        $this->requestService->updateRequest($user_id,$quotation_id);
        return back();
    }
    public function emptyCart (){
        $user_id =auth()->id();
        $this->requestService->deleteRequestByUserId($user_id);
        return back();
    }
    public function index(){
        $user_id = auth()->id();
        $itemsInCart = $this->quotationService->ItemOfCart();
        $cartRequest = $this ->requestService->requestItemInCart();
        $quotations = $this->quotationService->unpaidQuotationByUserId($user_id);
        return view('dashboard.quotations',compact('cartRequest','itemsInCart','quotations'));
    }
    public function view ($quotation_id){
        $itemsInCart = $this->quotationService->ItemOfCart();
        $cartRequest = $this ->requestService->requestItemInCart();
        $quotation = $this->quotationService->getQuotationById($quotation_id);
        return view('dashboard.viewQuotation',compact('cartRequest','itemsInCart','quotation'));
    }
    public function pay($quotation_id){
        if ($this->quotationService->payQuotationByGate($quotation_id) == 1){
            $data = $this->requestService->getRequestOfQuotation($quotation_id);
            $this->purchasedItemService->storePurchasedItem($data);
            $this->quotationService->changeStatus($quotation_id,4);
            return redirect('home');
        }else{
            dd("this reject payment");
        }
    }
    public function purchased (){
        $user_id = auth()->id();
        $itemsInCart = $this->quotationService->ItemOfCart();
        $cartRequest = $this ->requestService->requestItemInCart();
        $quotations = $this->quotationService->purchasedQuotationByUserId($user_id);
        return view('dashboard.quotations',compact('cartRequest','itemsInCart','quotations'));
    }
    public function purchasedView ($quotation_id){
        $itemsInCart = $this->quotationService->ItemOfCart();
        $cartRequest = $this ->requestService->requestItemInCart();
        $quotation = $this->quotationService->getQuotationById($quotation_id);
        return view('dashboard.viewQuotation',compact('cartRequest','itemsInCart','quotation'));
    }
    public function adminQuotation (){
        $unpriceQuotation = $this->quotationService->getQuotationByStatus(1);
        return view('panel.adminQuotation',compact('unpriceQuotation'));
    }
    public function adminViewQuotation ($quotation_id){
        $quotation = $this->quotationService->getQuotationById($quotation_id);
        $discount_amount = $this->discountService->getDiscountCodeByCode($quotation['discount_code']);
//        $discount = $discount_amount->toArray();
        return view('panel.adminViewQuotation',compact('quotation','discount_amount'));
    }
    public function adminUpdateQuotation ($quotation_id,quotationRequest $quotationRequest){
        $quotation = $quotationRequest->all();
        $requests = $this->requestService->getRequestOfQuotation($quotation_id);
        $quotation['price'] = $this->quotationService->getTotalNetPriceOfRequest($requests);
        $quotation['discount'] = $this->discountService->calculateDiscountAmount($quotation['price'],$quotationRequest->discount_code);
        $quotation['total_price'] = $this->quotationService->calculateTotalPrice($quotation['price'],$quotation['discount']);
        $quotation['status']=2;
        unset($quotation['_token']);
        $this->quotationService->updateQuotation($quotation_id,$quotation);
        return back();
    }
    public function adminShowQuotation (Request $request){
        $quotation = $this->quotationService->getQuotationById($request->quotation_number);
        if ($quotation == null){
            return back();
        }
        return view('panel.adminShowQuotation',compact('quotation'));
    }
    public function adminShowQuotationByGet ($quotation_id){
        $quotation = $this->quotationService->getQuotationById($quotation_id);
        if ($quotation == null){
            return back();
        }
        return view('panel.adminShowQuotation',compact('quotation'));
    }
    public function adminReport(){
        return view('panel.adminReport');
    }
    public function adminReportUnpaidQuotaiton (ReportRequest $reportRequest){
        $kind="unpaid";
        $items = $this->quotationService->getReportByDate($reportRequest->first_date,$reportRequest->second_date,$kind);
        $count = $items->count();
        return view('panel.adminQuotationReport',compact('items','count'));
    }
    public function adminReportPaidQuotation (ReportRequest $reportRequest){
        $kind="paid";
        $items = $this->quotationService->getReportByDate($reportRequest->first_date,$reportRequest->second_date,$kind);
        $count = $items->count();
        return view('panel.adminQuotationReport',compact('items','count'));
    }
    public function adminReportPayment (ReportRequest $reportRequest){
        $kind="payment";
        $items = $this->quotationService->getReportByDate($reportRequest->first_date,$reportRequest->second_date,$kind);
        $count = $items->count();
        return view('panel.adminQuotationReport',compact('items','count'));
    }
}
