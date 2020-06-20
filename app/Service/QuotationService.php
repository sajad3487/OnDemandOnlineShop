<?php


namespace App\Service;

use App\Repositories\quotationRepository;
use App\Repositories\requestRepository;


class QuotationService
{
    /**
     * @var requestRepository
     */
    private $requestRepo;
    /**
     * @var userRepository
     */
    private $userRepo;
    /**
     * @var quotationRepository
     */
    private $quotationRepo;

    public function __construct(
        QuotationRepository $quotationRepository,
        RequestRepository $requestRepository
    ){
        $this->quotationRepo = $quotationRepository;
        $this->requestRepo = $requestRepository;
    }

    public function scoreQuotation($user_id,$discount_code){
        return $this->quotationRepo->createQuotation($user_id,$discount_code);
    }
    public function ItemOfCart (){
        $user_id = auth()->id();
        return $this->requestRepo->countItemInCart($user_id);
    }
    public function unpaidQuotationByUserId ($user_id){
        return $this->quotationRepo->getQuotationByUserId($user_id);
    }
    public function getQuotationById ($id) {
        return $this->quotationRepo->getQuotationWithId($id);
    }
    public function purchasedQuotationByUserId ($user_id){
        return $this->quotationRepo->getPurchasedByUserId($user_id);
    }
    public function getUnpriceQuotation (){
        return $this->quotationRepo->getAllUnpriceQuotation();
    }
}
