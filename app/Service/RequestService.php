<?php


namespace App\Service;


use App\Http\Requests\ItemRequest;
use App\Repositories\requestItemRepository;


class RequestService
{
    private $requestRepo;
    public function __construct(RequestItemRepository $requestItemRepository)
    {
        $this->requestRepo = $requestItemRepository;
    }

    public function scoreRequest ($itemRequest){
        return $this->requestRepo->createRequestItem($itemRequest);
    }
}
