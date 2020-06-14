<?php


namespace App\Service;


use App\Repositories\wishListRepository;

class wishListService
{
    /**
     * @var wishListRepository
     */
    private $wishListRepo;

    public function __construct(wishListRepository $wishListRepository)
    {
        $this->wishListRepo = $wishListRepository;
    }
    public function createWishList($data){
        return $this->wishListRepo->createWish($data);
    }
    public function deleteWish($id){
        return $this->wishListRepo->deleteWishById($id);
    }
}
