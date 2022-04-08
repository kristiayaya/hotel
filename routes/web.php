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

Route::get('/', function () {
    return view('auth.login');
})->name('welcome');

Route::get('/kamartamu', function () {
    return view('ketkamar');
})->name('tamu.kamar');

// Route::get('/Beranda', function () {
//     return view('welcome');
// });

Route::get('/FasilitasHotel', function () {
    return view('fashotel.tampilanhotel');
})->name('fashotel.tampilanhotel');

Route::get('/FasilitasHotel', 'tamuController@fasilitashotel')->name('FasilitasHotel');

Route::get('/tampilanhoteltamu', function () {
    return view('tampilanhotel');
})->name('tamhotel');
// Route::get('/cetak', function () {
//     return view('reservasi.cetak');
// })->name('cetak');
// Route::get('/tamkam', function () {
    //     return view('Template.tamkam');
    // })->name('tamkam');
    
    Auth::routes();
    
    Route::get('/Beranda', 'HomeController@index')->name('beranda');
    Route::get('/home', 'HomeController@home')->name('home');
    Route::get('/fassuperior', 'tamuController@superior')->name('fassuperior');
    Route::get('/fasdeluxe', 'tamuController@deluxe')->name('fasdeluxe');
    Route::get('/datareservasi', 'datareservasiController@index')->name('datareservasi');
    Route::post('/cari', 'reservasiController@cari')->name('cari');
    Route::post('/cetak/{id}', 'reservasiController@cetak')->name('cetak');
    Route::post('/filtering', 'reservasiController@filtering')->name('reservasi.filtering');
    Route::get('/tampilanhotel', 'resepsionisController@show')->name('tampilanku');
    Route::middleware('role:admin')->get('/dashboard', function(){
        return 'Dashboard';
    })->name('dashboard');
    
    Route::post('/datareservasi/checkin/{id}', 'tamuController@checkin');
    Route::post('/datareservasi/checkout/{id}', 'tamuController@checkout');
    Route::post('/datareservasi/batal/{id}', 'tamuController@batal');


    Route::post('/reservasi/status/on/{id}', 'reservasiController@checkin');
    Route::post('/reservasi/status/out/{id}', 'reservasiController@checkout');
    Route::post('/reservasi/status/batal/{id}', 'reservasiController@batal');

    Route::resource('admin','adminController');
    Route::resource('fashotel','fashotelController');
    Route::resource('faskamar','faskamarController');
    Route::resource('kamar','kamarController');
    Route::resource('resepsionis','resepsionisController');
    Route::resource('reservasi','reservasiController');
    Route::resource('tamu','tamuController');           
    
// Route::post('/reservasi/status/on/{id}', 'resepsionisController@checkin')->name('reservasi.in');