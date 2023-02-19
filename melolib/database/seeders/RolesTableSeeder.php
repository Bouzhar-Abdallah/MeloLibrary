<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            'name' => 'Admin',
            'description' => 'admin',
        ]);
        DB::table('roles')->insert([
            'name' => 'SuperAdmin',
            'description' => 'superAdmin',
        ]);
        DB::table('roles')->insert([
            'name' => 'User',
            'description' => 'user',
        ]);
    }
}
