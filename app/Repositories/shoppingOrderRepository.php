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

}
