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

//Home
Route::get('/', function () {
    return view('pages.login');
});

Route::get('/home','HomeController@HomePages');

// Quản lý doanh mục

Route::get('/category','CategoryController@index');
Route::get('/delete-category/{id}','CategoryController@delete_Category');
Route::get('/update-category/{id}','CategoryController@update_Category');
Route::post('/add-category','CategoryController@add_category');
Route::post('/update-category-value/{category_id}','CategoryController@update_category_value');
//Quản lý kho

Route::get('/items','ItemsController@index');
