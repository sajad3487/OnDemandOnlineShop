<?php

namespace App\Http\Controllers;

use App\currency;
use App\Http\Requests\cuurencyRequest;
use App\Service\currencyService;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    /**
     * @var currency
     */
    private $currencyPrice;

    public function __construct(currencyService $currencyService)
    {
        $this->currencyPrice = $currencyService;
    }

    public function index (){
        $currencyPrice = $this->currencyPrice->getAllCurrencyPrices();
        return view('panel.currencyPrice',compact('currencyPrice'));
    }
    public function store (cuurencyRequest $cuurencyRequest){
        $this->currencyPrice->setNewCurrencyPrice($cuurencyRequest->all());
        return back();
    }
    public function delete ($currency_id){
        $this->currencyPrice->deleteCurrencyPrice($currency_id);
        return redirect('/admin/currencyPrice');
    }
}
