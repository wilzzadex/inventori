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
Route::get('/',['as' => 'login','uses' => 'LoginController@index']);
Route::get('logout',['as' => 'logout','uses' => 'LoginController@logout']);
Route::post('postlogin',['as' => 'post.login','uses' => 'LoginController@post']);

Route::group(['middleware' => 'auth'], function(){
    Route::prefix('admin')->group(function(){
    
        Route::get('/',['as' => 'back.dashboard','uses' => 'BackDashboardController@index']);
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
                Route::post('store', ['as' => 'in.store.all', 'uses' => 'TransaksiController@inStoreAll']);
                Route::get('data.barang.masuk', ['as' => 'data.barang.masuk', 'uses' => 'TransaksiController@dataBarangMasuk']);
            });

            Route::prefix('out')->group(function(){
                Route::get('/', ['as' => 'out', 'uses' => 'TransaksiController@indexOut']);
                Route::get('add', ['as' => 'out.add', 'uses' => 'TransaksiController@addOut']);
                Route::get('store/temp', ['as' => 'out.store.temp', 'uses' => 'TransaksiController@store_out_temp']);
                Route::get('destroy', ['as' => 'out.destroy', 'uses' => 'TransaksiController@outDestroy']);
                Route::get('edit', ['as' => 'out.edit', 'uses' => 'TransaksiController@outEdit']);
                Route::get('update', ['as' => 'out.update', 'uses' => 'TransaksiController@outUpdate']);
                Route::post('store', ['as' => 'out.store.all', 'uses' => 'TransaksiController@outStoreAll']);
                Route::get('data.barang.keluar', ['as' => 'data.barang.keluar', 'uses' => 'TransaksiController@dataBarangKeluar']);
            });
            
            
        });
        
        Route::prefix('on-hand')->group(function(){
            Route::get('/', ['as' => 'onhand', 'uses' => 'LaporanController@onhand']);
            Route::get('data', ['as' => 'onhand.data', 'uses' => 'LaporanController@dataOnhand']);
            Route::post('excel', ['as' => 'onhand.excel', 'uses' => 'LaporanController@excelOnhand']);
        });

        Route::prefix('histori')->group(function(){
            Route::get('in', ['as' => 'histori.in', 'uses' => 'TransaksiController@inHistori']);
            Route::get('data', ['as' => 'onhand.data', 'uses' => 'LaporanController@dataOnhand']);
            Route::post('excel', ['as' => 'onhand.excel', 'uses' => 'LaporanController@excelOnhand']);
        });

    });

   

    
});
