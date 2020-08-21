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

route::get('/user',"ManageUserController@index")->name('admin.user.index');
Route::delete('/user/delete/{id}',"ManageUserController@delete");
route::get('/user/create',"ManageUserController@create");
Route::post('user/create',"ManageUserController@store");

Route::delete('/product/delete/{id}',"ManageProductController@delete");
route::delete('/category/delete/{id}',"ManageCategoryController@delete");
route::get('/category/edit/{id}',"ManageCategoryController@edit");
Route::patch('/category/edit/{id}',"ManageCategoryController@update");
route::get('/category/create',"ManageCategoryController@create");
route::post('category/create',"ManageCategoryController@store");