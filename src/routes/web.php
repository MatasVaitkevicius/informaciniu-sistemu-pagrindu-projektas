<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('home');
});

Route::view('/products', 'products')->name('products');
Route::view('/administrator', 'administrator')->name('administrator');
Route::view('/orderProductsHistory', 'order-products-history')->name('orderProductsHistory');
Route::view('/soldProductsHistory', 'sold-products-history')->name('soldProductsHistory');
Route::view('/traders', 'traders')->name('traders');
Route::view('/buyers', 'buyers')->name('buyers');
Route::view('/unapprovedProducts', 'unapprovedProducts')->name('unapprovedProducts');
Route::view('/cryptoPrices', 'cryptoPrices')->name('cryptoPrices');

Auth::routes();

