<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\CountController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\FeedbackController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductTypeController;
use App\Http\Controllers\Admin\SizeController;
use App\Http\Controllers\Admin\UserController;

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
Route::group(['namespace'=>'Admin','middleware'=> 'guest:admin'],function(){
   Route::get ('/login',[LoginController::class,'getlogin'])->name('getadminlogin');
});



Route::group(['namespace'=>'Admin','middleware'=> 'auth:admin'],function(){
    Route::get ('/',[DashboardController::class,'index'])->name('admindashboard');
    Route::get ('/logout',[LoginController::class,'getlogout'])->name('getadminlogout');

    //////////////////////products/////////////////////////////////////
    Route::get ('/product/create',[ProductController::class,'create'])->name('products.create');
    Route::get ('/product/index',[ProductController::class,'index'])->name('products.index');
    Route::get ('/product/edit/{id}',[ProductController::class,'edit'])->name('products.edit');
    Route::get ('/product/show/{id}',[ProductController::class,'show'])->name('products.show');
    Route::get ('/product/delete/{id}',[ProductController::class,'destroy'])->name('products.delete');
    Route::post('/product/store/{id}',[ProductController::class,'store'])->name('products.store');
    Route::post('/product/update/{id}',[ProductController::class,'update'])->name('products.update');
    /////////////colors////////////////////////////////////////////////////////////
    Route::get ('/color/create/{id}',[ColorController::class,'create'])->name('colors.create');
    Route::get ('/color/index',[ColorController::class,'index'])->name('colors.index');
    Route::get ('/color/edit/{id}',[ColorController::class,'edit'])->name('colors.edit');
    Route::get ('/color/delete/{id}',[ColorController::class,'destroy'])->name('colors.delete');
    Route::post('/color/store/{id}',[ColorController::class,'store'])->name('colors.store');
    Route::post('/color/update/{id}',[ColorController::class,'update'])->name('colors.update');

    ////////////size////////////////////////////////////////////////////////
   Route::get ('/size/create/{id}',[SizeController::class,'create'])->name('sizes.create');
    Route::get ('/size/index',[SizeController::class,'index'])->name('sizes.index');
    Route::get ('/size/edit/{id}',[SizeController::class,'edit'])->name('sizes.edit');
    Route::get ('/size/delete/{id}',[SizeController::class,'destroy'])->name('sizes.delete');
    Route::post('/size/store/{id}',[SizeController::class,'store'])->name('sizes.store');
    Route::post('/size/update/{id}',[SizeController::class,'update'])->name('sizes.update');

     ////////////count////////////////////////////////////////////////////////
   Route::get ('/count/create',[CountController::class,'create'])->name('counts.create');
   Route::get ('/count/index',[CountController::class,'index'])->name('counts.index');
   Route::get ('/count/edit/{id}',[CountController::class,'edit'])->name('counts.edit');
   Route::get ('/count/delete/{id}',[CountController::class,'destroy'])->name('counts.delete');
   Route::post('/count/store',[CountController::class,'store'])->name('counts.store');
   Route::post('/count/update/{id}',[CountController::class,'update'])->name('counts.update');

    ////////////group_fs///////////////////////////////////////////////////////
     Route::get ('/gfs/create',[DepartmentController::class,'create'])->name('group_fs.create');
     Route::get ('/gfs/index',[DepartmentController::class,'index'])->name('group_fs.index');
     Route::get ('/gfs/edit/{id}',[DepartmentController::class,'edit'])->name('group_fs.edit');
     Route::get ('/gfs/delete/{id}',[DepartmentController::class,'destroy'])->name('group_fs.delete');
     Route::post('/gfs/store',[DepartmentController::class,'store'])->name('group_fs.store');
     Route::post('/gfs/update/{id}',[DepartmentController::class,'update'])->name('group_fs.update');

     //////////product_type////////////////////////////////////////////////
     Route::get ('/gs/create',[ProductTypeController::class,'create'])->name('group_s.create');
     Route::get ('/gs/index',[ProductTypeController::class,'index'])->name('group_s.index');
     Route::get ('/gs/edit/{id}',[ProductTypeController::class,'edit'])->name('group_s.edit');
     Route::get ('/gs/delete/{id}',[ProductTypeController::class,'destroy'])->name('group_s.delete');
     Route::post('/gs/store',[ProductTypeController::class,'store'])->name('group_s.store');
     Route::post('/gs/update/{id}',[ProductTypeController::class,'update'])->name('group_s.update');

      //////////order////////////////////////////////////////////////
      Route::get ('/order/index',[OrderController::class,'index'])->name('orders.index');
      Route::get ('/order/show/{id}',[OrderController::class,'show'])->name('orders.show');
      /////////////admin_mangment/////////////////////////////////////////
      Route::get ('/management/create',[AdminController::class,'create'])->name('admins.create');
      Route::post('/management/store',[AdminController::class,'store'])->name('admins.store');
      Route::get ('/management/delete/{id}',[AdminController::class,'destroy'])->name('admins.delete');

      Route::get ('/managementuser/createuser',[UserController::class,'create'])->name('users.create');
      Route::post('/managementuser/storeuser',[UserController::class,'store'])->name('users.store');
      Route::get ('/managementuser/deleteuser/{id}',[UserController::class,'destroy'])->name('users.delete');
      Route::get ('/order/item/{id}',[OrderItemController::class,'index'])->name('ordersitem');
      Route::get ('/statistics',[FeedbackController::class,'statistics'])->name('statistics');

});


Route::post ('/login',[LoginController::class,'login'])-> name('adminlogin');

////{{asset('upload')}}/{{'photo'}}" 