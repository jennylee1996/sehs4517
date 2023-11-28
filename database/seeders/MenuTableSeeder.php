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
                'title_en' => 'Home', // 1
                'title_tc' => '主頁',
                'url' => '/',
                'parent_id' => null,
            ],
            [
                'title_en' => 'About us', // 2
                'title_tc' => '關於我們',
                'url' => '/about-us',
                'parent_id' => null,
            ],
            [
                'title_en' => 'Gallery', // 3
                'title_tc' => '相簿',
                'url' => '/gallery',
                'parent_id' => null,
            ],
            [
                'title_en' => 'New Activities', // 4
                'title_tc' => '最新活動',
                'url' => '/new-activities/sports', // redirect to 1st sub-menu
                'parent_id' => null,
            ],
            [
                'title_en' => 'Youth Services', // 5
                'title_tc' => '青年服務',
                'url' => '/youth-services/education', // redirect to 1st sub-menu
                'parent_id' => null,
            ],
            [
                'title_en' => 'Welling for Youths', // 6
                'title_tc' => '樂活青年',
                'url' => '/welling-for-youths/smoking-cessation', // redirect to 1st sub-menu
                'parent_id' => null,
            ],
            [
                'title_en' => 'Mental Health Tips',
                'title_tc' => '心理健康錦囊', // 7
                'url' => '/mental-health-tips/build-self-confidence', // redirect to 1st sub-menu
                'parent_id' => null,
            ],
            [
                'title_en' => 'Leisure Zone', // 8
                'title_tc' => '休閒空間',
                'url' => '/leisure-zone/questionnaire', // redirect to 1st sub-menu
                'parent_id' => null,
            ],
            
            [
                'title_en' => 'Contact us', // 9
                'title_tc' => '聯絡我們',
                'url' => '/contact',
                'parent_id' => null,
            ],
            [
                'title_en' => 'Sports',
                'title_tc' => '運動',
                'url' => '/new-activities/sports',
                'parent_id' => 4,
            ],
            [
                'title_en' => 'Languages',
                'title_tc' => '語言',
                'url' => '/new-activities/languages',
                'parent_id' => 4,
            ],
            [
                'title_en' => 'Leadership Camp',
                'title_tc' => '領袖營',
                'url' => '/new-activities/leadership-camp',
                'parent_id' => 4,
            ],
            [
                'title_en' => 'Enrollment',
                'title_tc' => '報名',
                'url' => '/new-activities/enrollment',
                'parent_id' => 4,
            ],
            [
                'title_en' => 'Education',
                'title_tc' => '教育',
                'url' => '/youth-services/education',
                'parent_id' => 5,
            ],
            [
                'title_en' => 'Counselling',
                'title_tc' => '輔導',
                'url' => '/youth-services/counselling',
                'parent_id' => 5,
            ],
            [
                'title_en' => 'Volunteer',
                'title_tc' => '義工',
                'url' => '/youth-services/volunteer',
                'parent_id' => 5,
            ],
            [
                'title_en' => 'Smoking Cessation',
                'title_tc' => '戒煙',
                'url' => '/welling-for-youths/smoking-cessation',
                'parent_id' => 6,
            ],
            [
                'title_en' => 'Alcohol Consumption Control',
                'title_tc' => '酒精控制',
                'url' => '/welling-for-youths/alcohol-consumption-control',
                'parent_id' => 6,
            ],
            [
                'title_en' => 'Build Self-confidence',
                'title_tc' => '建立自信',
                'url' => '/mental-health-tips/build-self-confidence',
                'parent_id' => 7,
            ],
            [
                'title_en' => 'Engage New Friends',
                'title_tc' => '認識新朋友',
                'url' => '/mental-health-tips/engage-new-friends',
                'parent_id' => 7,
            ],
            [
                'title_en' => 'Manage Stress',
                'title_tc' => '管理壓力',
                'url' => '/mental-health-tips/manage-stress',
                'parent_id' => 7,
            ],
            [
                'title_en' => 'Questionnaire',
                'title_tc' => '問卷調查',
                'url' => '/leisure-zone/questionnaire',
                'parent_id' => 8,
            ],
            [
                'title_en' => 'Game',
                'title_tc' => '小遊戲',
                'url' => 'leisure-zone/game',
                'parent_id' => 8,
            ],
        ]);
    }
}
/*
[
    'title_en' => 'News', 
    'title_tc' => '最新消息',
    'url' => '/news',
    'parent_id' => null,
],
[
    'title_en' => 'Login',
    'title_tc' => '登入',
    'url' => '/login',
    'parent_id' => null,
]
*/