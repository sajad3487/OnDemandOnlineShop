<?php


namespace App\Repositories;

use App\Quotation;

class quotationRepository
{
    public function createQuotation($user_id,$discount_code){
        $quotation = Quotation::create(['user_id'=>$user_id,'discount_code'=>$discount_code,'status'=>1]);
        return $quotation->id;
    }

}
