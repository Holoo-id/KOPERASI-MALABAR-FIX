<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = 'artikel';
    protected $fillable = [
        'nama',
        'judul',
        'deskripsi',
        'tanggal',
        'gambar',
        'gambar_path',
    ];
}
