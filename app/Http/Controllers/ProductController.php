<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Galeri;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Semua Produk di Admin
    public function semuaProduk(){
        $products = Produk::all();
        $images = Galeri::all();
        return view('admin.product.semua-produk', compact('products', 'images'));
    }
    // Detail Produk di Admin
    public function detailProduk($link){
        $product = Produk::where('id', $link)->first();
        $image = Galeri::where('id', $link)->first();
        return view('admin.product.detail-produk', compact('product', 'image'));
    }
    // Semua Produk di Public
    public function allProducts(Request $request, $local)
    {
        app()->setLocale($local);
        $products = Produk::orderBy('created_at', 'desc')
        ->paginate(9);
        $images = Galeri::all();
        $pageSubtitle = trans("This is Our Products");
        $pageTitle = trans("Products");
        return view('default.page.products', compact('products', 'images', 'pageSubtitle', 'pageTitle'));
    }
    // Detail Produk di Public
    public function productDetail(Request $request, $local, $link)
    {
        app()->setLocale($local);
        $product = Produk::where('id', $link)->first();
        $image = Galeri::where('id', $product->gambar_sampul)->first();
        return view('default.page.product-detail', compact('product', 'image'));
    }

    // Create New Product Data
    public function createProductPage(){
        return view('admin.product.produk-baru');
    }
    public function createNewProduct(Request $request){
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
        $produkBaru = Produk::create([
            'added_by' => $request->id,
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $tanggal,
            'gambar_sampul' => $uploadGambar->id
        ]);
        
        return redirect(route('semua-produk'));
    }
    
    // Edit Data Produk
    public function editProduct($link){
        $product = Produk::where('id', $link)->first();
        return view('admin.product.edit-produk', compact('product'));
    }
    public function updateProduct(Request $request){
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
        $updateProduk = Produk::where('id', $request->id)->update([
            'added_by' => $request->id,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $tanggal,
            'gambar_sampul' => $request->id,
        ]);
         return redirect(route('semua-produk'));
    }
    
    // Delete Produk
    public function deleteProduct(Request $request)
    {
        $hapusProduk = Produk::where('id',$request->id);
        $hapusProduk->delete();
        $hapusGambarProduk = Galeri::where('id',$request->gambar_sampul);
        $hapusGambarProduk->delete();

        return redirect(route('semua-produk'));
    
    }
}
