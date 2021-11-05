<?php

use Illuminate\Database\Seeder;
use App\Models\Cuisine;

class CuisinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cuisines = [
            ['name' => 'Pizza',
             'cover' => 'https://d4p17acsd5wyj.cloudfront.net/shortcuts/cuisines/pizza.png'],
            ['name' => 'Sushi',
             'cover' => 'https://duyt4h9nfnj50.cloudfront.net/new_search_home_eats_icon/Sushi_BrowseHome@3x.png'],
            ['name' => 'Asian cuisine',
             'cover' => 'https://d4p17acsd5wyj.cloudfront.net/shortcuts/cuisines/asian.png'],
            ['name' => 'Italian cuisine',
             'cover' => 'https://duyt4h9nfnj50.cloudfront.net/new_search_home_eats_icon/Italian_BrowseHome@3x.png'],
            ['name' => 'Fast food',
             'cover' => 'https://duyt4h9nfnj50.cloudfront.net/new_search_home_eats_icon/FastFood_BrowseHome@3x.png'],
            ['name' => 'Dessert',
             'cover' => 'https://duyt4h9nfnj50.cloudfront.net/new_search_home_eats_icon/Dessert_BrowseHome@3x.png'],
            ['name' => 'Breakfast',
             'cover' => 'https://duyt4h9nfnj50.cloudfront.net/new_search_home_eats_icon/Breakfast_BrowseHome@3x.png'],
            ['name' => 'Street food',
             'cover' => 'https://duyt4h9nfnj50.cloudfront.net/new_search_home_eats_icon/StreetFood_BrowseHome@3x.png'],
            ['name' => 'Poke',
             'cover' => 'https://duyt4h9nfnj50.cloudfront.net/new_search_home_eats_icon/Poke_BrowseHome@3x.png'],
        ];

        foreach($cuisines as $cuisine){
            $newCuisine = new Cuisine;
            $newCuisine->name = $cuisine['name'];
            $newCuisine->cover = $cuisine['cover'];
            $newCuisine->save();
        }
    }
}
