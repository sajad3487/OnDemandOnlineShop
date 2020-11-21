<?php


namespace App\Repositories;

use App\quotation;
use Carbon\Carbon;

class quotationRepository
{
    public function createQuotation($user_id, $discount_code)
    {
        $quotation = quotation::create(['user_id' => $user_id, 'discount_code' => $discount_code, 'status' => 1]);
        return $quotation->id;
    }

    public function getQuotationByUserId($user_id)
    {
        return \DB::table('quotations')
            ->where('user_id', $user_id)
            ->where('status', '<', 4)
            ->get();
    }

    public function getQuotationWithId($id)
    {
        return quotation::where('id', $id)
            ->with(['request', 'user'])
            ->with('request.purchased')
            ->first();
    }

    public function getPurchasedByUserId($user_id)
    {
        return \DB::table('quotations')
            ->where('user_id', $user_id)
            ->where('status', '=', 4)
            ->get();
    }

    public function getQuotationWithStatus($status)
    {
        return quotation::where('status', $status)
            ->orderBy('created_at', 'asc')
            ->with('user')
            ->get();
//        return \DB::table('quotations')
//            ->where('status',1)
//            ->get();
    }

    public function updateQuotationWithPrice($quotation_id, $data)
    {
//        $quotation = $this->getQuotationWithId($quotation_id);
        return quotation::where('id', $quotation_id)
            ->update($data);
    }

    public function changStatusOfQuotation($id, $status)
    {
        $quotation['status'] = $status;
        $quotation['payment_date'] = now();
        return quotation::find($id)
            ->update($quotation);

    }

    public function getQuotationReportWithDate($first_date, $second_date, $status)
    {
        if ($status == 1) {
            return quotation::where('created_at', '>=', $first_date)
                ->where('created_at', '<=', $second_date)
                ->with(['request', 'user'])
                ->with('request.purchased')
                ->get();
        } elseif ($status == 4) {
            return quotation::where('created_at', '>=', $first_date)
                ->where('created_at', '<=', $second_date)
                ->where('status', 4)
                ->with(['request', 'user'])
                ->with('request.purchased')
                ->get();
        }
    }

    public function countQuotationActive (){
        return quotation::where('status',1)->count();
    }

}
