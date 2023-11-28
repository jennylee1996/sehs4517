<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnrolledActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('enrolled_activities')->insert([
            [
                'user_id' => 1,
                'activity_id' => 2,
                'enroll_date' => '2023-10-10',
                'enroll_status' => 1
            ],
            [
                'user_id' => 2,
                'activity_id' => 2,
                'enroll_date' => '2023-10-15',
                'enroll_status' => 1
            ],
            [
                'user_id' => 3,
                'activity_id' => 3,
                'enroll_date' => '2023-10-15',
                'enroll_status' => 1
            ],
            [
                'user_id' => 4,
                'activity_id' => 3,
                'enroll_date' => '2023-10-20',
                'enroll_status' => 1
            ],
            [
                'user_id' => 1,
                'activity_id' => 6,
                'enroll_date' => '2023-10-20',
                'enroll_status' => 1
            ],
            [
                'user_id' => 2,
                'activity_id' => 6,
                'enroll_date' => '2023-10-20',
                'enroll_status' => 1
            ],
            [
                'user_id' => 3,
                'activity_id' => 7,
                'enroll_date' => '2023-10-15',
                'enroll_status' => 1
            ],
            [
                'user_id' => 4,
                'activity_id' => 7,
                'enroll_date' => '2023-10-15',
                'enroll_status' => 1
            ],
            [
                'user_id' => 1,
                'activity_id' => 10,
                'enroll_date' => '2023-10-25',
                'enroll_status' => 1
            ],
            [
                'user_id' => 2,
                'activity_id' => 10,
                'enroll_date' => '2023-10-25',
                'enroll_status' => 1
            ],
            [
                'user_id' => 3,
                'activity_id' => 10,
                'enroll_date' => '2023-10-31',
                'enroll_status' => 1
            ]
        ]);
    }
}
