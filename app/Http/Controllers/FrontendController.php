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
        $articles = Artikel::where('kategori', 'artikel')
        ->orderBy('created_at', 'desc')
        ->paginate(9);
        $images = Galeri::all();
        $pageSubtitle = trans("Latest Information");
        $pageTitle = trans("Article");
        return view('default.page.artikel', compact('articles', 'images', 'pageSubtitle', 'pageTitle'));
    }
    public function coffeeStories(Request $request, $local)
    {
        app()->setLocale($local);
        $articles = Artikel::where('kategori', 'story')
        ->orderBy('created_at', 'desc')
        ->paginate(9);
        $images = Galeri::all();
        $pageSubtitle = trans("");
        $pageTitle = trans("Coffee Story");
        return view('default.page.artikel', compact('articles', 'images', 'pageSubtitle', 'pageTitle'));
    }
    public function coffeepedia(Request $request, $local)
    {
        app()->setLocale($local);
        $types = Artikel::where('kategori', 'kopipedia-jenis')
        ->orderBy('created_at', 'desc')
        ->paginate(3);
        $cultivations = Artikel::where('kategori', 'kopipedia-budidaya')
        ->orderBy('created_at', 'desc')
        ->paginate(3);
        $processing = Artikel::where('kategori', 'kopipedia-pengolahan')
        ->orderBy('created_at', 'desc')
        ->paginate(3);
        $images = Galeri::all();
        $pageSubtitle = trans("");
        $pageTitle = trans("COFFEEPEDIA");
        return view('default.page.coffeepedias', compact('cultivations', 'processing', 'types', 'images', 'pageSubtitle', 'pageTitle'));
    }
    public function newsAndEvent(Request $request, $local)
    {
        app()->setLocale($local);
        $news = Artikel::where('kategori', 'berita')
        ->orderBy('created_at', 'desc')
        ->paginate(6);
        $events = Artikel::where('kategori', 'event')
        ->orderBy('created_at', 'desc')
        ->paginate(3);
        $images = Galeri::all();
        $pageSubtitle = trans("");
        $pageTitle = trans("News and Events");
        return view('default.page.news-event', compact('events', 'news', 'images', 'pageSubtitle', 'pageTitle'));
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