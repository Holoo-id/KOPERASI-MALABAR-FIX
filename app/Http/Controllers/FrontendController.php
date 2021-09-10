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
        return view('default.page.home', compact('articles'));
    }
    public function profil(Request $request, $local)
    {
        app()->setLocale($local);
        $pageTitle = 'PROFIL';
        $pageSubtitle = 'Kopi Mitra Malabar';
        return view('default.page.profil', compact('pageTitle', 'pageSubtitle'));
    }
    public function articles(Request $request, $local)
    {
        app()->setLocale($local);
        $articles = Artikel::orderBy('created_at', 'desc')
        ->paginate(9);
        $pageSubtitle = 'Informasi Terbaru';
        $pageTitle = 'ARTIKEL';
        return view('default.page.artikel', compact('articles', 'pageSubtitle', 'pageTitle'));
    }
    public function articleDetail(Request $request, $local, $link)
    {
        app()->setLocale($local);
        $article = Artikel::where('id', $link)->first();
        return view('default.page.article-detail', compact('article'));
    }
    public function contact(Request $request, $local)
    {
        app()->setLocale($local);
        $pageTitle = 'CONTACT';
        $pageSubtitle = 'Hubungi Kami';
        return view('default.page.contact', compact('pageTitle', 'pageSubtitle'));
    }
    public function gallery(Request $request, $local)
    {
        app()->setLocale($local);
        $pageTitle = 'GALERI';
        $pageSubtitle = 'Dokumentasi Kegiatan';
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
