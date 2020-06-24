<?php

namespace App\Http\Controllers;

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
        return view('panel.adminPaidQuotation',compact('purchasedItem'));
    }
    public function adminPurchasedQuotation (){
        $items = $this->purchasedItemService->getPurchasedItemByStatus(2);
        return view('panel.adminPurchasedQuotation',compact('items'));
    }
    public function adminArrivedQuotation(){
        $items = $this->purchasedItemService->getPurchasedItemByStatus(3);
        return view('panel.adminArrivedQuotation',compact('items'));
    }
    public function adminShippedQuotation(){
        $items = $this->purchasedItemService->getPurchasedItemByStatus(4);
        return view('panel.adminShippedQuotation',compact('items'));
    }
    public function adminReceivedQuotation (){
        $items = $this->purchasedItemService->getPurchasedItemByStatus(5);
        return view('panel.adminReceivedQuotation',compact('items'));
    }
    public function adminDeliveredQuotation (){
        $items = $this->purchasedItemService->getPurchasedItemByStatus(6);
        return view('panel.adminDeliveredQuotation',compact('items'));
    }
    public function adminDataentry ($purchasedItem_id){
        $item =$this->purchasedItemService->getPurchasedItemById($purchasedItem_id);
        return view('panel.logisticsDataentry',compact('item'));
    }
}
