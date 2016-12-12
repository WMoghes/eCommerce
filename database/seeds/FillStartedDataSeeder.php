<?php

use Illuminate\Database\Seeder;

class FillStartedDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert site settings into the table
        DB::table('site_settings')->insert([
            [
                'slug'          => 'أسم الموقع',
                'namesetting'   => 'site_name',
                'value'         => 'مجرد أسم',
                'type'          => '0'
            ],
            [
                'slug'          => 'الموبيل',
                'namesetting'   => 'mobile',
                'value'         => '01114733726',
                'type'          => '0'
            ],
            [
                'slug'          => 'العنوان',
                'namesetting'   => 'address',
                'value'         => 'wmoghes@gmail.com',
                'type'          => '1'
            ],
            [
                'slug'          => 'الكلمات الدلالية',
                'namesetting'   => 'key_words',
                'value'         => 'Waleed',
                'type'          => '0'
            ],
            [
                'slug'          => 'وصف الموقع',
                'namesetting'   => 'description',
                'value'         => 'wmoghes@gmail.com',
                'type'          => '1'
            ],
            [
                'slug'          => 'الفيس بوك',
                'namesetting'   => 'facebook',
                'value'         => 'wmoghes',
                'type'          => '0'
            ],
            [
                'slug'          => 'تويتر',
                'namesetting'   => 'twitter',
                'value'         => 'wmoghes',
                'type'          => '0'
            ],
            [
                'slug'          => 'يوتيوب',
                'namesetting'   => 'youtube',
                'value'         => 'wmoghes',
                'type'          => '0'
            ],
            [
                'slug'          => 'جوجل بلس',
                'namesetting'   => 'google_plus',
                'value'         => 'none',
                'type'          => '0'
            ],
            [
                'slug'          => 'لينكد ان',
                'namesetting'   => 'linked_in',
                'value'         => 'wmoghes',
                'type'          => '0'
            ]
        ]);

        // Add default admin into database
        DB::table('users')->insert([
            [
                'name'          => 'وليد مصطفي',
                'email'         => 'wmoghes@gmail.com',
                'password'      => bcrypt('321321'),
                'admin'         => 1,
                'created_at'    => date('Y-m-d H:i:s')
            ],[
                'name'          => 'مي عبد المنعم كريم',
                'email'         => 'admin.1@gmail.com',
                'password'      => bcrypt('321321'),
                'admin'         => 1,
                'created_at'    => date('Y-m-d H:i:s')
            ],[
                'name'          => 'نبيل كرم محمد',
                'email'         => 'nabil@gmail.com',
                'password'      => bcrypt('321321'),
                'admin'         => 0,
                'created_at'    => date('Y-m-d H:i:s')
            ],[
                'name'          => 'منار حسين على',
                'email'         => 'manar@gmail.com',
                'password'      => bcrypt('321321'),
                'admin'         => 1,
                'created_at'    => date('Y-m-d H:i:s')
            ],[
                'name'          => 'شيماء الريس أحمد',
                'email'         => 'shaima@gmail.com',
                'password'      => bcrypt('321321'),
                'admin'         => 0,
                'created_at'    => date('Y-m-d H:i:s')
            ],[
                'name'          => 'أحمد محي السيد أحمد',
                'email'         => 'mohey@gmail.com',
                'password'      => bcrypt('321321'),
                'admin'         => 0,
                'created_at'    => date('Y-m-d H:i:s')
            ],[
                'name'          => 'مايكل نبيل حنا',
                'email'         => 'mikel@gmail.com',
                'password'      => bcrypt('321321'),
                'admin'         => 0,
                'created_at'    => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
