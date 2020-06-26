<?php


namespace App\Repositories;

use App\purchasedItem;

class purchasedItemRepository
{
    public function storeRequestItems ($data){
        foreach ($data as $data){
            $purchasedItem['quotation_id'] = $data['quotation_id'];
            $purchasedItem['request_item_id'] = $data['id'];
            $purchasedItem['status'] = 0;
            purchasedItem::create($purchasedItem);
        }
    }
    public function getPurchasedItemWithStatus($status){
        return purchasedItem::where('status',$status)
            ->orderBy('created_at','asc')
            ->with(['request','quotation'])
            ->get();
    }
    public function getPurchasedItemWithId ($id){
        return purchasedItem::where('id',$id)
            ->with(['request','quotation'])
            ->first();
    }
    public function updatePurchasedItem ($id,$data){

        return purchasedItem::where('id',$id)->update($data);
    }
}
