<?php

use Illuminate\Http\Request;
use App\Http\Controllers\DepartmentapController;
use App\Http\Controllers\ProductTypeapController;
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


Route::get('/department','DepartmentapController@index')->name('home.welcome');
Route::get('/product/show/{id}','productapController@show')->name('product.show');
Route::get('/product-type/department/{department_id}',[ProductTypeapController::class, 'show'])->name('group.show');


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
