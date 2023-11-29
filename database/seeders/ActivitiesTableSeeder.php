<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activities')->insert([
            [
                'id' => 1,
                'type_id' => 1,
                'acty_name' => 'Basketball 100',
                'acty_desc' => 'Basketball basic course for teenagers.',
                'acty_start_date' => '2023-09-01',
                'acty_end_date' => '2023-10-31',
                'capacity' => 10,
                'acty_status' => 1
            ],
            [
                'id' => 2,
                'type_id' => 1,
                'acty_name' => 'Basketball 101',
                'acty_desc' => 'Basketball basic course for teenagers.',
                'acty_start_date' => '2023-11-01',
                'acty_end_date' => '2023-12-31',
                'capacity' => 10,
                'acty_status' => 1
            ],
            [
                'id' => 3,
                'type_id' => 1,
                'acty_name' => 'Basketball 102',
                'acty_desc' => 'Basketball intermediate course for teenagers.',
                'acty_start_date' => '2023-11-01',
                'acty_end_date' => '2023-12-31',
                'capacity' => 10,
                'acty_status' => 1
            ],
            [
                'id' => 4,
                'type_id' => 1,
                'acty_name' => 'Table tennis 101',
                'acty_desc' => 'Table tennis basic course for teenagers.',
                'acty_start_date' => '2024-01-01',
                'acty_end_date' => '2024-02-28',
                'capacity' => 10,
                'acty_status' => 1
            ],
            [
                'id' => 5,
                'type_id' => 1,
                'acty_name' => 'Table tennis 102',
                'acty_desc' => 'Table tennis intermediate course for teenagers.',
                'acty_start_date' => '2024-01-01',
                'acty_end_date' => '2024-02-28',
                'capacity' => 10,
                'acty_status' => 1
            ],
            [
                'id' => 6,
                'type_id' => 2,
                'acty_name' => 'Japanese 101',
                'acty_desc' => 'Japanese basic course for teenagers.',
                'acty_start_date' => '2023-11-01',
                'acty_end_date' => '2023-12-31',
                'capacity' => 10,
                'acty_status' => 1
            ],
            [
                'id' => 7,
                'type_id' => 2,
                'acty_name' => 'Japanese 102',
                'acty_desc' => 'Japanese intermediate course for teenagers.',
                'acty_start_date' => '2023-11-01',
                'acty_end_date' => '2023-12-31',
                'capacity' => 10,
                'acty_status' => 1
            ],
            [
                'id' => 8,
                'type_id' => 2,
                'acty_name' => 'French 101',
                'acty_desc' => 'French basic course for teenagers.',
                'acty_start_date' => '2023-11-01',
                'acty_end_date' => '2023-12-31',
                'capacity' => 10,
                'acty_status' => 1
            ],
            [
                'id' => 9,
                'type_id' => 2,
                'acty_name' => 'French 102',
                'acty_desc' => 'French intermediate course for teenagers.',
                'acty_start_date' => '2023-11-01',
                'acty_end_date' => '2023-12-31',
                'capacity' => 10,
                'acty_status' => 1
            ],
            [
                'id' => 10,
                'type_id' => 3,
                'acty_name' => 'Leadership 101',
                'acty_desc' => 'Leadership basic course for teenagers.',
                'acty_start_date' => '2024-01-01',
                'acty_end_date' => '2024-02-28',
                'capacity' => 20,
                'acty_status' => 1
            ]
        ]);
    }
}
