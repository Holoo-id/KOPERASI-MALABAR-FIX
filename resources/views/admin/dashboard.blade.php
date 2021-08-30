@extends('admin.sidebar')
@section('content')
<h1>ADMIN</h1>
    
<form action="{{ route('buatArtikel') }}" method="post" enctype="multipart/form-data">
@csrf
<input type="text" placeholder="Nama" name="nama" value="{{Session::get('name')}}">
<input type="text" placeholder="judul" name="judul">
<textarea placeholder="deskripsi" name="deskripsi" id="" cols="30" rows="10"></textarea>
<input type="text" placeholder="Tanggal" name="tanggal">
<input type="file" placeholder="Masukan Gambar" name="gambar">
<input type="submit" value="Buat Artikel">
</form>
@endsection