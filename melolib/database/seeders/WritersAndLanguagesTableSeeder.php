<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WritersAndLanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Seed the writers table
        DB::table('writers')->insert([
            ['name' => 'Taylor Swift'],
            ['name' => 'Ed Sheeran'],
            ['name' => 'Billie Eilish'],
            ['name' => 'Beyoncé'],
            ['name' => 'Drake'],
            ['name' => 'Ariana Grande'],
            ['name' => 'Justin Bieber'],
            ['name' => 'Adele'],
            ['name' => 'Bruno Mars'],
            ['name' => 'Harry Styles'],
            ['name' => 'Dua Lipa'],
            ['name' => 'Khalid'],
            ['name' => 'Post Malone'],
            ['name' => 'Rihanna'],
            ['name' => 'Shawn Mendes'],
            ['name' => 'Lady Gaga'],
            ['name' => 'John Legend'],
            ['name' => 'Sia'],
            ['name' => 'Katy Perry'],
            ['name' => 'The Weeknd']
        ]);

        // Seed the languages table
        DB::table('languages')->insert([
            ['language' => 'English'],
            ['language' => 'Spanish'],
            ['language' => 'Portuguese'],
            ['language' => 'French'],
            ['language' => 'Japanese'],
            ['language' => 'arabic'],
            ['language' => 'amazigh'],
            ['language' => 'german'],
            ['language' => 'italiano'],
            ['language' => 'Korean']
        ]);
    }
}
