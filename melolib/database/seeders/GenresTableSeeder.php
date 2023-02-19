<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = [
            ['genre_name' => 'Rock'],
            ['genre_name' => 'Pop'],
            ['genre_name' => 'Hip Hop'],
            ['genre_name' => 'Electronic'],
            ['genre_name' => 'Classical'],
        ];

        DB::table('genres')->insert($genres);
    }
}
