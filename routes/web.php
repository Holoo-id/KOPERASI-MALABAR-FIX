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
Route::redirect('/', '/id');
Route::group(['prefix' => '{language}'], function () {
    Route::get('/', 'App\Http\Controllers\FrontendController@index')->name('home');
    Route::get('/profile', 'App\Http\Controllers\FrontendController@profil')->name('profil');
    // Route::get('/article', 'App\Http\Controllers\FrontendController@articles')->name('articles');
    Route::get('/coffee-story', 'App\Http\Controllers\FrontendController@coffeeStories')->name('coffee-story');
    Route::get('/coffeepedia', 'App\Http\Controllers\FrontendController@coffeepedia')->name('coffeepedia');
    Route::get('/news-event', 'App\Http\Controllers\FrontendController@newsAndEvent')->name('news-event');
    Route::get('/article/{link}', 'App\Http\Controllers\FrontendController@articleDetail')->name('article');
    Route::get('/products', 'App\Http\Controllers\ProductController@allProducts')->name('products');
    Route::get('/product/{link}', 'App\Http\Controllers\ProductController@productDetail')->name('product');
    Route::get('/gallery', 'App\Http\Controllers\FrontendController@gallery')->name('gallery');
    Route::get('/contact', 'App\Http\Controllers\FrontendController@contact')->name('contact');
});
Route::middleware(['guest'])->group(function ()
{
    Route::get('/admin/login', 'App\Http\Controllers\LoginController@index')->name('loginPage');
    Route::get('/admin/post-login', 'App\Http\Controllers\LoginController@login')->name('login');
    // post register belum
});


Route::middleware(['auth'])->group(function ()
{
    Route::get('/auth/logout', 'App\Http\Controllers\LoginController@logout')->name('logout');
    Route::post('/super-admin', 'App\Http\Controllers\SuperAdminController@index')->name('dashboard');
    Route::post('/super-admin/post-akun', 'App\Http\Controllers\SuperAdminController@buatAkun')->name('buatAkun');
    
    Route::prefix('/admin')->group(function () {
        Route::get('/dashboard', 'App\Http\Controllers\AdminController@dashboard')->name('dashboard-admin');
        Route::get('/register', 'App\Http\Controllers\LoginController@register')->name('registerPage');
        Route::prefix('/artikel')->group(function () {
            Route::get('/', 'App\Http\Controllers\AdminController@allArticles')->name('allArticle');
            Route::get('detail/{link}', 'App\Http\Controllers\AdminController@detailArticle')->name('article-detail');
            Route::get('/baru', 'App\Http\Controllers\AdminController@createArticlesPage')->name('create-article');
            Route::get('/edit/{id}', 'App\Http\Controllers\AdminController@editArticlePage')->name('edit-article');
            Route::post('/post-edit', 'App\Http\Controllers\AdminController@postEditArtikel')->name('post-edit-article');
            Route::post('/post', 'App\Http\Controllers\AdminController@buatArtikel')->name('buatArtikel');
            Route::get('/delete/{id}', 'App\Http\Controllers\AdminController@deleteArticle')->name('delete-article');
        });
        Route::prefix('/berita')->group(function () {
            Route::get('/', 'App\Http\Controllers\BeritaController@allNews')->name('semua-berita');
            Route::get('/tambah', 'App\Http\Controllers\BeritaController@createNewsPage')->name('berita-baru');
            Route::post('/post-tambah', 'App\Http\Controllers\BeritaController@createNews')->name('post-berita-baru');
            Route::get('detail/{link}', 'App\Http\Controllers\BeritaController@newsDetail')->name('detail-berita');
            Route::get('/edit/{id}', 'App\Http\Controllers\BeritaController@editNews')->name('edit-berita');
            Route::post('/update', 'App\Http\Controllers\BeritaController@updateNews')->name('update-berita');
            Route::get('/delete/{id}', 'App\Http\Controllers\BeritaController@deleteNews')->name('delete-berita');
        });
        Route::prefix('/gambar')->group(function () {
            Route::get('/', 'App\Http\Controllers\AdminController@showGambar')->name('show-gambar');
            Route::post('/upload', 'App\Http\Controllers\AdminController@uploadGambar')->name('upload-gambar');
            Route::post('/postGambar', 'App\Http\Controllers\AdminController@postGambar')->name('post-gambar');
            Route::get('/request', 'App\Http\Controllers\AdminController@reqGambar')->name('req-gambar');
            Route::post('/postReqGambar', 'App\Http\Controllers\AdminController@postReqGambar')->name('post-req-gambar');
            Route::get('/delete/{id}', 'App\Http\Controllers\AdminController@deleteArticle')->name('delete-image');
            Route::get('/delete/gambar/{id}', 'App\Http\Controllers\AdminController@deleteImage')->name('delete-gambar');
        });
        Route::prefix('/produk')->group(function () {
            Route::get('/', 'App\Http\Controllers\ProductController@semuaProduk')->name('semua-produk');
            Route::get('/tambah', 'App\Http\Controllers\ProductController@createProductPage')->name('produk-baru');
            Route::post('/post-tambah', 'App\Http\Controllers\ProductController@createNewProduct')->name('post-produk-baru');
            Route::get('detail/{link}', 'App\Http\Controllers\ProductController@detailProduk')->name('detail-produk');
            Route::get('/edit/{id}', 'App\Http\Controllers\ProductController@editProduct')->name('edit-produk');
            Route::post('/update', 'App\Http\Controllers\ProductController@updateProduct')->name('update-produk');
            Route::get('/delete/{id}', 'App\Http\Controllers\ProductController@deleteProduct')->name('delete-produk');
        });
    });
});