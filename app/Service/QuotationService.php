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
    )
    {
        $this->quotationRepo = $quotationRepository;
        $this->requestRepo = $requestRepository;
    }

    public function storeQuotation($user_id, $discount_code)
    {
        return $this->quotationRepo->createQuotation($user_id, $discount_code);
    }

    public function ItemOfCart()
    {
        $user_id = auth()->id();
        return $this->requestRepo->countItemInCart($user_id);
    }

    public function unpaidQuotationByUserId($user_id)
    {
        return $this->quotationRepo->getQuotationByUserId($user_id);
    }

    public function getQuotationById($id)
    {
        return $this->quotationRepo->getQuotationWithId($id);
    }

    public function purchasedQuotationByUserId($user_id)
    {
        return $this->quotationRepo->getPurchasedByUserId($user_id);
    }

    public function getUnpriceQuotation()
    {
        return $this->quotationRepo->getAllUnpriceQuotation();
    }

    public function getTotalNetPriceOfRequest($data)
    {
        $price = 0;
        foreach ($data as $request) {
            $price = $price + $request->customer_price;
        }
        return $price;
    }

    public function calculateTotalPrice($price, $discount_amount)
    {
        return $price - $discount_amount;
    }

    public function updateQuotation($quotation_id, $data)
    {
        return $this->quotationRepo->updateQuotationWithPrice($quotation_id, $data);
    }

    public function payQuotationByGate($quotation_id)
    {
        return 1;
    }

    public function changeStatus($id, $status)
    {
        return $this->quotationRepo->changStatusOfQuotation($id, $status);
    }

    public function getQuotationByStatus($status)
    {
        return $this->quotationRepo->getQuotationWithStatus($status);
    }

    public function getReportByDate($first_date, $second_date, $kind)
    {
        if ($kind == "unpaid") {
            $status =1;
            return $this->quotationRepo->getQuotationReportWithDate ($first_date,$second_date,$status);
        } elseif ($kind == "paid") {
            $status = 4;
            return $this->quotationRepo->getQuotationReportWithDate ($first_date,$second_date,$status);
        } elseif ($kind == "payment") {
            return "payment";
        }
    }
}
