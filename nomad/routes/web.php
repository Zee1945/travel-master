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

use Doctrine\DBAL\Driver\Middleware;

Route::get('/', 'HomeController@index')->name('home');
Route::get('/detail/{slug}', 'DetailController@index')->name('detail');

// Route::get('/checkout', 'CheckoutController@index')->name('checkout');

// Route::get('/checkout/success', 'CheckoutController@success')->name('checkout-success');
Route::get('/checkout/{id}', 'CheckoutController@index')
    ->name('checkout')
    ->Middleware(['auth', 'verified']);

Route::post('/checkout/{id}', 'CheckoutController@process')
    ->name('checkout_process')
    ->Middleware(['auth', 'verified']);

Route::post('/checkout/create/{detail_id}', 'CheckoutController@create')
    ->name('checkout-create')
    ->Middleware(['auth', 'verified']);

Route::get('/checkout/remove/{detail_id}', 'CheckoutController@remove')
    ->name('checkout-remove')
    ->Middleware(['auth', 'verified']);

Route::get('/checkout/confirm/{id}', 'CheckoutController@success')
    ->name('checkout-success')
    ->Middleware(['auth', 'verified']);

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::get('/', 'DashboardController@index')
            ->name('dashboard');

        Route::resource('travel-package', 'TravelPackageController');
        Route::resource('gallery', 'GalleryController');
        Route::resource('transaction', 'TransactionController');
    });

Auth::routes(['verify' => true]);
