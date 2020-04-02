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
    return view('home');
});

Route::get('/products/create', 'ProductController@create')->name('products.create');
Route::post('/products', 'ProductController@store')->name('products.store');

Route::get('/products/{productId}','ProductController@show' )->name('products.show');
Route::get('/products/{productId}/edit','ProductController@edit' )->name('products.edit');
Route::put('/products/{productId}','ProductController@update' )->name('products.update');
Route::delete('/products/{productId}','ProductController@delete' )->name('products.delete');
Route::get('/catalog', 'ProductController@index')->name('catalog');




Route::get('/cart', function () {
    return view('cart/cart');
});


Route::get('/tirages', function () {
    return view('tirages');
});

Route::get('/box', function () {
    return view('box');
});
