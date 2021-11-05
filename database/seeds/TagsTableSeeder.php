<?php

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags=[ 
                [
                    'name' => 'Spicy',
                    'icon' => '<i class="fas fa-pepper-hot"></i>',
                    'color' => '#FF0000'
                ],
                [
                    'name' => 'Gluten free',
                    'icon' => '<i class="fas fa-bread-slice"></i>',
                    'color' => '#EBA319'
                ],
                [
                    'name' => 'Vegetarian',
                    'icon' => '<i class="fas fa-leaf"></i>',
                    'color' => '#A2C93C'
                ],
                [
                    'name' => 'Vegan',
                    'icon' => '<i class="fab fa-pagelines"></i>',
                    'color' => '#545D48'
                ],
                [
                    'name' => 'Lactose',
                    'icon' => '<i class="fas fa-cheese"></i>',
                    'color' => '#CED0CF'
                ],
        ];

      foreach($tags as $tag){
          $newTag = new Tag();
          $newTag->name =$tag['name'];
          $newTag->icon =$tag['icon'];
          $newTag->color =$tag['color'];
          $newTag->save();
      }

    }
}
