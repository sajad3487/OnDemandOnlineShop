<?php


namespace App\Repositories;


use App\DesignPatterns\Repository;
use App\shoppingCart;
use Illuminate\Database\Eloquent\Model;

class shoppingCartRepository extends Repository
{
    public function __construct()
    {
        $this->model = new shoppingCart();
    }

    public function getNumberOfCartNumber ($user_id){
        return shoppingCart::where('user_id',$user_id)->count();
    }

    public function getShoppingCartItem ($user_id){
        return shoppingCart::where('user_id',$user_id)
            ->with('product')
            ->with('product.media')
            ->get();
    }

    public function emptyUserCart ($user_id){
        return shoppingCart::where('user_id',$user_id)->delete();
    }

}
