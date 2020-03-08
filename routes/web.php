<?php

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

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/add/product','ProductController@addproduct');
Route::post('add/product/insert','ProductController@insertproduct');
Route::post('/edit/product/product/update','ProductController@updateproduct');

Route::get('view/product','ProductController@viewproduct');
Route::get('/delete/product/{product_id}','ProductController@deleteproduct');
Route::get('/edit/product/{product_id}','ProductController@editproduct');
