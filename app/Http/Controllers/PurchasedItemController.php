<?php

namespace App\Http\Controllers;

use App\Http\Requests\purchasedItemRequest;
use App\purchasedItem;
use App\Service\purchasedItemService;
use Illuminate\Http\Request;

class PurchasedItemController extends Controller
{
    /**
     * @var purchasedItemService
     */
    private $purchasedItemService;

    public function __construct(
        purchasedItemService $purchasedItemService
    )
    {
        $this->purchasedItemService = $purchasedItemService;
    }

    public function adminPaidPurchasedItem (){
        $purchasedItem = $this->purchasedItemService->getPurchasedItemByStatus(1);
        return view('panel.logistics.adminPaidQuotation',compact('purchasedItem'));
    }
    public function adminPurchasedPurchasedItem (){
        $items = $this->purchasedItemService->getPurchasedItemByStatus(2);
        return view('panel.logistics.adminPurchasedQuotation',compact('items'));
    }
    public function adminArrivedPurchasedItem(){
        $items = $this->purchasedItemService->getPurchasedItemByStatus(3);
        return view('panel.logistics.adminArrivedQuotation',compact('items'));
    }
    public function adminShippedPurchasedItem(){
        $items = $this->purchasedItemService->getPurchasedItemByStatus(4);
        return view('panel.logistics.adminShippedQuotation',compact('items'));
    }
    public function adminReceivedPurchasedItem (){
        $items = $this->purchasedItemService->getPurchasedItemByStatus(5);
        return view('panel.logistics.adminReceivedQuotation',compact('items'));
    }
    public function adminDeliveredPurchasedItem (){
        $items = $this->purchasedItemService->getPurchasedItemByStatus(6);
        return view('panel.logistics.adminDeliveredQuotation',compact('items'));
    }
    public function adminDataEntry ($purchasedItem_id,$editAll){
        $item =$this->purchasedItemService->getPurchasedItemById($purchasedItem_id);
        return view('panel.logistics.logisticsDataEntry',compact('item','editAll'));
    }
    public function adminAllPurchasedItem (){
        $items = $this->purchasedItemService->getAllPurchasedItem();
        return view('panel.adminAllPurchased',compact('items'));
    }
    public function adminPurchasedItemUpdate($purchasedItem_id,$status,purchasedItemRequest $purchasedItemRequest){
        $data = $purchasedItemRequest->all();
        if ($status < 6){
            $data['status']=$status+1;
        }
        $this->purchasedItemService->updatePurchasedItemData($purchasedItem_id,$data);
        return back();
    }
}
