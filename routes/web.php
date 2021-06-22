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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//shopes routes
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/shopes', 'shopescontroller@index')->name('shopes');
Route::get('/shopes/create', 'shopescontroller@create')->name('add');
Route::post('/shopes/store', 'shopescontroller@store')->name('store');
//categores rotes
Route::get('/categores', 'categorycontroller@index')->name('categores');
Route::get('/categores/create', 'categorycontroller@create')->name('add');
Route::post('/categores/store', 'categorycontroller@store')->name('store');
Route::get('/category/products/{id}', 'categorycontroller@products')->name('pro');
Route::get('/category/edit/{id}', 'categorycontroller@edit')->name('edit');
Route::put('/category/update/{id}', 'categorycontroller@update')->name('edit');
Route::get('/category/delete/{id}', 'categorycontroller@destroy')->name('delete');
//prodaucts
Route::get('/prodaucts', 'productscontroller@index')->name('categores');
Route::get('/prodaucts/create', 'productscontroller@create')->name('add');
Route::post('/prodaucts/store', 'productscontroller@store')->name('store');
Route::get('/prodaucts/show/{id}', 'productscontroller@show')->name('show');
Route::get('/prodaucts/edit/{id}', 'productscontroller@edit')->name('edit');
Route::put('/prodaucts/update/{id}', 'productscontroller@update')->name('update');
Route::get('/prodaucts/delete/{id}', 'productscontroller@destroy')->name('delete');
Route::get('/prodaucts/report', 'productscontroller@report')->name('delete');
//customers
Route::get('/costomers', 'custmerscontroller@index')->name('custmoers');
Route::get('/costomers/report', 'custmerscontroller@report')->name('custmoersreport');
//orders
Route::get('/order/{id}', 'orderscontroller@show')->name('show');
Route::post('/order/pinding/{id}', 'orderscontroller@pinding')->name('show');
Route::get('/orderspinding/index', 'orderscontroller@pindingindex')->name('show');
Route::get('/order/pinding/show/{id}', 'orderscontroller@showpinding')->name('show');
Route::post('/order/deleverd/{id}', 'orderscontroller@deleverd')->name('show');
Route::get('/ordersdev/index', 'orderscontroller@delverdindex')->name('show');
Route::get('/order/dev/show/{id}', 'orderscontroller@showdeleverd')->name('show');