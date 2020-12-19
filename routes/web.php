<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;

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

Route::get('/',
        [HomeController::class,'index']
    );

Route::get('checkout/success',[CheckoutController::class,'success'])->name('success');


Route::get('details',[HomeController::class,'details'])->name('details.trip');
Route::get('checkout',[CheckoutController::class,'index'])->name('Checkout');
Route::prefix('admin')
    ->namespace('admin')
    ->group(function(){
        Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard.admin');
    });

