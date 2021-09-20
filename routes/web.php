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
Route::get('/login', 'App\Http\Controllers\LoginController@feLogin')->name('loginPage');
Route::get('/post-login', 'App\Http\Controllers\LoginController@login')->name('login');
Route::get('/logout', 'App\Http\Controllers\LoginController@logout')->name('logout');

Route::redirect('/', '/id');
Route::group(['prefix' => '{language}'], function () {
    Route::get('/', 'App\Http\Controllers\FrontendController@index')->name('home');
    Route::get('/profile', 'App\Http\Controllers\FrontendController@profil')->name('profil');
    Route::get('/article', 'App\Http\Controllers\FrontendController@articles')->name('articles');
    Route::get('/article/{link}', 'App\Http\Controllers\FrontendController@articleDetail')->name('article');
    Route::get('/gallery', 'App\Http\Controllers\FrontendController@gallery')->name('gallery');
    Route::get('/contact', 'App\Http\Controllers\FrontendController@contact')->name('contact');
});



Route::post('/super-admin', 'App\Http\Controllers\SuperAdminController@index')->name('dashboard');
Route::post('/super-admin/post-akun', 'App\Http\Controllers\SuperAdminController@buatAkun')->name('buatAkun');

Route::prefix('/admin')->group(function () {
    Route::get('/dashboard', 'App\Http\Controllers\AdminController@dashboard')->name('dashboard-admin');
    Route::get('/artikel', 'App\Http\Controllers\AdminController@allArticles')->name('allArticle');
    Route::get('/artikel/{link}', 'App\Http\Controllers\AdminController@detailArticle')->name('article-detail');
    Route::get('/artikel-baru', 'App\Http\Controllers\AdminController@createArticlesPage')->name('create-article');
    Route::get('/edit-artikel/{id}', 'App\Http\Controllers\AdminController@editArticlePage')->name('edit-article');
    Route::post('/post-edit-artikel', 'App\Http\Controllers\AdminController@postEditArtikel')->name('post-edit-article');
    Route::post('/post-artikel', 'App\Http\Controllers\AdminController@buatArtikel')->name('buatArtikel');
    Route::post('/upload-gambar', 'App\Http\Controllers\AdminController@uploadGambar')->name('upload-gambar');
    Route::get('/gambar', 'App\Http\Controllers\AdminController@showGambar')->name('show-gambar');
    Route::post('/gambar/postGambar', 'App\Http\Controllers\AdminController@postGambar')->name('post-gambar');
    Route::get('/gambar/request', 'App\Http\Controllers\AdminController@reqGambar')->name('req-gambar');
    Route::post('/gambar/postReqGambar', 'App\Http\Controllers\AdminController@postReqGambar')->name('post-req-gambar');
});