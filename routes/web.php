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
Route::get('/profil', 'App\Http\Controllers\FrontendController@profil')->name('profil');
Route::get('/artikel', 'App\Http\Controllers\FrontendController@articles')->name('articles');
Route::get('/artikel/{link}', 'App\Http\Controllers\FrontendController@articleDetail')->name('article');
Route::get('/galeri', 'App\Http\Controllers\FrontendController@gallery')->name('gallery');
Route::get('/kontak', 'App\Http\Controllers\FrontendController@contact')->name('contact');

Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/post-login', 'App\Http\Controllers\LoginController@login')->name('login');
Route::get('/logout', 'App\Http\Controllers\LoginController@logout')->name('logout');

Route::post('/super-admin', 'App\Http\Controllers\SuperAdminController@index')->name('dashboard');
Route::post('/super-admin/post-akun', 'App\Http\Controllers\SuperAdminController@buatAkun')->name('buatAkun');

Route::get('/admin/dashboard', 'App\Http\Controllers\AdminController@dashboard')->name('dashboard-admin');
Route::get('/admin/artikel', 'App\Http\Controllers\AdminController@allArticles')->name('allArticle');
Route::get('/admin/artikel/{link}', 'App\Http\Controllers\AdminController@detailArticle')->name('article-detail');
Route::get('/admin/artikel-baru', 'App\Http\Controllers\AdminController@createArticlesPage')->name('create-article');
Route::get('/admin/edit-artikel/{link}', 'App\Http\Controllers\AdminController@editArticlePage')->name('edit-article');
Route::post('/admin/post-artikel', 'App\Http\Controllers\AdminController@buatArtikel')->name('buatArtikel');
Route::post('/admin/upload-gambar', 'App\Http\Controllers\AdminController@uploadGambar')->name('upload-gambar');