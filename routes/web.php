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
Route::group(['middleware' => ['auth']], function(){
    Route::get('dashboard', 'DashboardController@index');
    Route::get('sorting/industri','DashboardController@sorting');
    Route::get('industri/show/{id}','IndustriController@show');
});

Route::group(['middleware' => ['auth','AkunTipe:adm']], function(){

    // Eksport Excel
    Route::get('export_excel_ind', 'DashboardController@export_excel');

    // Badan Usaha
    Route::get('badan_usaha', 'BadanUsahaController@index');
    Route::get('badan_usaha/tambah', 'BadanUsahaController@create');
    Route::post('badan_usaha/store','BadanUsahaController@store');
    Route::get('badan_usaha/edit/{id}', 'BadanUsahaController@edit');
    Route::post('badan_usaha/update','BadanUsahaController@update');
    Route::get('badan_usaha/delete/{id}','BadanUsahaController@destroy');
    Route::get('badan_usaha/recover/{id}','BadanUsahaController@recover');
    Route::get('badan_usaha/permanent_delete/{id}','BadanUsahaController@permanent_delete');

    // Kecamatan
    Route::get('kecamatan', 'KecamatanController@index');
    Route::get('kecamatan/tambah', 'KecamatanController@create');
    Route::post('kecamatan/store','KecamatanController@store');
    Route::get('kecamatan/edit/{id}', 'KecamatanController@edit');
    Route::post('kecamatan/update','KecamatanController@update');
    Route::get('kecamatan/delete/{id}','KecamatanController@destroy');

    // User
    Route::get('user','UserController@index');
    Route::get('user/tambah','UserController@create');
    Route::get('user/edit/{id}','UserController@edit');
    Route::post('user/store','UserController@store');
    Route::post('user/update','UserController@update');
    Route::get('user/delete/{id}','UserController@destroy');

    // Industri
    Route::get('industri/tambah','IndustriController@create');
    Route::get('industri','IndustriController@index');
    Route::get('industri/edit/{id}','IndustriController@edit');
    Route::get('industri/delete/{id}','IndustriController@destroy');
    Route::get('industri/recover/{id}','IndustriController@recover');
    Route::get('industri/permanent_delete/{id}','IndustriController@permanent_delete');
   
    // Recover Data
    Route::get('recover_data','RecoverDataController@index'); 

    // Api
    Route::get('getkec','IndustriController@getKec');
    Route::get('getkel/{id}','IndustriController@getKel');
    Route::post('crudthp1','IndustriController@storeThp1');
    Route::post('crudthp1_update','IndustriController@ubahIndustri');
    Route::post('crudthp2','IndustriController@storeThp2');
    Route::post('crudthp3','JenisProduksiController@storeThp3');
    Route::post('crudthp4','BahanBakuController@storeThp4');
    Route::post('crudthp5','TenagaKerjaController@storeThp5');
    Route::post('crudthp6','PemasaranController@storeThp6');
    Route::post('crudthp7','BahanBakarController@storeThp7');

});

Route::get('/','HomeController@index');

Auth::routes(['register' => false,'reset' => false, 'verify' => false]);

