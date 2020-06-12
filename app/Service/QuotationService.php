<?php


namespace App\Service;

use App\Repositories\quotationRepository;


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
        QuotationRepository $quotationRepository
    ){
        $this->quotationRepo = $quotationRepository;
    }

    public function scoreQuotation($user_id,$discount_code){
        return $this->quotationRepo->createQuotation($user_id,$discount_code);
    }

}
