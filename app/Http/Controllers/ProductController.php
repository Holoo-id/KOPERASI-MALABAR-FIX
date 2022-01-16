<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Galeri;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Semua Produk di Admin
    public function semuaProduk(){
        $produk = Galeri::where('tampilkan',1)->get();
        return view('admin.semua-produk', compact('produk'));
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
}
