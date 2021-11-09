<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Cuisine;

class CuisineUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $cuisines = Cuisine::all();

        foreach($users as $user) {
            $user->cuisines()->attach($cuisines[array_rand($cuisines->toArray(), 1)]);
        }
    }
}
