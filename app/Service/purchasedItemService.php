<?php


namespace App\Service;


use App\Repositories\purchasedItemRepository;

class purchasedItemService
{
    public function __construct(
        purchasedItemRepository $purchasedItemRepository
    )
    {
        $this->purchasedItemRepo = $purchasedItemRepository;
    }
    public function storePurchasedItem ($data){
        $this->purchasedItemRepo->storeRequestItems($data);
    }
    public function getPurchasedItemByStatus($status){
        return $this->purchasedItemRepo->getPurchasedItemWithStatus($status);
    }
    public function getPurchasedItemById($id){
        return $this->purchasedItemRepo->getPurchasedItemWithId($id);
    }
    public function updatePurchasedItemData ($id,$data){
        unset($data['_token']);
        $this->purchasedItemRepo->updatePurchasedItem($id,$data);
        return back();
    }
}
