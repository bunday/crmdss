<?php

use Illuminate\Database\Seeder;

class ThreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 40;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('feedback_threads')->insert([ //,
                'content' => $faker->realText($maxNbChars = 200, $indexSize = 2),
                'sid' => $faker->biasedNumberBetween($min = 2, $max = 33, $function = 'sqrt'),
                'fid' => $faker->biasedNumberBetween($min = 3, $max = 20, $function = 'sqrt'),
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            ]);
        }
    }
}
