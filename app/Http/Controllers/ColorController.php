<?php

namespace App\Http\Controllers;

use App\color;
use App\Http\Requests\colorRequest;
use App\Service\colorService;
use http\Exception\BadConversionException;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    /**
     * @var colorService
     */
    private $colorService;

    public function __construct(
        colorService $colorService
    )
    {
        $this->colorService = $colorService;
    }
    public function index()
    {
        $colors =$this->colorService->getAllColor();
        return view('panel.shop.color',compact('colors'));
    }

    public function store(colorRequest $colorRequest)
    {
        $this->colorService->createColor($colorRequest->all());
        return back();
    }

    public function destroy($color_id)
    {
        $this->colorService->deleteColorWithId($color_id);
        return back();
    }
}
