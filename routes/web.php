<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['auth','web']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/viewProfile', 'HomeController@view');
    Route::post('/editProfile', 'HomeController@edit');

    Route::group(['prefix'=>'request'],function (){
       Route::post('store','RequestItemController@store');
       Route::delete('/{request_id}/delete','RequestItemController@delete');
    });

    Route::group(['prefix'=>'quotation'],function (){
        Route::get('create','QuotationController@create');
        Route::post('store','QuotationController@store');
        Route::get('emptyCart','QuotationController@emptyCart');
        Route::get('index','QuotationController@index');
        Route::get('/{quotation_id}/view','QuotationController@view');
        Route::get('/{quotation_id}/pay','QuotationController@pay');
        Route::get('purchased','QuotationController@purchased');
        Route::get('/purchased/{quotation_id}/view','QuotationController@purchasedView');
    });
    Route::group(['prefix'=>'wishList'],function (){
        Route::get('create','WishListController@create');
        Route::get('index','WishListController@index');
        Route::post('store','WishListController@store');
        Route::delete('/{wish_id}/delete','WishListController@delete');
    });

    Route::group(['prefix'=>'admin','middleware'=>'admin'],function (){

        Route::get('panel','HomeController@adminIndex');

        Route::get('/currencyPrice','CurrencyController@index');
        Route::post('currencyPrice/store','CurrencyController@store');
        Route::delete('currencyPrice/{currency_id}/delete','CurrencyController@delete');

        Route::get('/discount','DiscountController@index');
        Route::post('/discount/store','DiscountController@store');
        Route::delete('/discount/{discount_id}/delete','DiscountController@delete');

        Route::get('quotation','QuotationController@adminQuotation');
        Route::get('quotation/{quotation_id}/view','QuotationController@adminViewQuotation');
        Route::post('quotation/{quotation_id}/update','QuotationController@adminUpdateQuotation');

        Route::get('/purchasedItem/paid','PurchasedItemController@adminPaidQuotation');
        Route::get('/purchasedItem/purchased','PurchasedItemController@adminPurchasedQuotation');
        Route::get('/purchasedItem/arrived','PurchasedItemController@adminArrivedQuotation');
        Route::get('/purchasedItem/shipped','PurchasedItemController@adminShippedQuotation');
        Route::get('/purchasedItem/received','PurchasedItemController@adminReceivedQuotation');
        Route::get('/purchasedItem/delivered','PurchasedItemController@adminDeliveredQuotation');
        Route::get('/purchasedItem/{purchasedItem_id}/edit','PurchasedItemController@adminDataentry');
        Route::post('/purchasedItem/{purchasedItem_id}/update/{status}','PurchasedItemController@adminPurchasedItemUpdate');

        Route::get('/user/{user_id}/view','HomeController@adminView');
        Route::get('/user/view','HomeController@adminUserView');

        Route::put('request/{request_id}/store','RequestItemController@update');
    });
    Route::get('test',function (){
       return view('dashboard.editProfile');
    });
});
