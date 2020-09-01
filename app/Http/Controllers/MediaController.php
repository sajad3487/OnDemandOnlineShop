<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddMediaRequest;
use App\Http\Requests\mediaRequest;
use App\Http\Requests\RemoveMediaRequest;
use App\Service\mediaService;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    /**
     * @var mediaService
     */
    private $mediaService;

    public function __construct(
        mediaService $mediaService
    )
    {
        $this->mediaService = $mediaService;
    }

    public function store(mediaRequest $mediaRequest)
    {
        dd($mediaRequest->all());
    }

    public function index()
    {
        $pictures = $this->mediaService->getProductPicture();
        return view('panel.shop.media.indexMedia',compact('pictures'));
    }

    public function create()
    {
        dd('hi');
        $pictures = $this->mediaService->getProductPicture();
        return view('panel.shop.media.indexMedia',compact('pictures'));
    }

    public function destroy(Request $request){
        dd($request->all());
    }



}
