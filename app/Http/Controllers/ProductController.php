<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Semua Produk di Admin
    public function semuaProduk(){
        $produk = Galeri::where('tampilkan',1)->get();
        return view('admin.semua-produk', compact('produk'));
    }
}
