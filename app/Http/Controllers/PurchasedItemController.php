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

    public function adminPaidQuotation (){
        $purchasedItem = $this->purchasedItemService->getPurchasedItemByStatus(1);
        return view('panel.logistics.adminPaidQuotation',compact('purchasedItem'));
    }
    public function adminPurchasedQuotation (){
        $items = $this->purchasedItemService->getPurchasedItemByStatus(2);
        return view('panel.logistics.adminPurchasedQuotation',compact('items'));
    }
    public function adminArrivedQuotation(){
        $items = $this->purchasedItemService->getPurchasedItemByStatus(3);
        return view('panel.logistics.adminArrivedQuotation',compact('items'));
    }
    public function adminShippedQuotation(){
        $items = $this->purchasedItemService->getPurchasedItemByStatus(4);
        return view('panel.logistics.adminShippedQuotation',compact('items'));
    }
    public function adminReceivedQuotation (){
        $items = $this->purchasedItemService->getPurchasedItemByStatus(5);
        return view('panellogistics..adminReceivedQuotation',compact('items'));
    }
    public function adminDeliveredQuotation (){
        $items = $this->purchasedItemService->getPurchasedItemByStatus(6);
        return view('panel.logistics.adminDeliveredQuotation',compact('items'));
    }
    public function adminDataentry ($purchasedItem_id){
        $item =$this->purchasedItemService->getPurchasedItemById($purchasedItem_id);
        return view('panel.logistics.logisticsDataEntry',compact('item'));
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
