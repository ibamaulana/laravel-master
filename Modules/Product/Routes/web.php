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

Route::group(['prefix' => 'panel/product', 'middleware' => 'auth',], function(){
	Route::get('/', 'ProductController@index')->name('panel.product');
	Route::get('get-tabel', 'ProductController@getTabel')->name('panel.product.tabel');
	Route::get('form', 'ProductController@form')->name('panel.product.form');
});