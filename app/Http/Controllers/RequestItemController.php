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
        return $this->requestService->scoreRequest($itemRequest);
    }
    public function delete (){
        dd('this is request delete');
    }
}
