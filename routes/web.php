<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ShopController;
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

Route::get('/', [LandingPageController::class, 'index']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/shop', [ShopController::class, 'index']);
Route::get('/cart', [CartController::class, 'index']);
Route::get('/shop/detail/{id}', [ShopController::class, 'show']);
Route::get('/shop/category/{id}', [ShopController::class, 'category']);
Route::post('/cart/store', [CartController::class, 'store']);
route::patch('/cart/{id}', [CartController::class, 'update']);
Route::post('/checkout', [CheckoutController::class, 'store']);