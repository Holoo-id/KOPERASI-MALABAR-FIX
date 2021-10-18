<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Artikel;
use App\Models\Galeri;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(Request $request, $local)
    {
        app()->setLocale($local);
        // $articles = Artikel::where('kategori', 'berita')
        $articles = Artikel::orderBy('created_at', 'desc')
        ->paginate(3);
        $images = Galeri::all();
        return view('default.page.home', compact('articles', 'images'));
    }
    public function profil(Request $request, $local)
    {
        app()->setLocale($local);
        $pageTitle = trans("Profile");
        $pageSubtitle = 'Kopi Mitra Malabar';
        return view('default.page.profil', compact('pageTitle', 'pageSubtitle'));
    }
    public function articles(Request $request, $local)
    {
        app()->setLocale($local);
        // $articles = Artikel::where('kategori', 'artikel')
        $articles = Artikel::orderBy('created_at', 'desc')
        ->paginate(9);
        $images = Galeri::all();
        $pageSubtitle = trans("Latest Information");
        $pageTitle = trans("Article");
        return view('default.page.artikel', compact('articles', 'images', 'pageSubtitle', 'pageTitle'));
    }
    public function news(Request $request, $local)
    {
        app()->setLocale($local);
        $articles = Artikel::where('kategori', 'berita')
        ->orderBy('created_at', 'desc')
        ->paginate(9);
        $images = Galeri::all();
        $pageSubtitle = trans("Latest Information");
        $pageTitle = trans("News");
        return view('default.page.artikel', compact('articles', 'images', 'pageSubtitle', 'pageTitle'));
    }
    public function articleDetail(Request $request, $local, $link)
    {
        app()->setLocale($local);
        $article = Artikel::where('id', $link)->first();
        $image = Galeri::where('id', $article->gambar_sampul)->first();
        return view('default.page.article-detail', compact('article', 'image'));
    }
    public function contact(Request $request, $local)
    {
        app()->setLocale($local);
        $pageTitle = trans("Contact");
        $pageSubtitle = trans("Contact Us");
        return view('default.page.contact', compact('pageTitle', 'pageSubtitle'));
    }
    public function gallery(Request $request, $local)
    {
        app()->setLocale($local);
        $pageTitle = trans("GALLERY");
        $pageSubtitle = trans("Activity Documentation");
        $images = Galeri::where('tampilkan', 1)->paginate(9);
        return view('default.page.gallery', compact('images', 'pageTitle', 'pageSubtitle'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}