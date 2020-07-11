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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colors =$this->colorService->getAllColor();
        return view('panel.shop.color',compact('colors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(colorRequest $colorRequest)
    {
        $this->colorService->createColor($colorRequest->all());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\color  $color
     * @return \Illuminate\Http\Response
     */
    public function show(color $color)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\color  $color
     * @return \Illuminate\Http\Response
     */
    public function edit(color $color)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\color  $color
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, color $color)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\color  $color
     * @return \Illuminate\Http\Response
     */
    public function destroy($color_id)
    {
        $this->colorService->deleteColorWithId($color_id);
        return back();
    }
}
