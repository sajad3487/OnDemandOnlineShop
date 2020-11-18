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

    public function createOrder ($data){
        return $this->shoppigOrderRepo->create($data);
    }

    public function updateShoppingOrder ($data,$id){
        return $this->shoppigOrderRepo->update($data,$id);
    }

    public function getUserOrder ($user_id){
        return $this->shoppigOrderRepo->getOrdersOfUser ($user_id);
    }

    public function getShoppingOrder ($order_id){
        return $this->shoppigOrderRepo->getShoppingOrderById ($order_id);
    }

}
