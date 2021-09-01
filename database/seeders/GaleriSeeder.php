<?php

namespace Database\Seeders;


use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GaleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galeri')->insert([
            'judul' => 'tesgambar.jpg',
            'added_by' => '1',
            'path' => '../public/',
            'tampilkan' => false,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
