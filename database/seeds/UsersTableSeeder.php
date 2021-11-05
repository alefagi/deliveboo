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

        $users = [
            [
                'name' => 'I scream',
                'cover' => 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC85MzVkNTE4MC1jNTNiLTRkNDAtYjNhMS1kNDg4YzhkNjkzNmIuanBlZw==',
            ], 
            [
                'name' => 'Croissant place',
                'cover' => 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC84M2I2OTU0Yi1jNDQ1LTRhZDItOWQzNC1mMGY0MjU5ZGZkNGEuanBlZw==',
            ], 
            [
                'name' => 'Breakfast heaven',
                'cover' => 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC9iZTgyYzg3Ny05MWE5LTRmYWItODg1YS1jZDM1MGM1ZjM5YzkuanBlZw==',
            ], 
            [
                'name' => 'Awesome chalet',
                'cover' => 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC8wNTJlZDI1My03OTdlLTQ3NjktYjRmMS0zODg4NjYxMjBhMmIuanBlZw==',
            ], 
            [
                'name' => 'Marios pizza',
                'cover' => 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC80NDM5NzFhOC03MmE1LTQyYTgtYjM0Ni1kZDI2MTczN2UxMWYuanBlZw==',
            ], 
            [
                'name' => 'Bella Napoli',
                'cover' => 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC8zYmE0YmUxNS1hYzdkLTQ0ZTMtODQ3MC05Njc2YWMzNDU5MjkuanBlZw==',
            ], 
            [
                'name' => 'Pasta heaven',
                'cover' => 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC9kZmJjYWVmNC02YzNhLTQ5MTgtOGYzYS1lY2Y4YzgwNzYxOTUuanBlZw==',
            ], 
            [
                'name' => 'Sakura sushi',
                'cover' => 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC83M2U3MmYwNS05ZGVkLTQ5ODctOGRkNy02NDk4NThlY2IwYTQuanBlZw==',
            ], 
            [
                'name' => 'Asian fushion restourant',
                'cover' => 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC9jNTgwZGQ2Ny03YWE0LTRiZDEtODk0Yi1lYzIyZjc4Y2QwMDEuanBlZw==',
            ], 
            [
                'name' => 'Japan sushi bar',
                'cover' => 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC8zN2UxZDM2OC04MmY3LTQ4NzctYmZhZS03ZTM2Yzk5NWQ5OGMuanBlZw==',
            ], 
            [
                'name' => 'Hello poke',
                'cover' => 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC81ZDY1MWZkNC0xOTliLTRjOTEtYjdlYi01YTNjMTY4NGU1NGIuanBlZw==',
            ], 
            [
                'name' => 'Happy bowl',
                'cover' => 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC8xYWQwM2JjZi0xOWEyLTRmNjEtYTQyZC03YTkwNGE1MGRiZjcuanBlZw==',
            ], 
            [
                'name' => 'Poke all you can eat',
                'cover' => 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC82YjUwMjY2Yy1iOWZmLTQ1YTctOTkxMC0xNTg4ZDE5NDQ1MDQuanBlZw==',
            ], 
            [
                'name' => 'Fast food place',
                'cover' => 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC81Njg1MWRhNy1iNWJhLTQxYzMtYWU1ZC1jYjk5MTA4N2Y1NTYuanBlZw==',
            ], 
            [
                'name' => 'Eat whatever',
                'cover' => 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC9hM2YwYTAwNi0xNmIyLTRmMTYtOTExMC0wYWVmMmNiOGE0MDkuanBlZw==',
            ], 
            [
                'name' => 'Fast and delicious',
                'cover' => 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC8wMjdiYmJlYi0yYWMzLTQwZjgtYjNmMC1iZWJmMDM0YmRhY2MuanBlZw==',
            ], 
            [
                'name' => 'From the streets',
                'cover' => 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC8zYzM2ZThmMC03NzFiLTQ4MDAtOTk0OC05N2Y1MDFlMmM2NzkuanBlZw==',
            ], 
            [
                'name' => 'Donut leave me here',
                'cover' => 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC8yYmQ5YmY5MS04Y2QzLTQ5YmItOWUzNC00MGM4ZGVhZDU1ODAuanBlZw==',
            ], 
            [
                'name' => 'Delicious delicacies',
                'cover' => 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC9iOGRhYzJiYi0zNTA1LTQ1ZDYtOWQ4Ny01NTI4NGVlNjk0MTcuanBlZw==',
            ], 
            [
                'name' => 'Thats tasty',
                'cover' => 'https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly9kMXJhbHNvZ25qbmczNy5jbG91ZGZyb250Lm5ldC9jNjFiOWM3OS04ZmM2LTQ3NWYtOTg3Zi00MmRhNTI0OGM2MWEuanBlZw==',
            ]
        ];

        foreach($users as $user) {
            $newUser = new User();
            $newUser->name=$user['name'];
            $newUser->email=$faker->email();
            $newUser->password=bcrypt($faker->word());
            $newUser->address=$faker->address();
            $newUser->p_iva=$faker->numerify('###########');
            $newUser->cover=$user['cover'];
            $newUser->save();

        }
    }
}
