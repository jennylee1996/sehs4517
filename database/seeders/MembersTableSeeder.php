<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            [
                'id' => 1,
                'fname' => 'John',
                'lname' => 'Doe',
                'pw' => 'abcd1234',
                'dob' => '1995-01-01',
                'phone' => 67890543,
                'email' => 'johndoe@gmail.com',
                'user_status' => 1
            ],
            [
                'id' => 2,
                'fname' => 'Alice',
                'lname' => 'Wong',
                'pw' => 'abcd1234',
                'dob' => '1996-01-01',
                'phone' => 67890542,
                'email' => 'alicewong@gmail.com',
                'user_status' => 1
            ],
            [
                'id' => 3,
                'fname' => 'Peter',
                'lname' => 'Chan',
                'pw' => 'abcd1234',
                'dob' => '1994-01-01',
                'phone' => 67890541,
                'email' => 'peterchan@gmail.com',
                'user_status' => 1
            ],
            [
                'id' => 4,
                'fname' => 'Tom',
                'lname' => 'Holand',
                'pw' => 'abcd1234',
                'dob' => '1996-06-01',
                'phone' => 67890540,
                'email' => 'tomholand@gmail.com',
                'user_status' => 1
            ],
            [
                'id' => 5,
                'fname' => 'Mary',
                'lname' => 'Lee',
                'pw' => 'abcd1234',
                'dob' => '1990-01-01',
                'phone' => 67890545,
                'email' => 'marylee@gmail.com',
                'user_status' => 1
            ]
        ]);
    }
}
