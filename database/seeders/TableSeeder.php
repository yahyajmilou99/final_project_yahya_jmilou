<?php

namespace Database\Seeders;

use App\Models\Table;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Table::insert([
            [
                "name"=>"Table 1",
                "id"=>1
            ],
            [
                "name"=>"Table 2",
                "id"=>2
            ],
            [
                "name"=>"Table 3",
                "id"=>3
            ],
            [
                "name"=>"Table 4",
                "id"=>4
            ]
        ]);
    }
}
