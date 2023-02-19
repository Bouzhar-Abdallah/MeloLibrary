<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BandsTableSeeder extends Seeder
{
    public function run()
    {
        // Insert sample bands data
        $bands = [
            [
                'name' => 'The Beatles',
                'cover_id' => 1,
                'date_creation' => '1960-08-01',
                'country' => 'United Kingdom',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Led Zeppelin',
                'cover_id' => 1,
                'date_creation' => '1968-09-01',
                'country' => 'United Kingdom',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pink Floyd',
                'cover_id' => 1,
                'date_creation' => '1965-03-01',
                'country' => 'United Kingdom',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Queen',
                'cover_id' => 1,
                'date_creation' => '1970-06-01',
                'country' => 'United Kingdom',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Metallica',
                'cover_id' => 1,
                'date_creation' => '1981-10-01',
                'country' => 'United States',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Insert data into the bands table
        DB::table('bands')->insert($bands);
    }
}
