<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin;
use App\Models\Skripsi;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'user1',
            'email' => 'user@gmail.com',
            'password' => bcrypt('123456789'),
            'point' => 10000,
        ]);
        Admin::create([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456789'),
        ]);
       
        Skripsi::create([
            'Judul' => 'penelitian',
            'nama' => 'sandy',
            'nim' => '6304221493',
            'angkatan' => '2004',
            'Dosenpembimbing1' => 'Fajri profesio putra',
            'Dosenpembimbing2' => 'Lidya Wati',
        ]);
    }
}