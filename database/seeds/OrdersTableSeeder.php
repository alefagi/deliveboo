<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Order;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {   
        for($i=0;$i<100;$i++){
            $newOrder = new Order();

            $newOrder->name = $faker->firstName();
            $newOrder->email = $faker->email();
            $newOrder->address = $faker->address();
            $newOrder->phone = $faker->e164PhoneNumber();
            $newOrder->total = $faker->randomFloat(2,0,100);
            $newOrder->status = $faker->boolean();
            
            $newOrder->save();
        }

    }
}
