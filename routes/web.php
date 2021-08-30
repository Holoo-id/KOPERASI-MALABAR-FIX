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
});

Route::get('/postLogin', 'App\Http\Controllers\LoginController@login')->name('login');
Route::post('/superAdmin/postAkun', 'App\Http\Controllers\SuperAdminController@buatAkun')->name('buatAkun');
Route::post('/Admin/postArtikel', 'App\Http\Controllers\AdminController@buatArtikel')->name('buatArtikel');

