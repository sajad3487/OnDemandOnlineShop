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
        return $this->purchasedItemRepo->updatePurchasedItem($id,$data);
    }
    public function getAllPurchasedItem(){
        return $this->purchasedItemRepo->getPurchasedItem();
    }
    public function getWordOfStatus ($status){
        switch ($status){
            case '1':
                return "پرداخت شده";
                break;
            case '2':
                return "خریداری شده";
                break;
            case '3':
                return "دفتر خارجی";
                break;
            case '4':
                return "ارسال به ایران";
                break;
            case '5':
                return "دفتر تهران";
                break;
            case '6':
                return "ارسال مشتری";
                break;
        }
    }
}
