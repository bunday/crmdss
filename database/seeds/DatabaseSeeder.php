<?php

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
             CategorySeeder::class,
             FeedbackSeeder::class,
             ThreadSeeder::class,
             TrainSeeder::class,
             UserSeeder::class,
             SectionSeeder::class,
             ]);
    }
}
