<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class SongsTableSeeder extends Seeder
{

    public function run()
    {
        $songs = [
            ['title' => 'Hallelujah', 'singer' => 'Pentatonix', 'created_at' => now()],
            ['title' => 'I am a person', 'singer' => 'Suara', 'created_at' => now()],
            ['title' => 'Your Myth', 'singer' => 'Akino', 'created_at' => now()],
            ['title' => 'Venus line', 'singer' => 'Kohmi', 'created_at' => now()],
            ['title' => 'Riff it up', 'singer' => 'AC/DC', 'created_at' => now()],
        ];

        foreach ($songs as $song) {
            DB::table('songs')->insert($song);
        }
    }
}
