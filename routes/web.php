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


        Route::group(['prefix'=>'currencyPrice'],function (){
            Route::get('/','CurrencyController@index');
            Route::post('/store','CurrencyController@store');
            Route::delete('/{currency_id}/delete','CurrencyController@delete');
        });

        Route::group(['prefix'=>'discount'],function (){
            Route::get('/','DiscountController@index');
            Route::post('/store','DiscountController@store');
            Route::delete('/{discount_id}/delete','DiscountController@delete');
        });

        Route::group(['prefix'=>'quotation'],function (){
            Route::get('/','QuotationController@adminQuotation');
            Route::get('/{quotation_id}/view','QuotationController@adminViewQuotation');
            Route::post('/{quotation_id}/update','QuotationController@adminUpdateQuotation');
            Route::post('/view','QuotationController@adminShowQuotation');
            Route::get('/view/{quotation_id}','QuotationController@adminShowQuotationByGet');

            Route::get('/report','QuotationController@adminReport');
            Route::post('/report/unpaidQuotation','QuotationController@adminReportUnpaidQuotaiton');
            Route::post('/report/paidQuotation','QuotationController@adminReportPaidQuotation');
            Route::post('/report/payment','QuotationController@adminReportPayment');
        });

        Route::group(['prefix'=>'purchasedItem'],function (){
            Route::get('/paid','PurchasedItemController@adminPaidPurchasedItem');
            Route::get('/purchased','PurchasedItemController@adminPurchasedPurchasedItem');
            Route::get('/arrived','PurchasedItemController@adminArrivedPurchasedItem');
            Route::get('/shipped','PurchasedItemController@adminShippedPurchasedItem');
            Route::get('/received','PurchasedItemController@adminReceivedPurchasedItem');
            Route::get('/delivered','PurchasedItemController@adminDeliveredPurchasedItem');
            Route::get('/{purchasedItem_id}/edit/{editAll}','PurchasedItemController@adminDataEntry');
            Route::post('/{purchasedItem_id}/update/{status}','PurchasedItemController@adminPurchasedItemUpdate');
            Route::get('/all','PurchasedItemController@adminAllPurchasedItem');
        });

        Route::group(['prefix'=>'user'],function (){
            Route::get('/{user_id}/view','HomeController@adminView');
            Route::get('/view','HomeController@adminUserViewLanding');
            Route::put('/find','HomeController@adminFindUser');
        });

        Route::group(['prefix'=>'shop'],function (){
            Route::get('index','ProductController@index');
            Route::get('create','ProductController@create');
            Route::post('store','ProductController@store');
            Route::post('/addColor','ProductController@addColor');
            Route::post('/addSize','ProductController@addSize');
            Route::post('/{product_id}/update','ProductController@update');
            Route::get('/{product_id}/edit','ProductController@edit');
            Route::delete('/{product_id}/delete','ProductController@destroy');


            Route::get('/color/index','ColorController@index');
            Route::post('/color/store','ColorController@store');
            Route::delete('/color/{color_id}/delete','ColorController@destroy');

            Route::get('/size/index','SizeController@index');
            Route::post('/size/store','SizeController@store');
            Route::delete('/size/{size_id}/delete','SizeController@destroy');

            Route::group(['prefix'=>'media'],function(){
                Route::post('/{media_id}/addMedia','ProductController@add_media_to_product');
                Route::delete('/{media_id}/removeMedia','ProductController@remove_media');
            });

            Route::group(['prefix'=>'category'],function (){
               Route::get('/','CategoryController@index');
                Route::delete('/delete','CategoryController@destroy');
                Route::post('/','CategoryController@store');
                Route::post('/subCategory','CategoryController@subCategory');
                Route::get('/{category_id}/showProduct','CategoryController@showProduct');
            });


        });

        Route::put('request/{request_id}/store','RequestItemController@update');
    });
    Route::get('test',function (){
       return view('dashboard.editProfile');
    });
});
