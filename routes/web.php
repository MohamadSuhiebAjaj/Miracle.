<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/','DepartmentController@index')->name('home.welcome');
Route::get('/product/show/{id}','ProductController@show')->name('product.show');
Route::get('/group/show/{department_id}','ProductTypeController@show')->name('group.show');
Auth::routes();
Route::get('/product/sell','ProductController@sell')->name('product.sell');
Route::get('/products/show/{type_id}','ProductController@productshow')->name('group.show.product');
Route::get('/cart','cartController@showcart')->name('cart.show');
Route::get('/add-to-cart/{id}','cartController@add')->name('cart.add');
Route::get('/update-cart', 'cartController@update')->name('cart.update');
Route::get('/remove-from-cart/{id}', 'cartController@remove')->name('cart.delete');
Route::get('/checkout', 'orderController@getCheckout')->name('checkout.index');
Route::post('/checkout/order', 'orderController@placeOrder')->name('checkout.place.order');