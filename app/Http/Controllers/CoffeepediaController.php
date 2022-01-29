<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Galeri;
use Illuminate\Http\Request;

class CoffeepediaController extends Controller
{
    // Semua Coffeepedia di Admin
    public function allCoffeepedias(){
        $coffeepedias = Artikel::where('kategori', 'kopipedia-jenis')
        ->orWhere('kategori', 'kopipedia-budidaya')
        ->orWhere('kategori', 'kopipedia-pengolahan')
        ->get();
        $images = Galeri::all();
        return view('admin.coffeepedia.semua-coffeepedia', compact('coffeepedias', 'images'));
    }
    // Detail Coffeepedia di Admin
    public function coffeepediaDetail($link){
        $coffeepedia = Artikel::where('id', $link)->first();
        $image = Galeri::where('id', $coffeepedia->gambar_sampul)->first();
        return view('admin.coffeepedia.detail-coffeepedia', compact('coffeepedia', 'image'));
    }

    // Create New Coffeepedia Data
    public function createCoffeepediaPage(){
        return view('admin.coffeepedia.coffeepedia-baru');
    }
    public function createCoffeepedia(Request $request){
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
        $coffeepediaBaru = Artikel::create([
            'added_by' => $request->id,
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $tanggal,
            'gambar_sampul' => $uploadGambar->id
        ]);
        
        return redirect(route('semua-coffeepedia'));
    }
    
    // Edit Data Coffeepedia
    public function editCoffeepedia($link){
        $coffeepedia = Artikel::where('id', $link)->first();
        $image = Galeri::where('id', $coffeepedia->gambar_sampul)->first();
        return view('admin.coffeepedia.edit-coffeepedia', compact('coffeepedia', 'image'));
    }
    public function updateCoffeepedia(Request $request){
        $messages = [
            'required'=> 'Judul Wajib Diisi.',
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

        
        $uploadGambar = Galeri::where('id', $request->id)->update([
            
            'judul' => $request->judul_gambar,
            'gambar' => $request->in_img_title ?? $uploadedFile->getClientOriginalName(),
            'added_by' => $request->id,
            'path' => $image_path,
            'tampilkan' => 0
        ]);
        $updateCoffeepedia = Artikel::where('id', $request->id)->update([
            'added_by' => $request->id,
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $tanggal,
            'gambar_sampul' => $request->id,
        ]);
         return redirect(route('semua-coffeepedia'));
    }
    
    // Delete Coffeepedia
    public function deleteCoffeepedia(Request $request)
    {
        $hapusCoffeepedia = Artikel::where('id', $request->id);
        $hapusCoffeepedia->delete();
        $hapusGambarCoffeepedia = Galeri::where('id', $request->gambar_sampul);
        $hapusGambarCoffeepedia->delete();
        return redirect(route('semua-coffeepedia'));
    }
}
