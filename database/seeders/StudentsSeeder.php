<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i <5; $i++){
            Students::create([
                'name' => $faker->name,
                'father' => $faker->name,
                'name' => $faker->name,

            ]);
        }
    }
}
