<?php


namespace App\Repositories;


use App\DesignPatterns\Repository;
use App\shopping_order_item;
use Illuminate\Database\Eloquent\Model;

class shoppingOrderItemRepository extends Repository
{
    public function __construct()
    {
        $this->model = new shopping_order_item();
    }

}
