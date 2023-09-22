<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SongsTableSeeder extends Seeder
{
    /**
     * Seed the songs table with your favorite songs.
     */
    public function run()
    {
        $songs = [
            ['title' => 'Hallelujah'],
            ['title' => 'I am a person'],
            ['title' => 'Your Myth'],
            ['title' => 'Venus line'],
            ['title' => 'Rif it up'],
        ];

        // Loop through the songs array and insert each song into the database.
        foreach ($songs as $song) {
            DB::table('songs')->insert($song);
        }
    }
}

