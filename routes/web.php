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

Route::group(['middleware' => ['web']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/newOrder', 'RequestItemController@create');
    Route::post('/storeNewOrder', 'RequestItemController@store');
    Route::get('/test', function (){
        return view('layouts.cDashboardTemplate');
    });
});
