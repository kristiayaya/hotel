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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::middleware('role:admin')->get('/dashboard', function(){
    return 'Dashboard';
})->name('dashboard');

Route::resource('admin','adminController');
Route::resource('fashotel','fashotelController');
Route::resource('faskamar','faskamarController');
Route::resource('kamar','kamarController');
Route::resource('resepsionis','resepsionisController');
Route::resource('reservasi','reservasiController');
Route::resource('tamu','tamuController');