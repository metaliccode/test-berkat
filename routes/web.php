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

Auth::routes();

// untuk logout
Route::get('logout', function () {
    Auth::logout();
    return Redirect::to('/login');
});

Route::get('/', 'DashboardController@index')->name('dashboard');

Route::resource('products', 'ProductController');

Route::resource('customers', 'CustomerController');

Route::resource('transactions', 'Sales_orderController');
