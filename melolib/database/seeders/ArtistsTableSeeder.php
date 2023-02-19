<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtistsTableSeeder extends Seeder
{
    public function run()
    {
        // Insert sample artists data
        $artists = [
            [
                'name' => 'Elvis Presley',
                'cover_id' => 1,
                'date_of_birth' => '1935-01-08',
                'country' => 'United States',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Michael Jackson',
                'cover_id' => 1,
                'date_of_birth' => '1958-08-29',
                'country' => 'United States',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Madonna',
                'cover_id' => 1,
                'date_of_birth' => '1958-08-16',
                'country' => 'United States',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Freddie Mercury',
                'cover_id' => 1,
                'date_of_birth' => '1946-09-05',
                'country' => 'United Kingdom',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Beyoncé',
                'cover_id' => 1,
                'date_of_birth' => '1981-09-04',
                'country' => 'United States',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Adele',
                'cover_id' => 1,
                'date_of_birth' => '1988-05-05',
                'country' => 'United Kingdom',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ed Sheeran',
                'cover_id' => 1,
                'date_of_birth' => '1991-02-17',
                'country' => 'United Kingdom',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bruno Mars',
                'cover_id' => 1,
                'date_of_birth' => '1985-10-08',
                'country' => 'United States',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Taylor Swift',
                'cover_id' => 1,
                'date_of_birth' => '1989-12-13',
                'country' => 'United States',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'John Legend',
                'cover_id' => 1,
                'date_of_birth' => '1978-12-28',
                'country' => 'United States',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Insert data into the artists table
        DB::table('artists')->insert($artists);
    }
}

