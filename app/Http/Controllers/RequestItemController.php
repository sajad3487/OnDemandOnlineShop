<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemRequest;
use App\Service\currencyService;
use Illuminate\Http\Request;
use App\Service\RequestService;
use function GuzzleHttp\Promise\all;

class RequestItemController extends Controller
{

    /**
     * @var RequestService
     */
    private $requestService;
    private $currencyService;

    public function __construct(
        RequestService $requestService,
        currencyService $currencyService
    ){
        $this->requestService = $requestService;
        $this->currencyService = $currencyService;
    }
    public function create (){
        return view('dashboard.createRequest');
    }
    public function store (ItemRequest $itemRequest){
        $this->requestService->storeRequest($itemRequest);
        return back();
    }
    public function update (ItemRequest $itemRequest,$request_id){
        $currency = $this->currencyService->getLastCurrencyPrice();
        $data = $itemRequest->all();
        $data['currency_price'] = $currency[$itemRequest->currency_id];
        $data['customer_price'] =$this->requestService->caculateItemPrice($data['item_price'],$data['currency_price'],$data['commission'],$data['shipping_price']);
        unset($data['_method'],$data['_token']);
        $this->requestService->quoteRequest($request_id,$data);
        return back();
    }
    public function delete ($request_id){
        $this->requestService->deleteRequestById($request_id);
        return redirect('quotation/create');
    }
}
