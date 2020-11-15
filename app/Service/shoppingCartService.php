<?php


namespace App\Service;


use App\Repositories\shoppingCartRepository;

class shoppingCartService
{
    /**
     * @var shoppingCartRepository
     */
    private $shoppingCartRepo;

    public function __construct(
        shoppingCartRepository $shoppingCartRepository
    )
    {
        $this->shoppingCartRepo = $shoppingCartRepository;
    }

    public function addProductToCart ($data){
        return $this->shoppingCartRepo->create($data);
    }

    public function cartNumber(){
        $user_id = auth()->id();
        return $this->shoppingCartRepo->getNumberOfCartNumber ($user_id);
    }

    public function shoppingCartItems($user_id){
        return $this->shoppingCartRepo->getShoppingCartItem($user_id);
    }

    public function emptyCartOfUser ($user_id){
        return $this->shoppingCartRepo->emptyUserCart ($user_id);
    }

}
