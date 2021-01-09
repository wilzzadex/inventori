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

Route::prefix('admin')->group(function(){
    Route::get('dashboard',['as' => 'back.dashboard','uses' => 'BackDashboardController@index']);
    
    Route::prefix('user')->group(function(){
        Route::get('/',['as' => 'back.user','uses' => 'UserController@index']);
        Route::get('add',['as' => 'back.user.add','uses' => 'UserController@add']);
        Route::post('store',['as' => 'back.user.store','uses' => 'UserController@store']);
        Route::get('destroy',['as' => 'back.user.destroy','uses' => 'UserController@destroy']);
        Route::get('edit/{id}',['as' => 'back.user.edit','uses' => 'UserController@edit']);
        Route::post('update/{id}',['as' => 'back.user.update','uses' => 'UserController@update']);
    });

    Route::prefix('barang')->group(function(){
        Route::get('/', ['as' => 'barang', 'uses' => 'BarangController@index']);
        Route::get('add', ['as' => 'barang.add', 'uses' => 'BarangController@add']);
        Route::post('store', ['as' => 'barang.store', 'uses' => 'BarangController@store']);
        Route::get('destroy', ['as' => 'barang.destroy', 'uses' => 'BarangController@destroy']);
        Route::get('edit/{id}', ['as' => 'barang.edit', 'uses' => 'BarangController@edit']);
        Route::post('update/{id}', ['as' => 'barang.update', 'uses' => 'BarangController@update']);
    });

    Route::prefix('transaksi')->group(function(){
        Route::prefix('in')->group(function(){
            Route::get('/', ['as' => 'in', 'uses' => 'TransaksiController@indexIn']);
            Route::get('add', ['as' => 'in.add', 'uses' => 'TransaksiController@addIn']);
            Route::get('store/temp', ['as' => 'in.store.temp', 'uses' => 'TransaksiController@store_in_temp']);
            Route::get('destroy', ['as' => 'in.destroy', 'uses' => 'TransaksiController@inDestroy']);
            Route::get('edit', ['as' => 'in.edit', 'uses' => 'TransaksiController@inEdit']);
            Route::get('update', ['as' => 'in.update', 'uses' => 'TransaksiController@inUpdate']);
        });
    });
});
