<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Galeri;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    // Semua Berita di Admin
    public function allNews(){
        $feeds = Artikel::where('kategori', 'berita')->get();
        $images = Galeri::all();
        return view('admin.news.semua-berita', compact('feeds', 'images'));
    }
    // Detail Berita di Admin
    public function newsDetail($link){
        $feed = Artikel::where('id', $link)->first();
        $image = Galeri::where('id', $feed->gambar_sampul)->first();
        return view('admin.news.detail-berita', compact('feed', 'image'));
    }

    // Create New News Data
    public function createNewsPage(){
        return view('admin.news.berita-baru');
    }
    public function createNews(Request $request){
        $messages = [
            'judul.required'=> 'Judul Wajib Diisi.',
            'deskripsi.required'=> 'Deskripsi Wajib Diisi.',
            'tanggal.required' => 'Tanggal Wajib Diisi.',
            'gambar.required' => 'Gambar Wajib Diisi.',
            'judul_gambar.required' => 'Judul Gambar Wajib Diisi.',
            'min' => 'Harus Diisi minimal :min'
        ];
        $request->validate([
            'judul'=> 'required|min:7',
            'deskripsi'=> 'required',
            'tanggal' => 'required',
            'gambar' => 'required',
            'judul_gambar' => 'required'
        ],$messages);
        
        $uploadedFile = $request->file('gambar');
        $uploadedFile->move("fe/img/contents/", $uploadedFile->getClientOriginalName());
        $image_path = "fe/img/contents/".$request->in_img_title;
        $tanggal = date('Y-m-d');

        
         $uploadGambar = Galeri::create([
            
            'judul' => $request->judul_gambar,
            'gambar' =>  $request->in_img_title ?? $uploadedFile->getClientOriginalName(),
            'added_by' => $request->id,
            'path' => $image_path,
            'tampilkan' => 0
        ]);
        $beritaBaru = Artikel::create([
            'added_by' => $request->id,
            'judul' => $request->judul,
            'kategori' => 'berita',
            'deskripsi' => $request->deskripsi,
            'tanggal' => $tanggal,
            'gambar_sampul' => $uploadGambar->id
        ]);
        
        return redirect(route('semua-berita'));
    }
    
    // Edit Data Berita
    public function editNews($link){
        $feed = Artikel::where('id', $link)->first();
        $image = Galeri::where('id', $feed->gambar_sampul)->first();
        return view('admin.news.edit-berita', compact('feed', 'image'));
    }
    public function updateNews(Request $request){
        $messages = [
            'required'=> 'Judul Wajib Diisi.',
            'deskripsi.required'=> 'Deskripsi Wajib Diisi.',
            'tanggal.required' => 'Tanggal Wajib Diisi.',
            'judul_gambar.required' => 'Judul Gambar Wajib Diisi.',
            'min' => 'Harus Diisi minimal :min'
        ];

        $request->validate([
            'judul'=> 'required|min:7',
            'deskripsi'=> 'required',
            'tanggal' => 'required',
            'judul_gambar' => 'required'
        ], $messages);

        $tanggal = date('Y-m-d');
        
        if ($request->has('gambar')) {
            $uploadedFile = $request->file('gambar');
            $uploadedFile->move("fe/img/contents/", $uploadedFile->getClientOriginalName());
            $image_path = "fe/img/contents/".$request->in_img_title;
            $uploadGambar = Galeri::where('id', $request->imgId)->update([
                'judul' => $request->judul_gambar,
                'gambar' => $request->in_img_title ?? $uploadedFile->getClientOriginalName(),
                'added_by' => $request->uId,
                'path' => $image_path,
                'tampilkan' => 0
            ]);
        }
        $updateBerita = Artikel::where('id', $request->cId)->update([
            'added_by' => $request->uId,
            'judul' => $request->judul,
            'kategori' => 'berita',
            'deskripsi' => $request->deskripsi,
            'tanggal' => $tanggal,
            'gambar_sampul' => $request->imgId,
        ]);
         return redirect(route('semua-berita'));
    }
    
    // Delete Berita
    public function deleteNews(Request $request)
    {
        $hapusBerita = Artikel::where('id', $request->id);
        $hapusBerita->delete();
        $hapusGambarBerita = Galeri::where('id', $request->gambar_sampul);
        $hapusGambarBerita->delete();
        return redirect(route('semua-berita'));
    }
}
