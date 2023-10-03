<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bands = [
            ['name' => 'Big Time Rush', 'genre' => 'Pop', 'founded' => '2009', 'active_till' => '2014','created_at' => now()],

        ];

        foreach ($bands as $band) {
            DB::table('bands')->insert($band);
        }
    }
}
