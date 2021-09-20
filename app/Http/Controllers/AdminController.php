<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Galeri;
use Illuminate\Support\Str;
use Validator;

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
    public function detailArticle($link){
        $article = Artikel::where('id', $link)->first();
        return view('admin.detail-artikel', compact('article'));
    }
    public function createArticlesPage(){
        return view('admin.artikel-baru');
    }
    public function editArticlePage($link){
        $article = Artikel::where('id', $link)->first();
        return view('admin.edit-artikel', compact('article'));
    }
    public function buatArtikel(Request $request){
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
    public function postEditArtikel(Request $request){
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
        $uploadedFile->storePubliclyAs('public/images/contents/', $uploadedFile->getClientOriginalName());
        $image_path = "storage/images/contents/".$request->in_img_title;
        $tanggal = date('Y-m-d');

        
        $uploadGambar = Galeri::where('id', $request->id)->update([
            
            'judul' => $request->judul_gambar,
            'gambar' => $request->in_img_title ?? $uploadedFile->getClientOriginalName(),
            'added_by' => $request->id,
            'path' => $image_path,
            'tampilkan' => 0
        ]);
        $buatArtikel = Artikel::where('id', $request->id)->update([
            'added_by' => $request->id,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $tanggal,
            'gambar_sampul' => $request->id,
        ]);
         return redirect('/admin/artikel');
    }
    public function showGambar(){
        $gambar = Galeri::where('tampilkan',1)->get();
        return view('admin.data-gambar', compact('gambar'));
    }
    public function postGambar(Request $request){
        $messages = [
            'judul_gambar.required'=> 'Judul Gambar Wajib Diisi.',
            'min' => 'Harus Diisi minimal :min',
            'gambar.required'=> 'Gambar Wajib Diisi.',
        ];

        $request->validate([
            'judul_gambar'=> 'required|min:7',
            'gambar'=> 'required',
        ],$messages);
        
        $uploadedFile = $request->file('gambar');
        $uploadedFile->storePubliclyAs('public/images/contents/', $uploadedFile->getClientOriginalName());
        $image_path = "storage/images/contents/".$request->in_img_title;
        $tanggal = date('Y-m-d');

        $uploadGambar = Galeri::create([
            
            'judul' => $request->judul_gambar,
            'gambar' => $request->in_img_title ?? $uploadedFile->getClientOriginalName(),
            'added_by' => $request->id,
            'path' => $image_path,
            'tampilkan' => 1
        ]);
        return redirect('/admin/gambar');
    }
    public function reqGambar(){
        $gambar = Galeri::where('tampilkan',0)->get();
        $gambar2 = Galeri::where('tampilkan',0)->first();
        return view('admin.gambar-request',compact('gambar','gambar2'));
    }
     public function postReqGambar(Request $request){

        $uploadGambar = Galeri::where('id', $request->id)->update([
            
            'judul' => $request->judul,
            'gambar' => $request->gambar,
            'added_by' => $request->added_by,
            'path' => $request->path,
            'tampilkan' => $request->status
        ]);
        return redirect('/admin/gambar/request');
    }
   
}
