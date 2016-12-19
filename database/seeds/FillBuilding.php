<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FillBuilding extends Seeder
{
    public function run()
    {
        $short_desc = "هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.";
        $long_desc = $short_desc . ' ' . $short_desc . ' ' . $short_desc;
        for($i = 1; $i <= 250; $i++){
            DB::table('buildings')->insert([
                'bu_name' => 'العقار السعيد ' . $i,
                'bu_price' => rand(100000,500000),
                'bu_rent' => rand(0,1),
                'bu_square' => rand(120,1200),
                'bu_type' => rand(0,2),
                'bu_small_desc' => $short_desc,
                'bu_meta' => 'وصف الكلمات لدلالية ' . $i,
                'bu_longitude' => 51.508742,
                'bu_latitude' => -0.120850,
                'bu_status' => 1,
                'bu_region' => rand(1,27),
                'user_id' => rand(1,5),
                'bu_room' => rand(1,6),
                'bu_long_desc' => $long_desc,
                'created_at'    => date('Y-m-d H:i:s')
            ]);
        }
    }
}
