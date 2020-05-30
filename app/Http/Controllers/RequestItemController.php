<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemRequest;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class RequestItemController extends Controller
{
    public function create (){
            return view('panel.form');
    }
    public function store (ItemRequest $itemRequest){
            return $itemRequest->all();
    }
}
