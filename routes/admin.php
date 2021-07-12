<?php
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;

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
Route::get("/admin" ,[DashboardController::class , 'index'])->middleware('auth' ,'check.admin')->name('admin');

Route::middleware('auth' , 'check.admin')->prefix("admin")->group(function(){

   Route::resource("/user" , UserController::class);

   Route::resource("/products" , ProductController::class);

   Route::resource("/categories" , CategoryController::class);
});