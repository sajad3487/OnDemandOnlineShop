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

    public function createRequestItem ($data){
//        $this->requestItem = [
//            'link' => $data['link'],
//            'quantity' => $data['quantity'],
//            'description' => $data['description'],
//        ];

        return RequestItem::create(($data)->all());
    }
}
