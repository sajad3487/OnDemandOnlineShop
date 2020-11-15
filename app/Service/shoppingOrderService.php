<?php


namespace App\Service;


use App\Repositories\shoppingOrderRepository;

class shoppingOrderService
{
    /**
     * @var shoppingOrderRepository
     */
    private $shoppigOrderRepo;

    public function __construct(
        shoppingOrderRepository $shoppingOrderRepository
    )
    {
        $this->shoppigOrderRepo = $shoppingOrderRepository;
    }

}
