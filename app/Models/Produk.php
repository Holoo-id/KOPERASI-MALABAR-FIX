<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';
    protected $fillable = [
        'added_by',
        'judul',
        'deskripsi',
        'tanggal',
        'gambar_sampul',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'added_by');
    }
    public function galeri()
    {
        return $this->hasOne(Galeri::class,'id');
    }
}
