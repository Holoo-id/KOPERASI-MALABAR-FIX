<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $articles = Artikel::orderBy('created_at', 'desc')
        ->paginate(3);
        return view('default.page.home', compact('articles'));
    }
    public function profil()
    {
        $pageTitle = 'PROFIL';
        $pageSubtitle = 'Kopi Mitra Malabar';
        return view('default.page.profil', compact('pageTitle', 'pageSubtitle'));
    }
    public function articles()
    {
        $articles = Artikel::all();
        $pageSubtitle = 'Informasi Terbaru';
        $pageTitle = 'ARTIKEL';
        return view('default.page.artikel', compact('articles', 'pageSubtitle', 'pageTitle'));
    }
    public function articleDetail($link)
    {
        $article = Artikel::where('id', $link)->first();
        return view('default.page.article-detail', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
