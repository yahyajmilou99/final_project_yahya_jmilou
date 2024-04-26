<?php

namespace Database\Seeders;

use App\Models\Zone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ZoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Zone::insert([
            [
                "name"=>"Table 1",
                
            ],
            [
                "name"=>"Table 2",
                
            ],
            [
                "name"=>"Table 3",
                
            ],
            [
                "name"=>"Table 4",
                
            ]
            ]);
    }
}
