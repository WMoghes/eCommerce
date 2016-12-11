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
    }
}
