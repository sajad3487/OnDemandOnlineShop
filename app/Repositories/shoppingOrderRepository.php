<?php


namespace App\Repositories;


use App\DesignPatterns\Repository;
use App\shoppingOrder;
use Illuminate\Database\Eloquent\Model;

class shoppingOrderRepository extends Repository
{
    public function __construct()
    {
        $this->model = new shoppingOrder();
    }

    public function getOrdersOfUser ($user_id){
        return shoppingOrder::where('user_id',$user_id)
            ->with('order_item')
            ->with('order_item.product')
            ->get();
    }

    public function getShoppingOrderById ($order_id){
        return shoppingOrder::where('id',$order_id)
            ->with('user')
            ->with('order_item')
            ->with('order_item.product')
            ->first();
    }

}
