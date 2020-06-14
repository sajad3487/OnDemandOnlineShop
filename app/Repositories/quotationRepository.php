<?php


namespace App\Repositories;

use App\quotation;

class quotationRepository
{
    public function createQuotation($user_id,$discount_code){
        $quotation = quotation::create(['user_id'=>$user_id,'discount_code'=>$discount_code,'status'=>1]);
        return $quotation->id;
    }
    public function getQuotationByUserId ($user_id){
        return \DB::table('quotations')
            ->where('user_id',$user_id)
            ->where('status','<',4)
            ->get();
    }
    public function getQuotationWithId ($id){
        return quotation::findOrFail($id);
    }
    public function getPurchasedByUserId($user_id){
        return \DB::table('quotations')
            ->where('user_id',$user_id)
            ->where('status','=',4)
            ->get();
    }

}
