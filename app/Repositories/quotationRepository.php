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
        return quotation::where('id',$id)
            ->with(['request','user'])
            ->with('request.purchased')
            ->first();
    }
    public function getPurchasedByUserId($user_id){
        return \DB::table('quotations')
            ->where('user_id',$user_id)
            ->where('status','=',4)
            ->get();
    }
    public function getQuotationWithStatus($status){
        return quotation::where('status',$status)
            ->orderBy('created_at','asc')
            ->get();
//        return \DB::table('quotations')
//            ->where('status',1)
//            ->get();
    }
    public function updateQuotationWithPrice($quotation_id,$data){
//        $quotation = $this->getQuotationWithId($quotation_id);
        return quotation::where('id',$quotation_id)
            ->update($data);
    }
    public function changStatusOfQuotation ($id,$status){
        $quotation['status']=$status;
        return quotation::find($id)
            ->update($quotation);

    }

}
