<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            MenuTableSeeder::class,
            UsersTableSeeder::class,
            ActivityTypesTableSeeder::class,
            ActivitiesTableSeeder::class,
            EnrolledActivitiesTableSeeder::class,
        ]);
    }
}
