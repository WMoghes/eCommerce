<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FillBuilding extends Seeder
{
    public function run()
    {
        for($i = 0; $i <1000; $i++){
            DB::table('buildings')->insert([
                'bu_name' => 'العقار السعيد ' . $i,
                'bu_price' => rand(100000,500000),
                'bu_rent' => rand(0,1),
                'bu_square' => rand(120,1200),
                'bu_type' => rand(0,2),
                'bu_small_desc' => 'وصف العقار السعيد ' . $i,
                'bu_meta' => 'وصف الكلمات لدلالية ' . $i,
                'bu_longitude' => rand(100000,900000),
                'bu_latitude' => rand(100000,900000),
                'bu_status' => 1,
                'user_id' => rand(1,5),
                'bu_room' => rand(1,6),
                'bu_long_desc' => 'وصف طويل للعقار ' . $i
            ]);
        }
    }
}
