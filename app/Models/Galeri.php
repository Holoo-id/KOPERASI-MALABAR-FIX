<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    use HasFactory;

    protected $table = 'galeri';

    public function user()
    {
        return $this->belongsTo(User::class, 'added_by');
    }
    public function artikel()
    {
        return $this->belongsTo(Artikel::class,'gambar_sampul');
    }
}
