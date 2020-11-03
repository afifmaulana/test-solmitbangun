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

Route::get('/', function () {
    return view('pages.artikel.dashboard');
});

Route::get('/kalkulator', 'kalkulator\KalkulatorController@index')->name('kalkulator.index');
Route::post('/kalkulator', 'kalkulator\KalkulatorController@hasil')->name('kalkulator.hasil');


Route::group(['prefix' => '/admin'], function(){

    Route::get('/kategori', 'KategoriController@index')->name('kategori');
    Route::get('/kategori/create', 'KategoriController@create')->name('kategori.create');
    Route::post('/kategori/create', 'KategoriController@store')->name('kategori.store');
    Route::get('/kategori/edit/{id}', 'KategoriController@edit')->name('kategori.edit');
    Route::patch('/kategori/edit/{id}', 'KategoriController@update')->name('kategori.update');
    Route::get('/kategori/destroy/{id}', 'KategoriController@destroy')->name('kategori.destroy');

    Route::get('/detail/{slug}', 'ArtikelController@artikeldetail')->name('artikel.detail');
    Route::get('/profile', 'ArtikelController@profile')->name('artikel.profile');


    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/artikel', 'ArtikelController@index')->name('artikel');
    Route::get('/artikel/create', 'ArtikelController@create')->name('artikel.create');
    Route::post('/artikel/create', 'ArtikelController@store')->name('artikel.store');
    Route::get('/artikel/edit/{id}', 'ArtikelController@edit')->name('artikel.edit');
    Route::patch('/artikel/edit/{id}', 'ArtikelController@update')->name('artikel.update');
    Route::get('/artikel/destroy/{id}', 'ArtikelController@destroy')->name('artikel.destroy');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
