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
            MembersTableSeeder::class,
            ActivityTypesTableSeeder::class,
            ActivitiesTableSeeder::class,
            EnrolledActivitiesTableSeeder::class,
            AdminsTableSeeder::class,
        ]);
    }
}
