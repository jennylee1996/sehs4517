<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'fname' => 'John',
                'lname' => 'Doe',
                'password' => '$2y$10$969geIPD3SaF4a3uUSy90ezg0kU7/ke.boQKKWtH4g3hcWpcUnley', // abcd1234
                'dob' => '1995-01-01',
                'phone' => 67890543,
                'email' => 'johndoe@gmail.com',
                'user_role' => 0,
                'user_status' => 1
            ],
            [
                'id' => 2,
                'fname' => 'Alice',
                'lname' => 'Wong',
                'password' => '$2y$10$969geIPD3SaF4a3uUSy90ezg0kU7/ke.boQKKWtH4g3hcWpcUnley', // abcd1234
                'dob' => '1996-01-01',
                'phone' => 67890542,
                'email' => 'alicewong@gmail.com',
                'user_role' => 0,
                'user_status' => 1
            ],
            [
                'id' => 3,
                'fname' => 'Peter',
                'lname' => 'Chan',
                'password' => '$2y$10$969geIPD3SaF4a3uUSy90ezg0kU7/ke.boQKKWtH4g3hcWpcUnley', // abcd1234
                'dob' => '1994-01-01',
                'phone' => 67890541,
                'email' => 'peterchan@gmail.com',
                'user_role' => 0,
                'user_status' => 1
            ],
            [
                'id' => 4,
                'fname' => 'Tom',
                'lname' => 'Holand',
                'password' => '$2y$10$969geIPD3SaF4a3uUSy90ezg0kU7/ke.boQKKWtH4g3hcWpcUnley', // abcd1234
                'dob' => '1996-06-01',
                'phone' => 67890540,
                'email' => 'tomholand@gmail.com',
                'user_role' => 0,
                'user_status' => 1
            ],
            [
                'id' => 5,
                'fname' => 'Mary',
                'lname' => 'Lee',
                'password' => '$2y$10$969geIPD3SaF4a3uUSy90ezg0kU7/ke.boQKKWtH4g3hcWpcUnley', // abcd1234
                'dob' => '1990-01-01',
                'phone' => 67890545,
                'email' => 'marylee@gmail.com',
                'user_role' => 0,
                'user_status' => 1
            ],
            [
                'id' => 6,
                'fname' => 'Louis',
                'lname' => 'Vutton',
                'password' => '$2y$10$969geIPD3SaF4a3uUSy90ezg0kU7/ke.boQKKWtH4g3hcWpcUnley', // abcd1234
                'dob' => '1980-01-01',
                'phone' => 67810543,
                'email' => 'louisvutton@gmail.com',
                'user_role' => 1,
                'user_status' => 1
            ],
            [
                'id' => 7,
                'fname' => 'Richard',
                'lname' => 'Gum',
                'password' => '$2y$10$969geIPD3SaF4a3uUSy90ezg0kU7/ke.boQKKWtH4g3hcWpcUnley', // abcd1234
                'dob' => '1980-01-01',
                'phone' => 67810542,
                'email' => 'richardgum@gmail.com',
                'user_role' => 1,
                'user_status' => 1
            ]
        ]);
    }
}
