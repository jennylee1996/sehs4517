<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            [
                'id' => 1,
                'fname' => 'Louis',
                'lname' => 'Vutton',
                'pw' => 'abcd1234',
                'position' => 'M',
                'phone' => 67810543,
                'email' => 'louisvutton@gmail.com',
                'user_status' => 1
            ],
            [
                'id' => 2,
                'fname' => 'Richard',
                'lname' => 'Gum',
                'pw' => 'abcd1234',
                'position' => 'S',
                'phone' => 67810542,
                'email' => 'richardgum@gmail.com',
                'user_status' => 1
            ]
        ]);
    }
}
