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

        $users[0]->cuisines()->attach(7);
        $users[1]->cuisines()->attach(6);
        $users[2]->cuisines()->attach([6,7]);
        $users[3]->cuisines()->attach([6,7]);
        $users[4]->cuisines()->attach([7,8]);
        $users[5]->cuisines()->attach([1,4,8]);
        $users[6]->cuisines()->attach([1,4]);
        $users[7]->cuisines()->attach([4]);
        $users[8]->cuisines()->attach([2,3]);
        $users[9]->cuisines()->attach([3]);
        $users[10]->cuisines()->attach([3,9]);
        $users[11]->cuisines()->attach([3,9]);
        $users[12]->cuisines()->attach([8,9]);
        $users[13]->cuisines()->attach([2,3,9]);
        $users[14]->cuisines()->attach([5,8]);
        $users[15]->cuisines()->attach([5,8]);
        $users[16]->cuisines()->attach([5,8,1]);
        $users[17]->cuisines()->attach([5,8]);
        $users[18]->cuisines()->attach([7]);
        $users[19]->cuisines()->attach([7,8]);
        $users[20]->cuisines()->attach([4,5]);
    }
}
