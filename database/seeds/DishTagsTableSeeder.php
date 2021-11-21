<?php

use Illuminate\Database\Seeder;
use App\Models\Dish;
use App\Models\Tag;

class DishTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dishes = Dish::all();
        $tagsIds = Tag::select('id')->pluck('id')->toArray();

        foreach($dishes as $dish) {
            $twoTags = array_rand($tagsIds, 2);
            $dish->tags()->attach([$tagsIds[$twoTags[0]],$tagsIds[$twoTags[1]]]);
        }
    }
}
