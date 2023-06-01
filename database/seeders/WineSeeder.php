<?php

namespace Database\Seeders;

use App\Models\Wine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class WineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for($i = 0; $i < 10; $i++){

            $newWine = new Wine();
    
            $newWine->name = $faker->word();
            $newWine->year = $faker->year();
            $newWine->winery = $faker->word(2, true);
            $newWine->color = $faker->colorName();
            $newWine->type = $faker->word();
            $newWine->strenght = $faker->randomFloat(1, 9, 16);
            $newWine->extract = $faker->randomFloat(1, 17, 30);
            $newWine->acidity = $faker->randomFloat(1, 4, 10);
            
            $newWine->save();
        }  
        
    }
}

