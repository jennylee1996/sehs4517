<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivityTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activity_types')->insert([
            [
                'id' => 1,
                'type_name' => 'Sport'
            ],
            [
                'id' => 2,
                'type_name' => 'Language'
            ],
            [
                'id' => 3,
                'type_name' => 'Leadership'
            ]
        ]);
    }
}
