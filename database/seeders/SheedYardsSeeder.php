<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SheedYardsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sheed_yards')->insert([
            ['name' => 'CCT', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'NCT', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'S-05', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'S-06', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'S-07', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'S-08', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'S-09', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'S-12', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'S-13', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'S-CFS', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'S-N', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'S-NCT', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Y-01', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Y-02', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Y-05', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Y-8B', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Y-CCT', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Y-JR', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Y-NCT', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Y-NCY', 'created_at' => now(), 'updated_at' => now()],           
        ]);
    }
}
