<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlbumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $albums = [
            //Albums from Big Time Rush
            ['name' => 'B.T.R.', 'year' => '2010', 'times_sold' => '10 million', 'created_at' => now()],
            ['name' => 'Holiday Bundle', 'year' => '2010', 'times_sold' => '10 million', 'created_at' => now()],
            ['name' => 'Elevate', 'year' => '2011', 'times_sold' => '10 million', 'created_at' => now()],
            ['name' => '24/Seven', 'year' => '2013', 'times_sold' => '10 million', 'created_at' => now()],

            //Albums from Pentatonix
            ['name' => 'PTX, Vols. 1 & 2', 'year' => '2014', 'times_sold' => 'unknown', 'created_at' => now()],
            ['name' => 'PTX', 'year' => '2014', 'times_sold' => 'unknown', 'created_at' => now()],
            ['name' => "That's Christmas to Me", 'year' => '2014', 'times_sold' => 'unknown', 'created_at' => now()],
            ['name' => 'Pentatonix', 'year' => '2015', 'times_sold' => 'unknown', 'created_at' => now()],
            ['name' => 'A Pentatonix Christmas', 'year' => '2016', 'times_sold' => 'unknown', 'created_at' => now()],
            ['name' => 'PTX Presents: Top Pop, Vol. I', 'year' => '2018', 'times_sold' => 'unknown', 'created_at' => now()],
            ['name' => 'Christmas Is Here!', 'year' => '2018', 'times_sold' => 'unknown', 'created_at' => now()],
            ['name' => 'We Need a Little Christmas', 'year' => '2020', 'times_sold' => 'unknown', 'created_at' => now()],
            ['name' => 'The Lucky Ones', 'year' => '2021', 'times_sold' => 'unknown', 'created_at' => now()],
            ['name' => "Evergreen", 'year' => '2021', 'times_sold' => 'unknown', 'created_at' => now()],
            ['name' => 'Holidays Around the World', 'year' => '2022', 'times_sold' => 'unknown', 'created_at' => now()],

            //Albums from AJR
            ['name' => 'Living Room', 'year' => '2015', 'times_sold' => 'unknown', 'created_at' => now()],
            ['name' => 'The Click', 'year' => '2017', 'times_sold' => 'unknown', 'created_at' => now()],
            ['name' => 'Neotheater', 'year' => '2019', 'times_sold' => 'unknown', 'created_at' => now()],
            ['name' => 'OK Orchestra', 'year' => '2021', 'times_sold' => 'unknown', 'created_at' => now()],
            ['name' => 'The Maybe Man', 'year' => '2023', 'times_sold' => 'unknown', 'created_at' => now()],

        ];

        foreach ($albums as $album) {
            DB::table('albums')->insert($album);
        }
    }
}
