<?php


namespace App\Repositories;


use App\wishList;

class wishListRepository
{
    /**
     * @var wishList
     */
    private $wishList;

    public function __construct()
    {
        $this->wishList = new wishList();
    }
    public function createWish ($data){
        return wishList::create($data);
    }
    public function deleteWishById ($id){
        return $this->wishList->findOrFail($id)->delete();
    }
}
