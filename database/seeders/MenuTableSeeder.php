<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu')->insert([
            [
                'title_en' => 'Home',
                'title_tc' => '主頁',
                'url' => '/',
                'parent_id' => null,
            ],
            [
                'title_en' => 'About Us',
                'title_tc' => '關於我們',
                'url' => '/about-us',
                'parent_id' => null,
            ],
            [
                'title_en' => 'New Services & Courses',
                'title_tc' => '最新活動',
                'url' => '/new-services',
                'parent_id' => null,
            ],
            [
                'title_en' => 'Youth Services',
                'title_tc' => '青年活動',
                'url' => '/youth-services',
                'parent_id' => null,
            ],
            [
                'title_en' => 'Welling for Youths',
                'title_tc' => '樂活青年',
                'url' => '/welling-for-youths',
                'parent_id' => null,
            ],
            [
                'title_en' => 'Welling & Activities for Elders',
                'title_tc' => '樂活長者知識/活動',
                'url' => '/welling-for-elders',
                'parent_id' => null,
            ],
            [
                'title_en' => 'Leisure Zone',
                'title_tc' => '休閒空間',
                'url' => '/leisure-zone',
                'parent_id' => null,
            ],
            [
                'title_en' => 'Gallery',
                'title_tc' => '我們的相簿',
                'url' => '/gallery',
                'parent_id' => null,
            ],
            [
                'title_en' => 'Contact / Support us',
                'title_tc' => '聯絡我們 / 慈善捐款',
                'url' => '/contact',
                'parent_id' => null,
            ],
            [
                'title_en' => 'Sports',
                'title_tc' => '運動',
                'url' => '/youth-services/sports',
                'parent_id' => 4,
            ],
            [
                'title_en' => 'Language',
                'title_tc' => '語言',
                'url' => '/youth-services/language',
                'parent_id' => 4,
            ],
            [
                'title_en' => 'Smoking Cessation',
                'title_tc' => '戒煙',
                'url' => '/welling-for-youths/smoking-cessation',
                'parent_id' => 5,
            ],
            [
                'title_en' => 'Information',
                'title_tc' => '資訊',
                'url' => '/welling-for-elders/information',
                'parent_id' => 6,
            ],
            [
                'title_en' => 'Game',
                'title_tc' => '小遊戲',
                'url' => 'leisure-zone/game',
                'parent_id' => 7,
            ],
            [
                'title_en' => 'Login',
                'title_tc' => '登入',
                'url' => '/login',
                'parent_id' => null,
            ]
        ]);
    }
}
