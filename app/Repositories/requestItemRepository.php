<?php


namespace App\Repositories;

use App\Http\Requests\ItemRequest;
use App\RequestItem;

class requestItemRepository
{
    /**
     * @var ItemRequest
     */
    private $requestItem;

    public function __construct()
    {
        $this->requestItem = new ItemRequest();
    }

    public function createRequest ($data){
        $this->requestItem->create($data);
        return $data;
    }
}
