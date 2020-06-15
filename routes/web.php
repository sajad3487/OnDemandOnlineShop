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
    Route::get('/home2', 'HomeController@index')->name('home2');
    Route::get('/newOrder', 'RequestItemController@create');
    Route::post('/storeNewOrder', 'RequestItemController@store');

    Route::group(['prefix'=>'request'],function (){
       Route::post('store','RequestItemController@score');
       Route::delete('/{request_id}/delete','RequestItemController@delete');
    });
    Route::group(['prefix'=>'quotation'],function (){
        Route::get('create','QuotationController@create');
        Route::post('score','QuotationController@score');
        Route::get('emptyCart','QuotationController@emptyCart');
        Route::get('index','QuotationController@index');
        Route::get('/{quotation_id}/view','QuotationController@view');
        Route::get('purchased','QuotationController@purchased');
        Route::get('/purchased/{quotation_id}/view','QuotationController@purchasedView');
    });
    Route::group(['prefix'=>'wishList'],function (){
        Route::get('create','WishListController@create');
        Route::get('index','WishListController@index');
        Route::post('score','WishListController@score');
        Route::delete('/{wish_id}/delete','WishListController@delete');
    });
    Route::get('test',function (){
       return view('dashboard.editProfile');
    });
});
