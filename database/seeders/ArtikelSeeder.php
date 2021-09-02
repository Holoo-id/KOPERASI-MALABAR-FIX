<?php

namespace Database\Seeders;


use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artikel')->insert([
            'added_by'=>'1',
            'judul'=>Str::random(10),
            'deskripsi'=>Str::random(10),
            'tanggal'=> Carbon::now(),
            'gambar_sampul'=>null,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
    }
}
