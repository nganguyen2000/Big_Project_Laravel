<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/home/product', "productsController@index");
Route::post('/register',"productsController@store");
Route::post('/login',"LoginController@login");
Route::get('/home/detail/{id}','productsController@detail');
Route::get('/addproduct', "productsController@showCate");
Route::post('/add-product',"productsController@addProduct");
Route::get('/show/products','productsController@showProducts');
Route::delete('/delete/product/{id}','productsController@deleteProduct');
Route::get('/product/edit/{id}','productsController@edit');
Route::post('/product/update/{id}','productsController@update');
Route::post('/cart/add/{id}','ManageCartController@addToCart');
Route::get('/show/cart','ManageCartController@showCart');