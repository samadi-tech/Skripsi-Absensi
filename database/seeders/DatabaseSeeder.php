<?php

namespace Database\Seeders;

use App\Models\Absensi;
use App\Models\Mahasiswa;
use App\Models\Posting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Absensi::factory(100)->create();
        Posting::factory(30)->create();
        Mahasiswa::factory(20)->create();
    }
}
