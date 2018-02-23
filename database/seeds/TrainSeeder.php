<?php

use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
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
        
        for ($i=0; $i < $limit; $i++) { 
            $a;
            $lock = "";
            $label;
            for ($j=0; $j < 10; $j++) { 
                $a = $faker->biasedNumberBetween($min = 1, $max = 10, $function = 'sqrt');
                if ($j==9) {
                    $lock .= $a;
                } else {
                    $lock .= $a.',';
                }
                $label = $faker->word();
            }
            DB::table('trainers')->insert([
                'rates' => $lock,
                'label' => $label,
            ]);
        }
        
    }
}
