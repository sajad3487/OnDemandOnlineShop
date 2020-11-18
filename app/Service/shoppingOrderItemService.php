<?php


namespace App\Service;


use App\Repositories\shoppingOrderItemRepository;

class shoppingOrderItemService
{

    /**
     * @var shoppingOrderItemRepository
     */
    private $shoppingOrderItemRepo;

    public function __construct(
        shoppingOrderItemRepository $shoppingOrderItemRepository
    )
    {
        $this->shoppingOrderItemRepo = $shoppingOrderItemRepository;
    }

    public function createItem ($data){
        return $this->shoppingOrderItemRepo->create($data);
    }

}
