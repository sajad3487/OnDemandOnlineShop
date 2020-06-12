<?php


namespace App\Service;


use App\Http\Requests\ItemRequest;
use App\Repositories\requestRepository;


class RequestService
{
    private $requestRepo;
    public function __construct(RequestRepository $requestItemRepository)
    {
        $this->requestRepo = $requestItemRepository;
    }

    public function scoreRequest ($itemRequest){
        return $this->requestRepo->createRequestItem($itemRequest);
    }
    public function updateRequest ($id,$quotation_id){
        return $this->requestRepo->updateRequestById($id,$quotation_id);
    }
    public function requestItemInCart (){
        $user_id = auth()->id();
        return $this->requestRepo->requestOfCard($user_id);
    }
}
