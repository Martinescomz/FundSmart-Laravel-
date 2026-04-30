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
                'name' => Str::random(3),
                'type' => rand(0,1),
                'user_id' => 1
            ]);
        }
    }
}
