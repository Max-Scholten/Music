<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            SongsTableSeeder::class,
        ]);
        $this->call([
            BandsTableSeeder::class,
        ]);
        $this->call([
            AlbumTableSeeder::class,
        ]);
    }
}

