<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Validator;

class AdminController extends Controller
{
    public function index(){
        return redirect(route('allArticle'));
    }
    public function dashboard(){
        return redirect(route('allArticle'));
    }
    public function uploadGambar(Request $request){
       $file = $request->upload;
       $namaFile = $file->getClientOriginalName();
       $namaBaru = time().$namaFile;
       $uploaded = "fe/img/upload/";
       $file->move($uploaded,$namaBaru);
       $url = asset('fe/img/upload/'.$namaBaru);
       $CkeditorFuncNum = $request->input('CKEditorFuncNum');
       $status = "<script>window.parent.CKEDITOR.tools.callFunction('$CkeditorFuncNum','$url','Gambar Telah Berhasil Di Upload')</script>";
        echo $status;
    }
    public function allArticles(){
        $articles = Artikel::all();
        $images = Galeri::all();
        return view('admin.data-artikel', compact('articles', 'images'));
    }
    public function detailArticle($link){
        $article = Artikel::where('id', $link)->first();
        $image = Galeri::where('id', $link)->first();
        return view('admin.detail-artikel', compact('article', 'image'));
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
            'judul.required'=> 'Judul Wajib Diisi.',
            'kategori.required'=> 'Kategori Wajib Diisi.',
            'deskripsi.required'=> 'Deskripsi Wajib Diisi.',
            'tanggal.required' => 'Tanggal Wajib Diisi.',
            'gambar.required' => 'Gambar Wajib Diisi.',
            'judul_gambar.required' => 'Judul Gambar Wajib Diisi.',
            'min' => 'Harus Diisi minimal :min'
        ];
        $request->validate([
            'judul'=> 'required|min:7',
            'kategori'=> 'required',
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
        $buatArtikel = Artikel::create([
            'added_by' => $request->id,
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $tanggal,
            'gambar_sampul' => $uploadGambar->id
        ]);
        
        return redirect(route('allArticle'));
    }
    public function postEditArtikel(Request $request){
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
        $buatArtikel = Artikel::where('id', $request->id)->update([
            'added_by' => $request->id,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $tanggal,
            'gambar_sampul' => $request->id,
        ]);
         return redirect(route('allArticle'));
    }
    public function showGambar(){
        $gambar = Galeri::where('tampilkan',1)->get();
        return view('admin.data-gambar', compact('gambar'));
    }
    public function postGambar(Request $request){
       $messages = [
            'judul.required'=> 'Judul Gambar Wajib Diisi.',
            'min' => 'Harus Diisi minimal :min',
            'gambar.required'=> 'Gambar Wajib Diisi.',
        ];

        $request->validate([
            'judul'=> 'required|min:7',
            'gambar'=> 'required',
        ],$messages);
        
        $uploadedFile = $request->file('gambar');
        $uploadedFile->storePubliclyAs('images/contents/', $uploadedFile->getClientOriginalName());
        $image_path = "storage/images/contents/".$request->in_img_title;
        $tanggal = date('Y-m-d');

        $uploadGambar = Galeri::create([
            
            'judul' => $request->judul,
            'gambar' => $request->in_img_title ?? $uploadedFile->getClientOriginalName(),
            'added_by' => $request->added_by,
            'path' => $image_path,
            'tampilkan' => $request->status,
        ]);
        return redirect('/admin/gambar/request');
    }
    public function reqGambar(){
        $gambar = Galeri::orderBy('created_at', 'desc')->get();
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
    
    public function deleteArticle(Request $request)
    {
        $hapusArtikel = Artikel::where('id',$request->id);
        $hapusArtikel->delete();
        $hapusGambarArtikel = Galeri::where('id',$request->gambar_sampul);
        $hapusGambarArtikel->delete();

        return redirect(route('allArticle'));
    
    }
    public function deleteImage($id)
    {
        $hapusGambar = Galeri::find($id);
        $hapusGambar->delete();

        return redirect(route('req-gambar'));
    
    }
   
}