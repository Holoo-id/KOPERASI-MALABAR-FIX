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

Route::get('/', 'App\Http\Controllers\FrontendController@index')->name('home');
Route::get('/post-login', 'App\Http\Controllers\LoginController@login')->name('login');
Route::post('/super-admin', 'App\Http\Controllers\SuperAdminController@index')->name('dashboard');
Route::post('/super-admin/post-akun', 'App\Http\Controllers\SuperAdminController@buatAkun')->name('buatAkun');
Route::get('/admin/artikel', 'App\Http\Controllers\AdminController@allArticles')->name('allArticle');
Route::post('/admin/post-artikel', 'App\Http\Controllers\AdminController@buatArtikel')->name('buatArtikel');

