<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Galeri;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function index(){
        return view('admin.data-artikel');
    }
    public function dashboard(){
        return view('admin.dashboard');
    }
    public function uploadGambar(Request $request){
       $file = $request->upload;
       $namaFile = $file->getClientOriginalName();
       $namaBaru = time().$namaFile;
       $uploaded = "storage/images/upload/";
       $file->move($uploaded,$namaBaru);
       $url = asset('storage/images/upload/'.$namaBaru);
       $CkeditorFuncNum = $request->input('CKEditorFuncNum');
       $status = "<script>window.parent.CKEDITOR.tools.callFunction('$CkeditorFuncNum','$url','Gambar Telah Berhasil Di Upload')</script>";
        echo $status;
    }
    public function allArticles(){
        $articles = Artikel::all();
        return view('admin.data-artikel', compact('articles'));
    }
    public function buatArtikel(Request $request){
        $uploadedFile = $request->file('gambar');
        $uploadedFile->storePubliclyAs('public/images/contents/', $uploadedFile->getClientOriginalName());
        $image_path = "storage/images/contents/".$request->in_img_title;
        $tanggal = date('Y-m-d');


        $uploadGambar = Galeri::create([
            
            'judul' => $request->judul_gambar,
            'gambar' => $request->in_img_title ?? $uploadedFile->getClientOriginalName(),
            'added_by' => $request->id,
            'path' => $image_path,
            'tampilkan' => 0
        ]);
        

        $buatArtikel = Artikel::create([
            'added_by' => $request->id,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $tanggal,
            'gambar_sampul' => $uploadGambar->id,
        ]);

        

        return view('admin.dashboard');
    }
    
   
}
