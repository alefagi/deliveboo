<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Generator as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $newUser = new User();
        $newUser->name='Team5';
        $newUser->email='team5@team5.bool';
        $newUser->password=bcrypt('password');
        $newUser->address='boolean';
        $newUser->p_iva='12345678910';
        $newUser->cover='https://cwa.roocdn.com/_next/static/social_media.2a6fac33.png';
        $newUser->save();

        for($i=0;$i<10;$i++){
            $newUser = new User();
            $newUser->name=$faker->userName();
            $newUser->email=$faker->email();
            $newUser->password=bcrypt($faker->word());
            $newUser->address=$faker->address();
            $newUser->p_iva=$faker->numerify('###########');
            $newUser->cover=$faker->imageUrl();
            $newUser->save();
        }
    }
}
