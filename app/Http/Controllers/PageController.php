<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function firstPage (){
        return view('panel.shop.firstPage');
    }
}
