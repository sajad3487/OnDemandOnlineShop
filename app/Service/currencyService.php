<?php


namespace App\Service;

use App\Repositories\currencyRepository;

class currencyService
{
    /**
     * @var CurrencyRepository
     */
    private $currencyRepo;

    public function __construct(CurrencyRepository $currencyRepository)
    {
        $this->currencyRepo = $currencyRepository;
    }
    public function getAllCurrencyPrices(){
        return $this->currencyRepo->getCurrencies();
    }
    public function setNewCurrencyPrice($data){
        return $this->currencyRepo->newCurrencyPrice($data);
    }
    public function deleteCurrencyPrice($id){
        return $this->currencyRepo->deletePrice($id);
    }
    public function getLastCurrencyPrice(){
        return $this->currencyRepo->getLastPrice();
    }

}
