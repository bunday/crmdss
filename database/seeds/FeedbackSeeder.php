<?php

use Illuminate\Database\Seeder;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 20;

        for ($i = 0; $i < $limit; $i++) {
            $st="Unresolved";
            DB::table('feedback')->insert([ //,
                'title' => $faker->realText($maxNbChars = 60),
                'rating' => $faker->biasedNumberBetween($min = 1, $max = 10, $function = 'sqrt'),
                'fcid' => $faker->biasedNumberBetween($min = 1, $max = 4, $function = 'sqrt'),
                'cid' => $faker->biasedNumberBetween($min = 1, $max = 4, $function = 'sqrt'),
                'uid' => $faker->biasedNumberBetween($min = 2, $max = 33, $function = 'sqrt'),
                'status' => $st,
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            ]);
        }
    }
}
