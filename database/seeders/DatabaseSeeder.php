<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            CreateUsersSeeder::class,
            CreateContactsSeeder::class,
            // StatusSeeder::class,
            // ServiceSeeder::class,
            // LevelOfStudySeeder::class,
            // ReferenceStyleSeeder::class,
            // SubjectSeeder::class,
            // TestimonialSeeder::class,
            // BlogSeeder::class,
            // ReviewSeeder::class,
            // ExpertSeeder::class,
            // SampleSeeder::class,
        ]);
    }
}
