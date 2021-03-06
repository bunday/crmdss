<?php

use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 8;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('feedback_categories')->insert([ //,
                'title' => $faker->realText($maxNbChars = 12),
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            ]);
        }
    }
}
