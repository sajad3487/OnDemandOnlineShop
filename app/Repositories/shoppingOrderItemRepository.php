<?php


namespace App\Repositories;


use App\DesignPatterns\Repository;
use Illuminate\Database\Eloquent\Model;

class shoppingOrderItemRepository extends Repository
{
    public function __construct()
    {
        $this->model = new shoppingOrderItemRepository();
    }

}
