<?php


namespace App\Service;


use App\Repositories\discountRepository;

class discountService
{
    /**
     * @var discountRepository
     */
    private $discountRepo;

    public function __construct(
        discountRepository $discountRepository
    )
    {
        $this->discountRepo = $discountRepository;
    }
    public function getAllDiscountCode(){
        return $this->discountRepo->getDiscountCode();
    }
    public function storeDiscountCode($data){
        $this->discountRepo->createDiscountCode($data);
    }
    public function deleteDiscountCode($id){
        return $this->discountRepo->deleteDiscountCodeById($id);
    }
    public function getDiscountCodeByCode($discount_code){
        return $this->discountRepo->getDiscountByCode($discount_code);
    }
    public function calculateDiscountAmount($price, $discount_code){
        $discount = $this->getDiscountCodeByCode($discount_code);
        $discount_percentage = 0;
        if (isset($discount)){
            $discount_percentage = $discount->percentage;
        }
        return round(($price*$discount_percentage)/100);
    }

}
