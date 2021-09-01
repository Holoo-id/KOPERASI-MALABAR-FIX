<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Koperasi Malabar',
            'email' => 'koperasimalabar12@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('malabar12'),
            'role'=> 'admin',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'name' => 'Digital Milenial Kreatif',
            'email' => 'digital.m.kreatif1@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('kuducuan'),
            'role'=> 'super_admin',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
