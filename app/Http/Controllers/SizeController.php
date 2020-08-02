<?php

namespace App\Http\Controllers;

use App\Http\Requests\colorRequest;
use App\Http\Requests\SizeRequest;
use App\Service\colorService;
use App\Service\sizeService;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    private $sizeService;

    public function __construct(
        sizeService $sizeService
    )
    {
        $this->sizeService = $sizeService;
    }
    public function index()
    {
        $sizes =$this->sizeService->getAllSize();
        return view('panel.shop.size',compact('sizes'));
    }

    public function store(SizeRequest $sizeRequest)
    {
        $this->sizeService->createSize($sizeRequest->all());
        return back();
    }

    public function destroy($size_id)
    {
        $this->sizeService->deleteSizeWithId($size_id);
        return back();
    }
}
