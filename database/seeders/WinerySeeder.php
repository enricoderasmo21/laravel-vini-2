<?php

namespace Database\Seeders;

use App\Models\Winery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class WinerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++){

            
            $newWinery = new Winery();
            $newWinery->name = $faker->word();
            $newWinery->address = $faker->address();
            $newWinery->area = $faker->city();
            $newWinery->district = $faker->word();
            $newWinery->region = $faker->word();
            $newWinery->nation = $faker->word();
            $newWinery->phone = $faker->phoneNumber();
            $newWinery->email = $faker->email();
            
            $newWinery->save();
        }  
    }
}

