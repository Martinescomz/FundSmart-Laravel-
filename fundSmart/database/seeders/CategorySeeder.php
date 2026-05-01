<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Str; 

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($x = 0; $x < 5; $x++){
            DB::table('category')->insert([
                'created_at' => date('d/m/y'),
                'updated_at' => date('d/m/y'),
                'name' => Str::random(3),
                'type' => rand(0,1),
                'user_id' => rand(1, 10)
            ]);
        }
    }
}
