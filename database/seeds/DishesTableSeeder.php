<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Dish;

use Faker\Generator as Faker;

class DishesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $usersIds= User::select('id')->pluck('id')->toArray();

        for($i=0;$i<100;$i++){
            $newDish = new Dish();

            $newDish->user_id = $usersIds[array_rand($usersIds,1)];

            $newDish->name = $faker->userName();
            $newDish->description =  $faker->paragraph();
            $newDish->price =  $faker->randomFloat(2, 0, 100);
            $newDish->cover=  $faker->imageUrl();

            $newDish->save();

        }

    }
}
