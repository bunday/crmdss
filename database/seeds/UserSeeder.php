<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 33;

        for ($i = 0; $i < $limit; $i++) {
            $cat;
            if ($i<21) {
                $cat = "CUS";
            } else {
                $cat = "STA";
            }
            
            DB::table('users')->insert([ //,
                'fname' => $faker->name,
                'lname' => $faker->name,
                'email' => $faker->unique()->email,
                'phone' => $faker->phoneNumber,
                'password' => bcrypt('allowme'),
                'category' => $cat,
            ]);
        }
    }
}
