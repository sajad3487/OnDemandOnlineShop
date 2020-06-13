<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemRequest;
use Illuminate\Http\Request;
use App\Service\RequestService;
use function GuzzleHttp\Promise\all;

class RequestItemController extends Controller
{

    /**
     * @var RequestService
     */
    private $requestService;

    public function __construct(RequestService $requestService){

        $this->requestService = $requestService;
    }
    public function create (){
        return view('dashboard.createRequest');
    }
    public function score (ItemRequest $itemRequest){
        $this->requestService->scoreRequest($itemRequest);
        return back();
    }
    public function delete ($request_id){
        $this->requestService->deleteRequestById($request_id);
        return back();
    }
}
