<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Dish;

class DishesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dishes = [
            [
            'visibility' => 1,
            'user_id' => 1,
            'name' => 'Vanilla ice cream small cone',
            'description' => 'Fresh and delicious small ice cream cone',
            'cover' => 'https://images.unsplash.com/photo-1570197788417-0e82375c9371?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8dmFuaWxsYSUyMGljZSUyMGNyZWFtfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 1,
            'name' => 'Vanilla ice cream medium cone',
            'description' => 'Fresh and delicious medium ice cream cone',
            'cover' => 'https://images.unsplash.com/photo-1570197788417-0e82375c9371?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8dmFuaWxsYSUyMGljZSUyMGNyZWFtfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 1,
            'name' => 'Vanilla ice cream big cone',
            'description' => 'Fresh and delicious big ice cream cone',
            'cover' => 'https://images.unsplash.com/photo-1570197788417-0e82375c9371?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8dmFuaWxsYSUyMGljZSUyMGNyZWFtfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80',
            'price' => 4.00
            ],
            [
            'visibility' => 1,
            'user_id' => 2,
            'name' => 'Vanilla ice cream small cone',
            'description' => 'Fresh and delicious small ice cream cone',
            'cover' => 'https://images.unsplash.com/photo-1570197788417-0e82375c9371?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8dmFuaWxsYSUyMGljZSUyMGNyZWFtfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 2,
            'name' => 'Vanilla ice cream medium cone',
            'description' => 'Fresh and delicious medium ice cream cone',
            'cover' => 'https://images.unsplash.com/photo-1570197788417-0e82375c9371?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8dmFuaWxsYSUyMGljZSUyMGNyZWFtfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 2,
            'name' => 'Vanilla ice cream big cone',
            'description' => 'Fresh and delicious big ice cream cone',
            'cover' => 'https://images.unsplash.com/photo-1570197788417-0e82375c9371?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8dmFuaWxsYSUyMGljZSUyMGNyZWFtfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80',
            'price' => 4.00
            ],
            [
            'visibility' => 1,
            'user_id' => 2,
            'name' => 'Coffee ice cream small cone',
            'description' => 'Fresh and delicious small ice cream cone',
            'cover' => 'https://www.simplyrecipes.com/thmb/wjKlfxU1uYI7jQ1NCZFT-VM07FM=/735x0/__opt__aboutcom__coeus__resources__content_migration__simply_recipes__uploads__2007__04__coffee-ice-cream-vertical-00dc174a766a4ff79f443e516e11fcb7.jpg',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 2,
            'name' => 'Coffee ice cream medium cone',
            'description' => 'Fresh and delicious medium ice cream cone',
            'cover' => 'https://www.simplyrecipes.com/thmb/wjKlfxU1uYI7jQ1NCZFT-VM07FM=/735x0/__opt__aboutcom__coeus__resources__content_migration__simply_recipes__uploads__2007__04__coffee-ice-cream-vertical-00dc174a766a4ff79f443e516e11fcb7.jpg',
            'price' => 3.00
            ],
            [ 
            'visibility' => 1, 
            'user_id' => 2,
            'name' => 'Coffee ice cream big cone',
            'description' => 'Fresh and delicious big ice cream cone',
            'cover' => 'https://www.simplyrecipes.com/thmb/wjKlfxU1uYI7jQ1NCZFT-VM07FM=/735x0/__opt__aboutcom__coeus__resources__content_migration__simply_recipes__uploads__2007__04__coffee-ice-cream-vertical-00dc174a766a4ff79f443e516e11fcb7.jpg',
            'price' => 4.00
            ],
            [
            'visibility' => 1,
            'user_id' => 2,
            'name' => 'Strawberry ice cream small cone',
            'description' => 'Fresh and delicious small ice cream cone',
            'cover' => 'https://zestysouthindiankitchen.com/wp-content/uploads/2014/04/strawberry-ice-cream-1.jpg',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 2,
            'name' => 'Strawberry ice cream medium cone',
            'description' => 'Fresh and delicious medium ice cream cone',
            'cover' => 'https://zestysouthindiankitchen.com/wp-content/uploads/2014/04/strawberry-ice-cream-1.jpg',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 2,
            'name' => 'Strawberry ice cream big cone',
            'description' => 'Fresh and delicious big ice cream cone',
            'cover' => 'https://zestysouthindiankitchen.com/wp-content/uploads/2014/04/strawberry-ice-cream-1.jpg',
            'price' => 4.00
            ],
            [
            'visibility' => 1,
            'user_id' => 2,
            'name' => 'Stracciatella ice cream small cone',
            'description' => 'Fresh and delicious small ice cream cone',
            'cover' => 'https://t3.ftcdn.net/jpg/01/71/07/30/360_F_171073025_zWchtcfnCfay2CnnDoyDgRffk0imkwNZ.jpg',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 2,
            'name' => 'Stracciatella ice cream medium cone',
            'description' => 'Fresh and delicious medium ice cream cone',
            'cover' => 'https://t3.ftcdn.net/jpg/01/71/07/30/360_F_171073025_zWchtcfnCfay2CnnDoyDgRffk0imkwNZ.jpg',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 2,
            'name' => 'Stracciatella ice cream big cone',
            'description' => 'Fresh and delicious big ice cream cone',
            'cover' => 'https://t3.ftcdn.net/jpg/01/71/07/30/360_F_171073025_zWchtcfnCfay2CnnDoyDgRffk0imkwNZ.jpg',
            'price' => 4.00
            ],
            [
            'visibility' => 1,
            'user_id' => 2,
            'name' => 'Bottle of water small',
            'description' => 'Fresh small bottle of water',
            'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR93H4EpqHcrtTL8erIjmuEJIRlWuy_aR3xgg&usqp=CAU',
            'price' => 1.00
            ],
            [
            'visibility' => 1,
            'user_id' => 2,
            'name' => 'Bottle of water big',
            'description' => 'Fresh big bottle of water',
            'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR93H4EpqHcrtTL8erIjmuEJIRlWuy_aR3xgg&usqp=CAU',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 3,
            'name' => 'Vanilla ice cream small cone',
            'description' => 'Fresh and delicious small ice cream cone',
            'cover' => 'https://images.unsplash.com/photo-1570197788417-0e82375c9371?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8dmFuaWxsYSUyMGljZSUyMGNyZWFtfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 3,
            'name' => 'Vanilla ice cream medium cone',
            'description' => 'Fresh and delicious medium ice cream cone',
            'cover' => 'https://images.unsplash.com/photo-1570197788417-0e82375c9371?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8dmFuaWxsYSUyMGljZSUyMGNyZWFtfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 3,
            'name' => 'Vanilla ice cream big cone',
            'description' => 'Fresh and delicious big ice cream cone',
            'cover' => 'https://images.unsplash.com/photo-1570197788417-0e82375c9371?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8dmFuaWxsYSUyMGljZSUyMGNyZWFtfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80',
            'price' => 4.00
            ],
            [
            'visibility' => 1,
            'user_id' => 3,
            'name' => 'Coffee ice cream small cone',
            'description' => 'Fresh and delicious small ice cream cone',
            'cover' => 'https://www.simplyrecipes.com/thmb/wjKlfxU1uYI7jQ1NCZFT-VM07FM=/735x0/__opt__aboutcom__coeus__resources__content_migration__simply_recipes__uploads__2007__04__coffee-ice-cream-vertical-00dc174a766a4ff79f443e516e11fcb7.jpg',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 3,
            'name' => 'Coffee ice cream medium cone',
            'description' => 'Fresh and delicious medium ice cream cone',
            'cover' => 'https://www.simplyrecipes.com/thmb/wjKlfxU1uYI7jQ1NCZFT-VM07FM=/735x0/__opt__aboutcom__coeus__resources__content_migration__simply_recipes__uploads__2007__04__coffee-ice-cream-vertical-00dc174a766a4ff79f443e516e11fcb7.jpg',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 3,
            'name' => 'Coffee ice cream big cone',
            'description' => 'Fresh and delicious big ice cream cone',
            'cover' => 'https://www.simplyrecipes.com/thmb/wjKlfxU1uYI7jQ1NCZFT-VM07FM=/735x0/__opt__aboutcom__coeus__resources__content_migration__simply_recipes__uploads__2007__04__coffee-ice-cream-vertical-00dc174a766a4ff79f443e516e11fcb7.jpg',
            'price' => 4.00
            ],
            [
            'visibility' => 1,
            'user_id' => 3,
            'name' => 'Strawberry ice cream small cone',
            'description' => 'Fresh and delicious small ice cream cone',
            'cover' => 'https://zestysouthindiankitchen.com/wp-content/uploads/2014/04/strawberry-ice-cream-1.jpg',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 3,
            'name' => 'Strawberry ice cream medium cone',
            'description' => 'Fresh and delicious medium ice cream cone',
            'cover' => 'https://zestysouthindiankitchen.com/wp-content/uploads/2014/04/strawberry-ice-cream-1.jpg',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 3,
            'name' => 'Strawberry ice cream big cone',
            'description' => 'Fresh and delicious big ice cream cone',
            'cover' => 'https://zestysouthindiankitchen.com/wp-content/uploads/2014/04/strawberry-ice-cream-1.jpg',
            'price' => 4.00
            ],
            [
            'visibility' => 1,
            'user_id' => 3,
            'name' => 'Stracciatella ice cream small cone',
            'description' => 'Fresh and delicious small ice cream cone',
            'cover' => 'https://t3.ftcdn.net/jpg/01/71/07/30/360_F_171073025_zWchtcfnCfay2CnnDoyDgRffk0imkwNZ.jpg',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 3,
            'name' => 'Stracciatella ice cream medium cone',
            'description' => 'Fresh and delicious medium ice cream cone',
            'cover' => 'https://t3.ftcdn.net/jpg/01/71/07/30/360_F_171073025_zWchtcfnCfay2CnnDoyDgRffk0imkwNZ.jpg',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 3,
            'name' => 'Stracciatella ice cream big cone',
            'description' => 'Fresh and delicious big ice cream cone',
            'cover' => 'https://t3.ftcdn.net/jpg/01/71/07/30/360_F_171073025_zWchtcfnCfay2CnnDoyDgRffk0imkwNZ.jpg',
            'price' => 4.00
            ],
            [
            'visibility' => 1,
            'user_id' => 3,
            'name' => 'Empty croissan',
            'description' => 'Delicious empty croissant',
            'cover' => 'https://image.freepik.com/free-photo/sliced-empty-croissant-croissant-halves-with-dough-texture-hard-light-white-background_207126-7194.jpg',
            'price' => 1.50
            ],
            [
            'visibility' => 1,
            'user_id' => 3,
            'name' => 'Chocolate croissan',
            'description' => 'Delicious chocolate croissant',
            'cover' => 'https://www.thecookierookie.com/wp-content/uploads/2017/05/sheet-pan-chocolate-croissants-3-of-10-1.jpg',
            'price' => 1.50
            ],
            [
            'visibility' => 1,
            'user_id' => 3,
            'name' => 'Strawberry croissan',
            'description' => 'Delicious strawberry croissant',
            'cover' => 'http://www.intravelfood.com/wp-content/uploads/2021/02/Valentines-Week-Breakfast-2-Way-Strawberry-Croissants-2-scaled.jpg',
            'price' => 1.50
            ],
            [
            'visibility' => 1,
            'user_id' => 3,
            'name' => 'Peach croissan',
            'description' => 'Delicious peach croissant',
            'cover' => 'https://bitedelite.pl/wp-content/uploads/2015/02/BiteDelite-paryzanka-9506.jpg',
            'price' => 1.50
            ],
            [
            'visibility' => 1,
            'user_id' => 3,
            'name' => 'Bottle of water small',
            'description' => 'Fresh small bottle of water',
            'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR93H4EpqHcrtTL8erIjmuEJIRlWuy_aR3xgg&usqp=CAU',
            'price' => 1.00
            ],
            [
            'visibility' => 1,
            'user_id' => 3,
            'name' => 'Bottle of water big',
            'description' => 'Fresh big bottle of water',
            'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR93H4EpqHcrtTL8erIjmuEJIRlWuy_aR3xgg&usqp=CAU',
            'price' => 2.00
            ],      
            [
            'visibility' => 1,
            'user_id' => 4,
            'name' => 'Empty croissan',
            'description' => 'Delicious empty croissant',
            'cover' => 'https://image.freepik.com/free-photo/sliced-empty-croissant-croissant-halves-with-dough-texture-hard-light-white-background_207126-7194.jpg',
            'price' => 1.50
            ],
            [
            'visibility' => 1,
            'user_id' => 4,
            'name' => 'Chocolate croissan',
            'description' => 'Delicious chocolate croissant',
            'cover' => 'https://www.thecookierookie.com/wp-content/uploads/2017/05/sheet-pan-chocolate-croissants-3-of-10-1.jpg',
            'price' => 1.50
            ],
            [
            'visibility' => 1,
            'user_id' => 4,
            'name' => 'Strawberry croissan',
            'description' => 'Delicious strawberry croissant',
            'cover' => 'http://www.intravelfood.com/wp-content/uploads/2021/02/Valentines-Week-Breakfast-2-Way-Strawberry-Croissants-2-scaled.jpg',
            'price' => 1.50
            ],
            [
            'visibility' => 1,
            'user_id' => 4,
            'name' => 'Peach croissan',
            'description' => 'Delicious peach croissant',
            'cover' => 'https://bitedelite.pl/wp-content/uploads/2015/02/BiteDelite-paryzanka-9506.jpg',
            'price' => 1.50
            ],   
            [
            'visibility' => 1,
            'user_id' => 4,
            'name' => 'Espresso coffee',
            'description' => 'Hot italian espresso coffee',
            'cover' => 'https://media.istockphoto.com/photos/coffee-cup-picture-id1126871442?k=20&m=1126871442&s=612x612&w=0&h=WSNR3OvXcFwiRNsL6BVgvPD4cmJzDq686vCbo_YTH5I=',
            'price' => 1.00
            ],
            [
            'visibility' => 1,
            'user_id' => 4,
            'name' => 'Cappuccino coffee',
            'description' => 'Hot italian cappuccino coffee',
            'cover' => 'https://previews.123rf.com/images/chamillewhite/chamillewhite1201/chamillewhite120100049/12120947-arte-cappuccino-caff%C3%A8-in-grani.jpg',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 4,
            'name' => 'Iced coffee',
            'description' => 'Fresh iced coffee',
            'cover' => 'https://onesweetappetite.com/wp-content/uploads/2020/08/Caramel-Iced-Coffee-5.jpg',
            'price' => 3.50
            ],
            [
            'visibility' => 1,
            'user_id' => 4,
            'name' => 'Iced coffee',
            'description' => 'Fresh iced coffee',
            'cover' => 'https://onesweetappetite.com/wp-content/uploads/2020/08/Caramel-Iced-Coffee-5.jpg',
            'price' => 3.50
            ], 
            [
            'visibility' => 1,
            'user_id' => 4,
            'name' => 'Bottle of water small',
            'description' => 'Fresh small bottle of water',
            'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR93H4EpqHcrtTL8erIjmuEJIRlWuy_aR3xgg&usqp=CAU',
            'price' => 1.00
            ],
            [
            'visibility' => 1,
            'user_id' => 4,
            'name' => 'Bottle of water big',
            'description' => 'Fresh big bottle of water',
            'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR93H4EpqHcrtTL8erIjmuEJIRlWuy_aR3xgg&usqp=CAU',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 5,
            'name' => 'Vanilla ice cream small cone',
            'description' => 'Fresh and delicious small ice cream cone',
            'cover' => 'https://images.unsplash.com/photo-1570197788417-0e82375c9371?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8dmFuaWxsYSUyMGljZSUyMGNyZWFtfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 5,
            'name' => 'Vanilla ice cream medium cone',
            'description' => 'Fresh and delicious medium ice cream cone',
            'cover' => 'https://images.unsplash.com/photo-1570197788417-0e82375c9371?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8dmFuaWxsYSUyMGljZSUyMGNyZWFtfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 5,
            'name' => 'Vanilla ice cream big cone',
            'description' => 'Fresh and delicious big ice cream cone',
            'cover' => 'https://images.unsplash.com/photo-1570197788417-0e82375c9371?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8dmFuaWxsYSUyMGljZSUyMGNyZWFtfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80',
            'price' => 4.00
            ],
            [
            'visibility' => 1,
            'user_id' => 5,
            'name' => 'Coffee ice cream small cone',
            'description' => 'Fresh and delicious small ice cream cone',
            'cover' => 'https://www.simplyrecipes.com/thmb/wjKlfxU1uYI7jQ1NCZFT-VM07FM=/735x0/__opt__aboutcom__coeus__resources__content_migration__simply_recipes__uploads__2007__04__coffee-ice-cream-vertical-00dc174a766a4ff79f443e516e11fcb7.jpg',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 5,
            'name' => 'Coffee ice cream medium cone',
            'description' => 'Fresh and delicious medium ice cream cone',
            'cover' => 'https://www.simplyrecipes.com/thmb/wjKlfxU1uYI7jQ1NCZFT-VM07FM=/735x0/__opt__aboutcom__coeus__resources__content_migration__simply_recipes__uploads__2007__04__coffee-ice-cream-vertical-00dc174a766a4ff79f443e516e11fcb7.jpg',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 5,
            'name' => 'Coffee ice cream big cone',
            'description' => 'Fresh and delicious big ice cream cone',
            'cover' => 'https://www.simplyrecipes.com/thmb/wjKlfxU1uYI7jQ1NCZFT-VM07FM=/735x0/__opt__aboutcom__coeus__resources__content_migration__simply_recipes__uploads__2007__04__coffee-ice-cream-vertical-00dc174a766a4ff79f443e516e11fcb7.jpg',
            'price' => 4.00
            ],
            [
            'visibility' => 1,
            'user_id' => 5,
            'name' => 'Strawberry ice cream small cone',
            'description' => 'Fresh and delicious small ice cream cone',
            'cover' => 'https://zestysouthindiankitchen.com/wp-content/uploads/2014/04/strawberry-ice-cream-1.jpg',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 5,
            'name' => 'Strawberry ice cream medium cone',
            'description' => 'Fresh and delicious medium ice cream cone',
            'cover' => 'https://zestysouthindiankitchen.com/wp-content/uploads/2014/04/strawberry-ice-cream-1.jpg',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 5,
            'name' => 'Strawberry ice cream big cone',
            'description' => 'Fresh and delicious big ice cream cone',
            'cover' => 'https://zestysouthindiankitchen.com/wp-content/uploads/2014/04/strawberry-ice-cream-1.jpg',
            'price' => 4.00
            ],
            [
            'visibility' => 1,
            'user_id' => 5,
            'name' => 'Stracciatella ice cream small cone',
            'description' => 'Fresh and delicious small ice cream cone',
            'cover' => 'https://t3.ftcdn.net/jpg/01/71/07/30/360_F_171073025_zWchtcfnCfay2CnnDoyDgRffk0imkwNZ.jpg',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 5,
            'name' => 'Stracciatella ice cream medium cone',
            'description' => 'Fresh and delicious medium ice cream cone',
            'cover' => 'https://t3.ftcdn.net/jpg/01/71/07/30/360_F_171073025_zWchtcfnCfay2CnnDoyDgRffk0imkwNZ.jpg',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 5,
            'name' => 'Stracciatella ice cream big cone',
            'description' => 'Fresh and delicious big ice cream cone',
            'cover' => 'https://t3.ftcdn.net/jpg/01/71/07/30/360_F_171073025_zWchtcfnCfay2CnnDoyDgRffk0imkwNZ.jpg',
            'price' => 4.00
            ],
            [
            'visibility' => 1,
            'user_id' => 5,
            'name' => 'Empty croissan',
            'description' => 'Delicious empty croissant',
            'cover' => 'https://image.freepik.com/free-photo/sliced-empty-croissant-croissant-halves-with-dough-texture-hard-light-white-background_207126-7194.jpg',
            'price' => 1.50
            ],
            [
            'visibility' => 1,
            'user_id' => 5,
            'name' => 'Chocolate croissan',
            'description' => 'Delicious chocolate croissant',
            'cover' => 'https://www.thecookierookie.com/wp-content/uploads/2017/05/sheet-pan-chocolate-croissants-3-of-10-1.jpg',
            'price' => 1.50
            ],
            [
            'visibility' => 1,
            'user_id' => 5,
            'name' => 'Strawberry croissan',
            'description' => 'Delicious strawberry croissant',
            'cover' => 'http://www.intravelfood.com/wp-content/uploads/2021/02/Valentines-Week-Breakfast-2-Way-Strawberry-Croissants-2-scaled.jpg',
            'price' => 1.50
            ],
            [
            'visibility' => 1,
            'user_id' => 5,
            'name' => 'Peach croissan',
            'description' => 'Delicious peach croissant',
            'cover' => 'https://bitedelite.pl/wp-content/uploads/2015/02/BiteDelite-paryzanka-9506.jpg',
            'price' => 1.50
            ],          
            [
            'visibility' => 1,
            'user_id' => 5,
            'name' => 'Espresso coffee',
            'description' => 'Hot italian espresso coffee',
            'cover' => 'https://media.istockphoto.com/photos/coffee-cup-picture-id1126871442?k=20&m=1126871442&s=612x612&w=0&h=WSNR3OvXcFwiRNsL6BVgvPD4cmJzDq686vCbo_YTH5I=',
            'price' => 1.00
            ],
            [
            'visibility' => 1,
            'user_id' => 5,
            'name' => 'Cappuccino coffee',
            'description' => 'Hot italian cappuccino coffee',
            'cover' => 'https://previews.123rf.com/images/chamillewhite/chamillewhite1201/chamillewhite120100049/12120947-arte-cappuccino-caff%C3%A8-in-grani.jpg',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 5,
            'name' => 'Iced coffee',
            'description' => 'Fresh iced coffee',
            'cover' => 'https://onesweetappetite.com/wp-content/uploads/2020/08/Caramel-Iced-Coffee-5.jpg',
            'price' => 3.50
            ],
            [
            'visibility' => 1,
            'user_id' => 5,
            'name' => 'Iced coffee',
            'description' => 'Fresh iced coffee',
            'cover' => 'https://onesweetappetite.com/wp-content/uploads/2020/08/Caramel-Iced-Coffee-5.jpg',
            'price' => 3.50
            ], 
            [
            'visibility' => 1,
            'user_id' => 5,
            'name' => 'Bottle of water small',
            'description' => 'Fresh small bottle of water',
            'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR93H4EpqHcrtTL8erIjmuEJIRlWuy_aR3xgg&usqp=CAU',
            'price' => 1.00
            ],
            [
            'visibility' => 1,
            'user_id' => 5,
            'name' => 'Bottle of water big',
            'description' => 'Fresh big bottle of water',
            'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR93H4EpqHcrtTL8erIjmuEJIRlWuy_aR3xgg&usqp=CAU',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 6,
            'name' => 'Margherita pizza',
            'description' => 'Italian pizza with mozzarella chese, tomato sauce and basil',
            'cover' => 'https://primochef.it/wp-content/uploads/2019/08/SH_pizza_fatta_in_casa-1200x800.jpg',
            'price' => 3.50
            ],
            [
            'visibility' => 1,
            'user_id' => 6,
            'name' => 'Marinara pizza',
            'description' => 'Italian pizza with tomato sauce and basil',
            'cover' => 'https://wips.plug.it/cips/buonissimo.org/cms/2012/05/pizza-marinara-5.jpg',
            'price' => 2.50
            ],
            [
            'visibility' => 1,
            'user_id' => 6,
            'name' => 'American pizza',
            'description' => 'Italian pizza with mozzarella chese, tomato sauce and fries',
            'cover' => 'https://www.unmondodisapori.it/wp-content/uploads/2017/10/americana-e1508499670331.jpeg',
            'price' => 4.50
            ],
            [
            'visibility' => 1,
            'user_id' => 6,
            'name' => 'Muntain special pizza',
            'description' => 'Italian pizza with mozzarella chese, tomato sauce, ham and basil ',
            'cover' => 'https://www.giginoefigli.it/wp-content/uploads/2019/07/pizza-summer-special-pizza-con-crema-di-basilico-2.jpg',
            'price' => 4.50
            ],
            [
            'visibility' => 1,
            'user_id' => 6,
            'name' => 'Parmigiana special pizza',
            'description' => 'Italian pizza with mozzarella chese, tomato sauce, eggplant and cucumbers',
            'cover' => 'https://www.infinitopizzeria.it/wp-content/uploads/2015/12/IMG_9237_1_92-820x466.jpg',
            'price' => 4.50
            ],
            [
            'visibility' => 1,
            'user_id' => 6,
            'name' => 'Halloween special pizza',
            'description' => 'Italian pizza with mozzarella chese, sausages and pumpkin cream',
            'cover' => 'https://www.pizzaontheroad.eu/wp-content/uploads/2019/03/IMG_2885-1024x768.jpg',
            'price' => 4.50
            ],
            [
            'visibility' => 1,
            'user_id' => 6,
            'name' => 'Daisy special pizza pizza',
            'description' => 'Italian pizza with mozzarella chese, asparagus and cream',
            'cover' => 'https://lacascinadeisapori.it/wp-content/uploads/2020/04/WhatsApp-Image-2020-04-29-at-18.05.39.jpg',
            'price' => 4.50
            ],
            [
            'visibility' => 1,
            'user_id' => 6,
            'name' => 'Daisy special pizza pizza',
            'description' => 'Italian pizza with mozzarella chese, asparagus and cream',
            'cover' => 'https://lacascinadeisapori.it/wp-content/uploads/2020/04/WhatsApp-Image-2020-04-29-at-18.05.39.jpg',
            'price' => 4.50
            ],
            [
            'visibility' => 1,
            'user_id' => 6,
            'name' => 'Mortadella ham special pizza pizza',
            'description' => 'Italian pizza with mozzarella chese, pistachio and mortadella ham',
            'cover' => 'https://blog.giallozafferano.it/eleme/wp-content/uploads/2020/03/Pizza-bianca-mozzarella-mortadella-e-granella-di-pistacchi.jpg',
            'price' => 4.50
            ],
            [
            'visibility' => 1,
            'user_id' => 6,
            'name' => 'Bottle of water small',
            'description' => 'Fresh small bottle of water',
            'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR93H4EpqHcrtTL8erIjmuEJIRlWuy_aR3xgg&usqp=CAU',
            'price' => 1.00
            ],
            [
            'visibility' => 1,
            'user_id' => 6,
            'name' => 'Bottle of water big',
            'description' => 'Fresh big bottle of water',
            'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR93H4EpqHcrtTL8erIjmuEJIRlWuy_aR3xgg&usqp=CAU',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 6,
            'name' => 'Bottle of coke small',
            'description' => 'Fresh small bottle of coke',
            'cover' => 'https://m.media-amazon.com/images/I/81GsS1XFEZL._AC_SX522_.jpg',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 6,
            'name' => 'Bottle of coke big',
            'description' => 'Fresh big bottle of coke',
            'cover' => 'https://m.media-amazon.com/images/I/81GsS1XFEZL._AC_SX522_.jpg',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 6,
            'name' => 'Bottle of coke zero small',
            'description' => 'Fresh small bottle of coke zero',
            'cover' => 'https://i5.walmartimages.com/asr/b92c906c-40f0-4bb5-bc66-08f1d525043f.c9cda842cebc2df2c9eeeb7c349171ad.jpeg',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 6,
            'name' => 'Bottle of coke zero big',
            'description' => 'Fresh big bottle of coke zero',
            'cover' => 'https://i5.walmartimages.com/asr/b92c906c-40f0-4bb5-bc66-08f1d525043f.c9cda842cebc2df2c9eeeb7c349171ad.jpeg',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 6,
            'name' => 'Bottle of sprite small',
            'description' => 'Fresh small bottle of sprite',
            'cover' => 'https://images.heb.com/is/image/HEBGrocery/000145627',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 6,
            'name' => 'Bottle of sprite big',
            'description' => 'Fresh big bottle of sprite',
            'cover' => 'https://images.heb.com/is/image/HEBGrocery/000145627',
            'price' => 3.00
            ],   
            [
            'visibility' => 1,
            'user_id' => 7,
            'name' => 'Margherita pizza',
            'description' => 'Italian pizza with mozzarella chese, tomato sauce and basil',
            'cover' => 'https://primochef.it/wp-content/uploads/2019/08/SH_pizza_fatta_in_casa-1200x800.jpg',
            'price' => 3.50
            ],
            [
            'visibility' => 1,
            'user_id' => 7,
            'name' => 'Marinara pizza',
            'description' => 'Italian pizza with tomato sauce and basil',
            'cover' => 'https://wips.plug.it/cips/buonissimo.org/cms/2012/05/pizza-marinara-5.jpg',
            'price' => 2.50
            ],
            [
            'visibility' => 1,
            'user_id' => 7,
            'name' => 'American pizza',
            'description' => 'Italian pizza with mozzarella chese, tomato sauce and fries',
            'cover' => 'https://www.unmondodisapori.it/wp-content/uploads/2017/10/americana-e1508499670331.jpeg',
            'price' => 4.50
            ],
            [
            'visibility' => 1,
            'user_id' => 7,
            'name' => 'Muntain special pizza',
            'description' => 'Italian pizza with mozzarella chese, tomato sauce, ham and basil ',
            'cover' => 'https://www.giginoefigli.it/wp-content/uploads/2019/07/pizza-summer-special-pizza-con-crema-di-basilico-2.jpg',
            'price' => 4.50
            ],
            [
            'visibility' => 1,
            'user_id' => 7,
            'name' => 'Parmigiana special pizza',
            'description' => 'Italian pizza with mozzarella chese, tomato sauce, eggplant and cucumbers',
            'cover' => 'https://www.infinitopizzeria.it/wp-content/uploads/2015/12/IMG_9237_1_92-820x466.jpg',
            'price' => 4.50
            ],
            [
            'visibility' => 1,
            'user_id' => 7,
            'name' => 'Halloween special pizza',
            'description' => 'Italian pizza with mozzarella chese, sausages and pumpkin cream',
            'cover' => 'https://www.pizzaontheroad.eu/wp-content/uploads/2019/03/IMG_2885-1024x768.jpg',
            'price' => 4.50
            ],
            [
            'visibility' => 1,
            'user_id' => 7,
            'name' => 'Daisy special pizza pizza',
            'description' => 'Italian pizza with mozzarella chese, asparagus and cream',
            'cover' => 'https://lacascinadeisapori.it/wp-content/uploads/2020/04/WhatsApp-Image-2020-04-29-at-18.05.39.jpg',
            'price' => 4.50
            ],
            [
            'visibility' => 1,
            'user_id' => 7,
            'name' => 'Daisy special pizza pizza',
            'description' => 'Italian pizza with mozzarella chese, asparagus and cream',
            'cover' => 'https://lacascinadeisapori.it/wp-content/uploads/2020/04/WhatsApp-Image-2020-04-29-at-18.05.39.jpg',
            'price' => 4.50
            ],
            [
            'visibility' => 1,
            'user_id' => 7,
            'name' => 'Mortadella ham special pizza pizza',
            'description' => 'Italian pizza with mozzarella chese, pistachio and mortadella ham',
            'cover' => 'https://blog.giallozafferano.it/eleme/wp-content/uploads/2020/03/Pizza-bianca-mozzarella-mortadella-e-granella-di-pistacchi.jpg',
            'price' => 4.50
            ],
            [
            'visibility' => 1,
            'user_id' => 7,
            'name' => 'Bottle of water small',
            'description' => 'Fresh small bottle of water',
            'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR93H4EpqHcrtTL8erIjmuEJIRlWuy_aR3xgg&usqp=CAU',
            'price' => 1.00
            ],
            [
            'visibility' => 1,
            'user_id' => 7,
            'name' => 'Bottle of water big',
            'description' => 'Fresh big bottle of water',
            'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR93H4EpqHcrtTL8erIjmuEJIRlWuy_aR3xgg&usqp=CAU',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 7,
            'name' => 'Bottle of coke small',
            'description' => 'Fresh small bottle of coke',
            'cover' => 'https://m.media-amazon.com/images/I/81GsS1XFEZL._AC_SX522_.jpg',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 7,
            'name' => 'Bottle of coke big',
            'description' => 'Fresh big bottle of coke',
            'cover' => 'https://m.media-amazon.com/images/I/81GsS1XFEZL._AC_SX522_.jpg',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 7,
            'name' => 'Bottle of coke zero small',
            'description' => 'Fresh small bottle of coke zero',
            'cover' => 'https://i5.walmartimages.com/asr/b92c906c-40f0-4bb5-bc66-08f1d525043f.c9cda842cebc2df2c9eeeb7c349171ad.jpeg',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 7,
            'name' => 'Bottle of coke zero big',
            'description' => 'Fresh big bottle of coke zero',
            'cover' => 'https://i5.walmartimages.com/asr/b92c906c-40f0-4bb5-bc66-08f1d525043f.c9cda842cebc2df2c9eeeb7c349171ad.jpeg',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 7,
            'name' => 'Bottle of sprite small',
            'description' => 'Fresh small bottle of sprite',
            'cover' => 'https://images.heb.com/is/image/HEBGrocery/000145627',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 7,
            'name' => 'Bottle of sprite big',
            'description' => 'Fresh big bottle of sprite',
            'cover' => 'https://images.heb.com/is/image/HEBGrocery/000145627',
            'price' => 3.00
            ], 
            [
            'visibility' => 1,
            'user_id' => 8,
            'name' => 'Margherita pizza',
            'description' => 'Italian pizza with mozzarella chese, tomato sauce and basil',
            'cover' => 'https://primochef.it/wp-content/uploads/2019/08/SH_pizza_fatta_in_casa-1200x800.jpg',
            'price' => 3.50
            ],
            [
            'visibility' => 1,
            'user_id' => 8,
            'name' => 'Marinara pizza',
            'description' => 'Italian pizza with tomato sauce and basil',
            'cover' => 'https://wips.plug.it/cips/buonissimo.org/cms/2012/05/pizza-marinara-5.jpg',
            'price' => 2.50
            ],
            [
            'visibility' => 1,
            'user_id' => 8,
            'name' => 'American pizza',
            'description' => 'Italian pizza with mozzarella chese, tomato sauce and fries',
            'cover' => 'https://www.unmondodisapori.it/wp-content/uploads/2017/10/americana-e1508499670331.jpeg',
            'price' => 4.50
            ],
            [
            'visibility' => 1,
            'user_id' => 8,
            'name' => 'Muntain special pizza',
            'description' => 'Italian pizza with mozzarella chese, tomato sauce, ham and basil ',
            'cover' => 'https://www.giginoefigli.it/wp-content/uploads/2019/07/pizza-summer-special-pizza-con-crema-di-basilico-2.jpg',
            'price' => 4.50
            ],
            [
            'visibility' => 1,
            'user_id' => 8,
            'name' => 'Parmigiana special pizza',
            'description' => 'Italian pizza with mozzarella chese, tomato sauce, eggplant and cucumbers',
            'cover' => 'https://www.infinitopizzeria.it/wp-content/uploads/2015/12/IMG_9237_1_92-820x466.jpg',
            'price' => 4.50
            ],
            [
            'visibility' => 1,
            'user_id' => 8,
            'name' => 'Halloween special pizza',
            'description' => 'Italian pizza with mozzarella chese, sausages and pumpkin cream',
            'cover' => 'https://www.pizzaontheroad.eu/wp-content/uploads/2019/03/IMG_2885-1024x768.jpg',
            'price' => 4.50
            ],
            [
            'visibility' => 1,
            'user_id' => 8,
            'name' => 'Daisy special pizza pizza',
            'description' => 'Italian pizza with mozzarella chese, asparagus and cream',
            'cover' => 'https://lacascinadeisapori.it/wp-content/uploads/2020/04/WhatsApp-Image-2020-04-29-at-18.05.39.jpg',
            'price' => 4.50
            ],
            [
            'visibility' => 1,
            'user_id' => 8,
            'name' => 'Daisy special pizza pizza',
            'description' => 'Italian pizza with mozzarella chese, asparagus and cream',
            'cover' => 'https://lacascinadeisapori.it/wp-content/uploads/2020/04/WhatsApp-Image-2020-04-29-at-18.05.39.jpg',
            'price' => 4.50
            ],
            [
            'visibility' => 1,
            'user_id' => 8,
            'name' => 'Mortadella ham special pizza pizza',
            'description' => 'Italian pizza with mozzarella chese, pistachio and mortadella ham',
            'cover' => 'https://blog.giallozafferano.it/eleme/wp-content/uploads/2020/03/Pizza-bianca-mozzarella-mortadella-e-granella-di-pistacchi.jpg',
            'price' => 4.50
            ],
            [
            'visibility' => 1,
            'user_id' => 8,
            'name' => 'Bottle of water small',
            'description' => 'Fresh small bottle of water',
            'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR93H4EpqHcrtTL8erIjmuEJIRlWuy_aR3xgg&usqp=CAU',
            'price' => 1.00
            ],
            [
            'visibility' => 1,
            'user_id' => 8,
            'name' => 'Bottle of water big',
            'description' => 'Fresh big bottle of water',
            'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR93H4EpqHcrtTL8erIjmuEJIRlWuy_aR3xgg&usqp=CAU',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 8,
            'name' => 'Bottle of coke small',
            'description' => 'Fresh small bottle of coke',
            'cover' => 'https://m.media-amazon.com/images/I/81GsS1XFEZL._AC_SX522_.jpg',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 8,
            'name' => 'Bottle of coke big',
            'description' => 'Fresh big bottle of coke',
            'cover' => 'https://m.media-amazon.com/images/I/81GsS1XFEZL._AC_SX522_.jpg',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 8,
            'name' => 'Bottle of coke zero small',
            'description' => 'Fresh small bottle of coke zero',
            'cover' => 'https://i5.walmartimages.com/asr/b92c906c-40f0-4bb5-bc66-08f1d525043f.c9cda842cebc2df2c9eeeb7c349171ad.jpeg',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 8,
            'name' => 'Bottle of coke zero big',
            'description' => 'Fresh big bottle of coke zero',
            'cover' => 'https://i5.walmartimages.com/asr/b92c906c-40f0-4bb5-bc66-08f1d525043f.c9cda842cebc2df2c9eeeb7c349171ad.jpeg',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 8,
            'name' => 'Bottle of sprite small',
            'description' => 'Fresh small bottle of sprite',
            'cover' => 'https://images.heb.com/is/image/HEBGrocery/000145627',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 8,
            'name' => 'Bottle of sprite big',
            'description' => 'Fresh big bottle of sprite',
            'cover' => 'https://images.heb.com/is/image/HEBGrocery/000145627',
            'price' => 3.00
            ],      
            [
            'visibility' => 1,
            'user_id' => 9,
            'name' => 'Huramaki n1',
            'description' => 'Typical sushi dish. 6 pieces',
            'cover' => 'https://www.cucchiaio.it/content/cucchiaio/it/ricette/2011/09/ricetta-uramaki-gamberi-avocado/jcr:content/header-par/image_single.img10.jpg/1466425275386.jpg',
            'price' => 5.00
            ],
            [
            'visibility' => 1,
            'user_id' => 9,
            'name' => 'Huramaki n2',
            'description' => 'Typical sushi dish. 6 pieces',
            'cover' => 'https://yumyumfood.it/wp-content/uploads/2020/08/uramaki-chips-roll.jpg',
            'price' => 5.00
            ],
            [
            'visibility' => 1,
            'user_id' => 9,
            'name' => 'Huramaki n3',
            'description' => 'Typical sushi dish. 6 pieces',
            'cover' => 'https://www.miyosushi.it/wp-content/uploads/2019/08/113.png',
            'price' => 5.00
            ],
            [
            'visibility' => 1,
            'user_id' => 9,
            'name' => 'Hosomaki n1',
            'description' => 'Typical sushi dish. 6 pieces',
            'cover' => 'https://www.tribugolosa.com/media/hosomaki_crop.jpg/rh/hosomaki.jpg',
            'price' => 5.00
            ],
            [
            'visibility' => 1,
            'user_id' => 9,
            'name' => 'Hosomaki n2',
            'description' => 'Typical sushi dish. 6 pieces',
            'cover' => 'https://www.gustissimo.it/articoli/ricette/ricette-piatti-unici/hosomaki.jpg',
            'price' => 5.00
            ],
            [
            'visibility' => 1,
            'user_id' => 9,
            'name' => 'Hosomaki n3',
            'description' => 'Typical sushi dish. 6 pieces',
            'cover' => 'https://www.tribugolosa.com/uploads/media/hosomaki-vegetariano_c.jpg?1381527854',
            'price' => 5.00
            ],
            [
            'visibility' => 1,
            'user_id' => 9,
            'name' => 'Nighiri n1',
            'description' => 'Typical sushi dish. 6 pieces',
            'cover' => 'https://media-cdn.tripadvisor.com/media/photo-s/11/ab/af/87/nighiri-salmone.jpg',
            'price' => 7.00
            ],
            [
            'visibility' => 1,
            'user_id' => 9,
            'name' => 'Nighiri n2',
            'description' => 'Typical sushi dish. 6 pieces',
            'cover' => 'https://media.leroymerlin.it/media/140411/.jpg?width=650&height=650&format=jpg&quality=80&fit=bounds',
            'price' => 7.00
            ],
            [
            'visibility' => 1,
            'user_id' => 9,
            'name' => 'Temaki n1',
            'description' => 'Typical sushi dish. 1 cone',
            'cover' => 'https://www.shinto.it/wp-content/uploads/2017/02/handrolls-tempura-ebi-temaki-1.jpg',
            'price' => 10.00
            ],
            [
            'visibility' => 1,
            'user_id' => 9,
            'name' => 'Temaki n2',
            'description' => 'Typical sushi dish. 1 cone',
            'cover' => 'https://www.irorisushiathome.it/wp-content/uploads/2020/08/temaki_spicy_tuna8.jpg',
            'price' => 10.00
            ],
            [
            'visibility' => 1,
            'user_id' => 9,
            'name' => 'Bottle of water small',
            'description' => 'Fresh small bottle of water',
            'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR93H4EpqHcrtTL8erIjmuEJIRlWuy_aR3xgg&usqp=CAU',
            'price' => 1.00
            ],
            [
            'visibility' => 1,
            'user_id' => 9,
            'name' => 'Bottle of water big',
            'description' => 'Fresh big bottle of water',
            'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR93H4EpqHcrtTL8erIjmuEJIRlWuy_aR3xgg&usqp=CAU',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 9,
            'name' => 'Bottle of coke small',
            'description' => 'Fresh small bottle of coke',
            'cover' => 'https://m.media-amazon.com/images/I/81GsS1XFEZL._AC_SX522_.jpg',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 9,
            'name' => 'Bottle of coke big',
            'description' => 'Fresh big bottle of coke',
            'cover' => 'https://m.media-amazon.com/images/I/81GsS1XFEZL._AC_SX522_.jpg',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 9,
            'name' => 'Bottle of coke zero small',
            'description' => 'Fresh small bottle of coke zero',
            'cover' => 'https://i5.walmartimages.com/asr/b92c906c-40f0-4bb5-bc66-08f1d525043f.c9cda842cebc2df2c9eeeb7c349171ad.jpeg',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 9,
            'name' => 'Bottle of coke zero big',
            'description' => 'Fresh big bottle of coke zero',
            'cover' => 'https://i5.walmartimages.com/asr/b92c906c-40f0-4bb5-bc66-08f1d525043f.c9cda842cebc2df2c9eeeb7c349171ad.jpeg',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 9,
            'name' => 'Bottle of sprite small',
            'description' => 'Fresh small bottle of sprite',
            'cover' => 'https://images.heb.com/is/image/HEBGrocery/000145627',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 9,
            'name' => 'Bottle of sprite big',
            'description' => 'Fresh big bottle of sprite',
            'cover' => 'https://images.heb.com/is/image/HEBGrocery/000145627',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 10,
            'name' => 'Huramaki n1',
            'description' => 'Typical sushi dish. 6 pieces',
            'cover' => 'https://www.cucchiaio.it/content/cucchiaio/it/ricette/2011/09/ricetta-uramaki-gamberi-avocado/jcr:content/header-par/image_single.img10.jpg/1466425275386.jpg',
            'price' => 5.00
            ],
            [
            'visibility' => 1,
            'user_id' => 10,
            'name' => 'Huramaki n2',
            'description' => 'Typical sushi dish. 6 pieces',
            'cover' => 'https://yumyumfood.it/wp-content/uploads/2020/08/uramaki-chips-roll.jpg',
            'price' => 5.00
            ],
            [
            'visibility' => 1,
            'user_id' => 10,
            'name' => 'Huramaki n3',
            'description' => 'Typical sushi dish. 6 pieces',
            'cover' => 'https://www.miyosushi.it/wp-content/uploads/2019/08/113.png',
            'price' => 5.00
            ],
            [
            'visibility' => 1,
            'user_id' => 10,
            'name' => 'Hosomaki n1',
            'description' => 'Typical sushi dish. 6 pieces',
            'cover' => 'https://www.tribugolosa.com/media/hosomaki_crop.jpg/rh/hosomaki.jpg',
            'price' => 5.00
            ],
            [
            'visibility' => 1,
            'user_id' => 10,
            'name' => 'Hosomaki n2',
            'description' => 'Typical sushi dish. 6 pieces',
            'cover' => 'https://www.gustissimo.it/articoli/ricette/ricette-piatti-unici/hosomaki.jpg',
            'price' => 5.00
            ],
            [
            'visibility' => 1,
            'user_id' => 10,
            'name' => 'Hosomaki n3',
            'description' => 'Typical sushi dish. 6 pieces',
            'cover' => 'https://www.tribugolosa.com/uploads/media/hosomaki-vegetariano_c.jpg?1381527854',
            'price' => 5.00
            ],
            [
            'visibility' => 1,
            'user_id' => 10,
            'name' => 'Nighiri n1',
            'description' => 'Typical sushi dish. 6 pieces',
            'cover' => 'https://media-cdn.tripadvisor.com/media/photo-s/11/ab/af/87/nighiri-salmone.jpg',
            'price' => 7.00
            ],
            [
            'visibility' => 1,
            'user_id' => 10,
            'name' => 'Nighiri n2',
            'description' => 'Typical sushi dish. 6 pieces',
            'cover' => 'https://media.leroymerlin.it/media/140411/.jpg?width=650&height=650&format=jpg&quality=80&fit=bounds',
            'price' => 7.00
            ],
            [
            'visibility' => 1,
            'user_id' => 10,
            'name' => 'Temaki n1',
            'description' => 'Typical sushi dish. 1 cone',
            'cover' => 'https://www.shinto.it/wp-content/uploads/2017/02/handrolls-tempura-ebi-temaki-1.jpg',
            'price' => 10.00
            ],
            [
            'visibility' => 1,
            'user_id' => 10,
            'name' => 'Temaki n2',
            'description' => 'Typical sushi dish. 1 cone',
            'cover' => 'https://www.irorisushiathome.it/wp-content/uploads/2020/08/temaki_spicy_tuna8.jpg',
            'price' => 10.00
            ],
            [
            'visibility' => 1,
            'user_id' => 10,
            'name' => 'Bottle of water small',
            'description' => 'Fresh small bottle of water',
            'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR93H4EpqHcrtTL8erIjmuEJIRlWuy_aR3xgg&usqp=CAU',
            'price' => 1.00
            ],
            [
            'visibility' => 1,
            'user_id' => 10,
            'name' => 'Bottle of water big',
            'description' => 'Fresh big bottle of water',
            'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR93H4EpqHcrtTL8erIjmuEJIRlWuy_aR3xgg&usqp=CAU',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 10,
            'name' => 'Bottle of coke small',
            'description' => 'Fresh small bottle of coke',
            'cover' => 'https://m.media-amazon.com/images/I/81GsS1XFEZL._AC_SX522_.jpg',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 10,
            'name' => 'Bottle of coke big',
            'description' => 'Fresh big bottle of coke',
            'cover' => 'https://m.media-amazon.com/images/I/81GsS1XFEZL._AC_SX522_.jpg',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 10,
            'name' => 'Bottle of coke zero small',
            'description' => 'Fresh small bottle of coke zero',
            'cover' => 'https://i5.walmartimages.com/asr/b92c906c-40f0-4bb5-bc66-08f1d525043f.c9cda842cebc2df2c9eeeb7c349171ad.jpeg',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 10,
            'name' => 'Bottle of coke zero big',
            'description' => 'Fresh big bottle of coke zero',
            'cover' => 'https://i5.walmartimages.com/asr/b92c906c-40f0-4bb5-bc66-08f1d525043f.c9cda842cebc2df2c9eeeb7c349171ad.jpeg',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 10,
            'name' => 'Bottle of sprite small',
            'description' => 'Fresh small bottle of sprite',
            'cover' => 'https://images.heb.com/is/image/HEBGrocery/000145627',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 10,
            'name' => 'Bottle of sprite big',
            'description' => 'Fresh big bottle of sprite',
            'cover' => 'https://images.heb.com/is/image/HEBGrocery/000145627',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 11,
            'name' => 'Huramaki n1',
            'description' => 'Typical sushi dish. 6 pieces',
            'cover' => 'https://www.cucchiaio.it/content/cucchiaio/it/ricette/2011/09/ricetta-uramaki-gamberi-avocado/jcr:content/header-par/image_single.img10.jpg/1466425275386.jpg',
            'price' => 5.00
            ],
            [
            'visibility' => 1,
            'user_id' => 11,
            'name' => 'Huramaki n2',
            'description' => 'Typical sushi dish. 6 pieces',
            'cover' => 'https://yumyumfood.it/wp-content/uploads/2020/08/uramaki-chips-roll.jpg',
            'price' => 5.00
            ],
            [
            'visibility' => 1,
            'user_id' => 11,
            'name' => 'Huramaki n3',
            'description' => 'Typical sushi dish. 6 pieces',
            'cover' => 'https://www.miyosushi.it/wp-content/uploads/2019/08/113.png',
            'price' => 5.00
            ],
            [
            'visibility' => 1,
            'user_id' => 11,
            'name' => 'Hosomaki n1',
            'description' => 'Typical sushi dish. 6 pieces',
            'cover' => 'https://www.tribugolosa.com/media/hosomaki_crop.jpg/rh/hosomaki.jpg',
            'price' => 5.00
            ],
            [
            'visibility' => 1,
            'user_id' => 11,
            'name' => 'Hosomaki n2',
            'description' => 'Typical sushi dish. 6 pieces',
            'cover' => 'https://www.gustissimo.it/articoli/ricette/ricette-piatti-unici/hosomaki.jpg',
            'price' => 5.00
            ],
            [
            'visibility' => 1,
            'user_id' => 11,
            'name' => 'Hosomaki n3',
            'description' => 'Typical sushi dish. 6 pieces',
            'cover' => 'https://www.tribugolosa.com/uploads/media/hosomaki-vegetariano_c.jpg?1381527854',
            'price' => 5.00
            ],
            [
            'visibility' => 1,
            'user_id' => 11,
            'name' => 'Nighiri n1',
            'description' => 'Typical sushi dish. 6 pieces',
            'cover' => 'https://media-cdn.tripadvisor.com/media/photo-s/11/ab/af/87/nighiri-salmone.jpg',
            'price' => 7.00
            ],
            [
            'visibility' => 1,
            'user_id' => 11,
            'name' => 'Nighiri n2',
            'description' => 'Typical sushi dish. 6 pieces',
            'cover' => 'https://media.leroymerlin.it/media/140411/.jpg?width=650&height=650&format=jpg&quality=80&fit=bounds',
            'price' => 7.00
            ],
            [
            'visibility' => 1,
            'user_id' => 11,
            'name' => 'Temaki n1',
            'description' => 'Typical sushi dish. 1 cone',
            'cover' => 'https://www.shinto.it/wp-content/uploads/2017/02/handrolls-tempura-ebi-temaki-1.jpg',
            'price' => 10.00
            ],
            [
            'visibility' => 1,
            'user_id' => 11,
            'name' => 'Temaki n2',
            'description' => 'Typical sushi dish. 1 cone',
            'cover' => 'https://www.irorisushiathome.it/wp-content/uploads/2020/08/temaki_spicy_tuna8.jpg',
            'price' => 10.00
            ],
            [
            'visibility' => 1,
            'user_id' => 11,
            'name' => 'Bottle of water small',
            'description' => 'Fresh small bottle of water',
            'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR93H4EpqHcrtTL8erIjmuEJIRlWuy_aR3xgg&usqp=CAU',
            'price' => 1.00
            ],
            [
            'visibility' => 1,
            'user_id' => 11,
            'name' => 'Bottle of water big',
            'description' => 'Fresh big bottle of water',
            'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR93H4EpqHcrtTL8erIjmuEJIRlWuy_aR3xgg&usqp=CAU',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 11,
            'name' => 'Bottle of coke small',
            'description' => 'Fresh small bottle of coke',
            'cover' => 'https://m.media-amazon.com/images/I/81GsS1XFEZL._AC_SX522_.jpg',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 11,
            'name' => 'Bottle of coke big',
            'description' => 'Fresh big bottle of coke',
            'cover' => 'https://m.media-amazon.com/images/I/81GsS1XFEZL._AC_SX522_.jpg',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 11,
            'name' => 'Bottle of coke zero small',
            'description' => 'Fresh small bottle of coke zero',
            'cover' => 'https://i5.walmartimages.com/asr/b92c906c-40f0-4bb5-bc66-08f1d525043f.c9cda842cebc2df2c9eeeb7c349171ad.jpeg',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 11,
            'name' => 'Bottle of coke zero big',
            'description' => 'Fresh big bottle of coke zero',
            'cover' => 'https://i5.walmartimages.com/asr/b92c906c-40f0-4bb5-bc66-08f1d525043f.c9cda842cebc2df2c9eeeb7c349171ad.jpeg',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 11,
            'name' => 'Bottle of sprite small',
            'description' => 'Fresh small bottle of sprite',
            'cover' => 'https://images.heb.com/is/image/HEBGrocery/000145627',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 11,
            'name' => 'Bottle of sprite big',
            'description' => 'Fresh big bottle of sprite',
            'cover' => 'https://images.heb.com/is/image/HEBGrocery/000145627',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 12,
            'name' => 'Huramaki n1',
            'description' => 'Typical sushi dish. 6 pieces',
            'cover' => 'https://www.cucchiaio.it/content/cucchiaio/it/ricette/2011/09/ricetta-uramaki-gamberi-avocado/jcr:content/header-par/image_single.img10.jpg/1466425275386.jpg',
            'price' => 5.00
            ],
            [
            'visibility' => 1,
            'user_id' => 12,
            'name' => 'Huramaki n2',
            'description' => 'Typical sushi dish. 6 pieces',
            'cover' => 'https://yumyumfood.it/wp-content/uploads/2020/08/uramaki-chips-roll.jpg',
            'price' => 5.00
            ],
            [
            'visibility' => 1,
            'user_id' => 12,
            'name' => 'Huramaki n3',
            'description' => 'Typical sushi dish. 6 pieces',
            'cover' => 'https://www.miyosushi.it/wp-content/uploads/2019/08/113.png',
            'price' => 5.00
            ],
            [
            'visibility' => 1,
            'user_id' => 12,
            'name' => 'Hosomaki n1',
            'description' => 'Typical sushi dish. 6 pieces',
            'cover' => 'https://www.tribugolosa.com/media/hosomaki_crop.jpg/rh/hosomaki.jpg',
            'price' => 5.00
            ],
            [
            'visibility' => 1,
            'user_id' => 12,
            'name' => 'Hosomaki n2',
            'description' => 'Typical sushi dish. 6 pieces',
            'cover' => 'https://www.gustissimo.it/articoli/ricette/ricette-piatti-unici/hosomaki.jpg',
            'price' => 5.00
            ],
            [
            'visibility' => 1,
            'user_id' => 12,
            'name' => 'Hosomaki n3',
            'description' => 'Typical sushi dish. 6 pieces',
            'cover' => 'https://www.tribugolosa.com/uploads/media/hosomaki-vegetariano_c.jpg?1381527854',
            'price' => 5.00
            ],
            [
            'visibility' => 1,
            'user_id' => 12,
            'name' => 'Nighiri n1',
            'description' => 'Typical sushi dish. 6 pieces',
            'cover' => 'https://media-cdn.tripadvisor.com/media/photo-s/11/ab/af/87/nighiri-salmone.jpg',
            'price' => 7.00
            ],
            [
            'visibility' => 1,
            'user_id' => 12,
            'name' => 'Nighiri n2',
            'description' => 'Typical sushi dish. 6 pieces',
            'cover' => 'https://media.leroymerlin.it/media/140411/.jpg?width=650&height=650&format=jpg&quality=80&fit=bounds',
            'price' => 7.00
            ],
            [
            'visibility' => 1,
            'user_id' => 12,
            'name' => 'Temaki n1',
            'description' => 'Typical sushi dish. 1 cone',
            'cover' => 'https://www.shinto.it/wp-content/uploads/2017/02/handrolls-tempura-ebi-temaki-1.jpg',
            'price' => 10.00
            ],
            [
            'visibility' => 1,
            'user_id' => 12,
            'name' => 'Temaki n2',
            'description' => 'Typical sushi dish. 1 cone',
            'cover' => 'https://www.irorisushiathome.it/wp-content/uploads/2020/08/temaki_spicy_tuna8.jpg',
            'price' => 10.00
            ],
            [
            'visibility' => 1,
            'user_id' => 12,
            'name' => 'Poke bowl n1 small',
            'description' => 'Typical asian dish. Small bowl',
            'cover' => 'https://static.mymenu.it/multimedia/img/eatery/767/poke.jpg',
            'price' => 5.00
            ],
            [
            'visibility' => 1,
            'user_id' => 12,
            'name' => 'Poke bowl n1 big',
            'description' => 'Typical asian dish. Big bowl',
            'cover' => 'https://static.mymenu.it/multimedia/img/eatery/767/poke.jpg',
            'price' => 8.00
            ],
            [
            'visibility' => 1,
            'user_id' => 12,
            'name' => 'Poke bowl n2 small',
            'description' => 'Typical asian dish. Small bowl',
            'cover' => 'https://bassano.pokesalsa.it/wp-content/uploads/2021/04/poke-salsa-img-poke-large-1.jpg',
            'price' => 5.00
            ],
            [
            'visibility' => 1,
            'user_id' => 12,
            'name' => 'Poke bowl n2 big',
            'description' => 'Typical asian dish. Big bowl',
            'cover' => 'https://bassano.pokesalsa.it/wp-content/uploads/2021/04/poke-salsa-img-poke-large-1.jpg',
            'price' => 8.00
            ],
            [
            'visibility' => 1,
            'user_id' => 12,
            'name' => 'Poke bowl n3 small',
            'description' => 'Typical asian dish. Small bowl',
            'cover' => 'https://blog.giallozafferano.it/cookinsis/wp-content/uploads/2020/04/WhatsApp-Image-2020-04-29-at-12.43.46.jpeg',
            'price' => 5.00
            ],
            [
            'visibility' => 1,
            'user_id' => 12,
            'name' => 'Poke bowl n3 big',
            'description' => 'Typical asian dish. Big bowl',
            'cover' => 'https://blog.giallozafferano.it/cookinsis/wp-content/uploads/2020/04/WhatsApp-Image-2020-04-29-at-12.43.46.jpeg',
            'price' => 8.00
            ],
            [
            'visibility' => 1,
            'user_id' => 12,
            'name' => 'Poke bowl n4 small',
            'description' => 'Typical asian dish. Small bowl',
            'cover' => 'https://www.cucchiaio.it/content/cucchiaio/it/ricette/2019/12/poke-bowl-con-salmon--avocado-ribes-rosso-riso-basmati-e-spinacini/jcr:content/imagePreview.img10.jpg/1609081645324.jpg',
            'price' => 5.00
            ],
            [
            'visibility' => 1,
            'user_id' => 12,
            'name' => 'Poke bowl n4 big',
            'description' => 'Typical asian dish. Big bowl',
            'cover' => 'https://www.cucchiaio.it/content/cucchiaio/it/ricette/2019/12/poke-bowl-con-salmon--avocado-ribes-rosso-riso-basmati-e-spinacini/jcr:content/imagePreview.img10.jpg/1609081645324.jpg',
            'price' => 8.00
            ],
            [
            'visibility' => 1,
            'user_id' => 12,
            'name' => 'Bottle of water small',
            'description' => 'Fresh small bottle of water',
            'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR93H4EpqHcrtTL8erIjmuEJIRlWuy_aR3xgg&usqp=CAU',
            'price' => 1.00
            ],
            [
            'visibility' => 1,
            'user_id' => 12,
            'name' => 'Bottle of water big',
            'description' => 'Fresh big bottle of water',
            'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR93H4EpqHcrtTL8erIjmuEJIRlWuy_aR3xgg&usqp=CAU',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 12,
            'name' => 'Bottle of coke small',
            'description' => 'Fresh small bottle of coke',
            'cover' => 'https://m.media-amazon.com/images/I/81GsS1XFEZL._AC_SX522_.jpg',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 12,
            'name' => 'Bottle of coke big',
            'description' => 'Fresh big bottle of coke',
            'cover' => 'https://m.media-amazon.com/images/I/81GsS1XFEZL._AC_SX522_.jpg',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 12,
            'name' => 'Bottle of coke zero small',
            'description' => 'Fresh small bottle of coke zero',
            'cover' => 'https://i5.walmartimages.com/asr/b92c906c-40f0-4bb5-bc66-08f1d525043f.c9cda842cebc2df2c9eeeb7c349171ad.jpeg',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 12,
            'name' => 'Bottle of coke zero big',
            'description' => 'Fresh big bottle of coke zero',
            'cover' => 'https://i5.walmartimages.com/asr/b92c906c-40f0-4bb5-bc66-08f1d525043f.c9cda842cebc2df2c9eeeb7c349171ad.jpeg',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 12,
            'name' => 'Bottle of sprite small',
            'description' => 'Fresh small bottle of sprite',
            'cover' => 'https://images.heb.com/is/image/HEBGrocery/000145627',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 12,
            'name' => 'Bottle of sprite big',
            'description' => 'Fresh big bottle of sprite',
            'cover' => 'https://images.heb.com/is/image/HEBGrocery/000145627',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 13,
            'name' => 'Huramaki n1',
            'description' => 'Typical sushi dish. 6 pieces',
            'cover' => 'https://www.cucchiaio.it/content/cucchiaio/it/ricette/2011/09/ricetta-uramaki-gamberi-avocado/jcr:content/header-par/image_single.img10.jpg/1466425275386.jpg',
            'price' => 5.00
            ],
            [
            'visibility' => 1,
            'user_id' => 13,
            'name' => 'Huramaki n2',
            'description' => 'Typical sushi dish. 6 pieces',
            'cover' => 'https://yumyumfood.it/wp-content/uploads/2020/08/uramaki-chips-roll.jpg',
            'price' => 5.00
            ],
            [
            'visibility' => 1,
            'user_id' => 13,
            'name' => 'Huramaki n3',
            'description' => 'Typical sushi dish. 6 pieces',
            'cover' => 'https://www.miyosushi.it/wp-content/uploads/2019/08/113.png',
            'price' => 5.00
            ],
            [
            'visibility' => 1,
            'user_id' => 13,
            'name' => 'Hosomaki n1',
            'description' => 'Typical sushi dish. 6 pieces',
            'cover' => 'https://www.tribugolosa.com/media/hosomaki_crop.jpg/rh/hosomaki.jpg',
            'price' => 5.00
            ],
            [
            'visibility' => 1,
            'user_id' => 13,
            'name' => 'Hosomaki n2',
            'description' => 'Typical sushi dish. 6 pieces',
            'cover' => 'https://www.gustissimo.it/articoli/ricette/ricette-piatti-unici/hosomaki.jpg',
            'price' => 5.00
            ],
            [
            'visibility' => 1,
            'user_id' => 13,
            'name' => 'Hosomaki n3',
            'description' => 'Typical sushi dish. 6 pieces',
            'cover' => 'https://www.tribugolosa.com/uploads/media/hosomaki-vegetariano_c.jpg?1381527854',
            'price' => 5.00
            ],
            [
            'visibility' => 1,
            'user_id' => 13,
            'name' => 'Nighiri n1',
            'description' => 'Typical sushi dish. 6 pieces',
            'cover' => 'https://media-cdn.tripadvisor.com/media/photo-s/11/ab/af/87/nighiri-salmone.jpg',
            'price' => 7.00
            ],
            [
            'visibility' => 1,
            'user_id' => 13,
            'name' => 'Nighiri n2',
            'description' => 'Typical sushi dish. 6 pieces',
            'cover' => 'https://media.leroymerlin.it/media/140411/.jpg?width=650&height=650&format=jpg&quality=80&fit=bounds',
            'price' => 7.00
            ],
            [
            'visibility' => 1,
            'user_id' => 13,
            'name' => 'Temaki n1',
            'description' => 'Typical sushi dish. 1 cone',
            'cover' => 'https://www.shinto.it/wp-content/uploads/2017/02/handrolls-tempura-ebi-temaki-1.jpg',
            'price' => 10.00
            ],
            [
            'visibility' => 1,
            'user_id' => 13,
            'name' => 'Temaki n2',
            'description' => 'Typical sushi dish. 1 cone',
            'cover' => 'https://www.irorisushiathome.it/wp-content/uploads/2020/08/temaki_spicy_tuna8.jpg',
            'price' => 10.00
            ],
            [
            'visibility' => 1,
            'user_id' => 13,
            'name' => 'Poke bowl n1 small',
            'description' => 'Typical asian dish. Small bowl',
            'cover' => 'https://static.mymenu.it/multimedia/img/eatery/767/poke.jpg',
            'price' => 5.00
            ],
            [
            'visibility' => 1,
            'user_id' => 13,
            'name' => 'Poke bowl n1 big',
            'description' => 'Typical asian dish. Big bowl',
            'cover' => 'https://static.mymenu.it/multimedia/img/eatery/767/poke.jpg',
            'price' => 8.00
            ],
            [
            'visibility' => 1,
            'user_id' => 13,
            'name' => 'Poke bowl n2 small',
            'description' => 'Typical asian dish. Small bowl',
            'cover' => 'https://bassano.pokesalsa.it/wp-content/uploads/2021/04/poke-salsa-img-poke-large-1.jpg',
            'price' => 5.00
            ],
            [
            'visibility' => 1,
            'user_id' => 13,
            'name' => 'Poke bowl n2 big',
            'description' => 'Typical asian dish. Big bowl',
            'cover' => 'https://bassano.pokesalsa.it/wp-content/uploads/2021/04/poke-salsa-img-poke-large-1.jpg',
            'price' => 8.00
            ],
            [
            'visibility' => 1,
            'user_id' => 13,
            'name' => 'Poke bowl n3 small',
            'description' => 'Typical asian dish. Small bowl',
            'cover' => 'https://blog.giallozafferano.it/cookinsis/wp-content/uploads/2020/04/WhatsApp-Image-2020-04-29-at-12.43.46.jpeg',
            'price' => 5.00
            ],
            [
            'visibility' => 1,
            'user_id' => 13,
            'name' => 'Poke bowl n3 big',
            'description' => 'Typical asian dish. Big bowl',
            'cover' => 'https://blog.giallozafferano.it/cookinsis/wp-content/uploads/2020/04/WhatsApp-Image-2020-04-29-at-12.43.46.jpeg',
            'price' => 8.00
            ],
            [
            'visibility' => 1,
            'user_id' => 13,
            'name' => 'Poke bowl n4 small',
            'description' => 'Typical asian dish. Small bowl',
            'cover' => 'https://www.cucchiaio.it/content/cucchiaio/it/ricette/2019/12/poke-bowl-con-salmon--avocado-ribes-rosso-riso-basmati-e-spinacini/jcr:content/imagePreview.img10.jpg/1609081645324.jpg',
            'price' => 5.00
            ],
            [
            'visibility' => 1,
            'user_id' => 13,
            'name' => 'Poke bowl n4 big',
            'description' => 'Typical asian dish. Big bowl',
            'cover' => 'https://www.cucchiaio.it/content/cucchiaio/it/ricette/2019/12/poke-bowl-con-salmon--avocado-ribes-rosso-riso-basmati-e-spinacini/jcr:content/imagePreview.img10.jpg/1609081645324.jpg',
            'price' => 8.00
            ],
            [
            'visibility' => 1,
            'user_id' => 13,
            'name' => 'Bottle of water small',
            'description' => 'Fresh small bottle of water',
            'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR93H4EpqHcrtTL8erIjmuEJIRlWuy_aR3xgg&usqp=CAU',
            'price' => 1.00
            ],
            [
            'visibility' => 1,
            'user_id' => 13,
            'name' => 'Bottle of water big',
            'description' => 'Fresh big bottle of water',
            'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR93H4EpqHcrtTL8erIjmuEJIRlWuy_aR3xgg&usqp=CAU',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 13,
            'name' => 'Bottle of coke small',
            'description' => 'Fresh small bottle of coke',
            'cover' => 'https://m.media-amazon.com/images/I/81GsS1XFEZL._AC_SX522_.jpg',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 13,
            'name' => 'Bottle of coke big',
            'description' => 'Fresh big bottle of coke',
            'cover' => 'https://m.media-amazon.com/images/I/81GsS1XFEZL._AC_SX522_.jpg',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 13,
            'name' => 'Bottle of coke zero small',
            'description' => 'Fresh small bottle of coke zero',
            'cover' => 'https://i5.walmartimages.com/asr/b92c906c-40f0-4bb5-bc66-08f1d525043f.c9cda842cebc2df2c9eeeb7c349171ad.jpeg',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 13,
            'name' => 'Bottle of coke zero big',
            'description' => 'Fresh big bottle of coke zero',
            'cover' => 'https://i5.walmartimages.com/asr/b92c906c-40f0-4bb5-bc66-08f1d525043f.c9cda842cebc2df2c9eeeb7c349171ad.jpeg',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 13,
            'name' => 'Bottle of sprite small',
            'description' => 'Fresh small bottle of sprite',
            'cover' => 'https://images.heb.com/is/image/HEBGrocery/000145627',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 13,
            'name' => 'Bottle of sprite big',
            'description' => 'Fresh big bottle of sprite',
            'cover' => 'https://images.heb.com/is/image/HEBGrocery/000145627',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 14,
            'name' => 'Huramaki n1',
            'description' => 'Typical sushi dish. 6 pieces',
            'cover' => 'https://www.cucchiaio.it/content/cucchiaio/it/ricette/2011/09/ricetta-uramaki-gamberi-avocado/jcr:content/header-par/image_single.img10.jpg/1466425275386.jpg',
            'price' => 5.00
            ],
            [
            'visibility' => 1,
            'user_id' => 14,
            'name' => 'Huramaki n2',
            'description' => 'Typical sushi dish. 6 pieces',
            'cover' => 'https://yumyumfood.it/wp-content/uploads/2020/08/uramaki-chips-roll.jpg',
            'price' => 5.00
            ],
            [
            'visibility' => 1,
            'user_id' => 14,
            'name' => 'Huramaki n3',
            'description' => 'Typical sushi dish. 6 pieces',
            'cover' => 'https://www.miyosushi.it/wp-content/uploads/2019/08/113.png',
            'price' => 5.00
            ],
            [
            'visibility' => 1,
            'user_id' => 14,
            'name' => 'Hosomaki n1',
            'description' => 'Typical sushi dish. 6 pieces',
            'cover' => 'https://www.tribugolosa.com/media/hosomaki_crop.jpg/rh/hosomaki.jpg',
            'price' => 5.00
            ],
            [
            'visibility' => 1,
            'user_id' => 14,
            'name' => 'Hosomaki n2',
            'description' => 'Typical sushi dish. 6 pieces',
            'cover' => 'https://www.gustissimo.it/articoli/ricette/ricette-piatti-unici/hosomaki.jpg',
            'price' => 5.00
            ],
            [
            'visibility' => 1,
            'user_id' => 14,
            'name' => 'Hosomaki n3',
            'description' => 'Typical sushi dish. 6 pieces',
            'cover' => 'https://www.tribugolosa.com/uploads/media/hosomaki-vegetariano_c.jpg?1381527854',
            'price' => 5.00
            ],
            [
            'visibility' => 1,
            'user_id' => 14,
            'name' => 'Nighiri n1',
            'description' => 'Typical sushi dish. 6 pieces',
            'cover' => 'https://media-cdn.tripadvisor.com/media/photo-s/11/ab/af/87/nighiri-salmone.jpg',
            'price' => 7.00
            ],
            [
            'visibility' => 1,
            'user_id' => 14,
            'name' => 'Nighiri n2',
            'description' => 'Typical sushi dish. 6 pieces',
            'cover' => 'https://media.leroymerlin.it/media/140411/.jpg?width=650&height=650&format=jpg&quality=80&fit=bounds',
            'price' => 7.00
            ],
            [
            'visibility' => 1,
            'user_id' => 14,
            'name' => 'Temaki n1',
            'description' => 'Typical sushi dish. 1 cone',
            'cover' => 'https://www.shinto.it/wp-content/uploads/2017/02/handrolls-tempura-ebi-temaki-1.jpg',
            'price' => 10.00
            ],
            [
            'visibility' => 1,
            'user_id' => 14,
            'name' => 'Temaki n2',
            'description' => 'Typical sushi dish. 1 cone',
            'cover' => 'https://www.irorisushiathome.it/wp-content/uploads/2020/08/temaki_spicy_tuna8.jpg',
            'price' => 10.00
            ],
            [
            'visibility' => 1,
            'user_id' => 14,
            'name' => 'Poke bowl n1 small',
            'description' => 'Typical asian dish. Small bowl',
            'cover' => 'https://static.mymenu.it/multimedia/img/eatery/767/poke.jpg',
            'price' => 5.00
            ],
            [
            'visibility' => 1,
            'user_id' => 14,
            'name' => 'Poke bowl n1 big',
            'description' => 'Typical asian dish. Big bowl',
            'cover' => 'https://static.mymenu.it/multimedia/img/eatery/767/poke.jpg',
            'price' => 8.00
            ],
            [
            'visibility' => 1,
            'user_id' => 14,
            'name' => 'Poke bowl n2 small',
            'description' => 'Typical asian dish. Small bowl',
            'cover' => 'https://bassano.pokesalsa.it/wp-content/uploads/2021/04/poke-salsa-img-poke-large-1.jpg',
            'price' => 5.00
            ],
            [
            'visibility' => 1,
            'user_id' => 14,
            'name' => 'Poke bowl n2 big',
            'description' => 'Typical asian dish. Big bowl',
            'cover' => 'https://bassano.pokesalsa.it/wp-content/uploads/2021/04/poke-salsa-img-poke-large-1.jpg',
            'price' => 8.00
            ],
            [
            'visibility' => 1,
            'user_id' => 14,
            'name' => 'Poke bowl n3 small',
            'description' => 'Typical asian dish. Small bowl',
            'cover' => 'https://blog.giallozafferano.it/cookinsis/wp-content/uploads/2020/04/WhatsApp-Image-2020-04-29-at-12.43.46.jpeg',
            'price' => 5.00
            ],
            [
            'visibility' => 1,
            'user_id' => 14,
            'name' => 'Poke bowl n3 big',
            'description' => 'Typical asian dish. Big bowl',
            'cover' => 'https://blog.giallozafferano.it/cookinsis/wp-content/uploads/2020/04/WhatsApp-Image-2020-04-29-at-12.43.46.jpeg',
            'price' => 8.00
            ],
            [
            'visibility' => 1,
            'user_id' => 14,
            'name' => 'Poke bowl n4 small',
            'description' => 'Typical asian dish. Small bowl',
            'cover' => 'https://www.cucchiaio.it/content/cucchiaio/it/ricette/2019/12/poke-bowl-con-salmon--avocado-ribes-rosso-riso-basmati-e-spinacini/jcr:content/imagePreview.img10.jpg/1609081645324.jpg',
            'price' => 5.00
            ],
            [
            'visibility' => 1,
            'user_id' => 14,
            'name' => 'Poke bowl n4 big',
            'description' => 'Typical asian dish. Big bowl',
            'cover' => 'https://www.cucchiaio.it/content/cucchiaio/it/ricette/2019/12/poke-bowl-con-salmon--avocado-ribes-rosso-riso-basmati-e-spinacini/jcr:content/imagePreview.img10.jpg/1609081645324.jpg',
            'price' => 8.00
            ],
            [
            'visibility' => 1,
            'user_id' => 14,
            'name' => 'Bottle of water small',
            'description' => 'Fresh small bottle of water',
            'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR93H4EpqHcrtTL8erIjmuEJIRlWuy_aR3xgg&usqp=CAU',
            'price' => 1.00
            ],
            [
            'visibility' => 1,
            'user_id' => 14,
            'name' => 'Bottle of water big',
            'description' => 'Fresh big bottle of water',
            'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR93H4EpqHcrtTL8erIjmuEJIRlWuy_aR3xgg&usqp=CAU',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 14,
            'name' => 'Bottle of coke small',
            'description' => 'Fresh small bottle of coke',
            'cover' => 'https://m.media-amazon.com/images/I/81GsS1XFEZL._AC_SX522_.jpg',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 14,
            'name' => 'Bottle of coke big',
            'description' => 'Fresh big bottle of coke',
            'cover' => 'https://m.media-amazon.com/images/I/81GsS1XFEZL._AC_SX522_.jpg',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 14,
            'name' => 'Bottle of coke zero small',
            'description' => 'Fresh small bottle of coke zero',
            'cover' => 'https://i5.walmartimages.com/asr/b92c906c-40f0-4bb5-bc66-08f1d525043f.c9cda842cebc2df2c9eeeb7c349171ad.jpeg',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 14,
            'name' => 'Bottle of coke zero big',
            'description' => 'Fresh big bottle of coke zero',
            'cover' => 'https://i5.walmartimages.com/asr/b92c906c-40f0-4bb5-bc66-08f1d525043f.c9cda842cebc2df2c9eeeb7c349171ad.jpeg',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 14,
            'name' => 'Bottle of sprite small',
            'description' => 'Fresh small bottle of sprite',
            'cover' => 'https://images.heb.com/is/image/HEBGrocery/000145627',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 14,
            'name' => 'Bottle of sprite big',
            'description' => 'Fresh big bottle of sprite',
            'cover' => 'https://images.heb.com/is/image/HEBGrocery/000145627',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 15,
            'name' => 'Italian andwich',
            'description' => 'Delicious sandwitch with italian ingredients',
            'cover' => 'https://blog.giallozafferano.it/ricettedilibellula/wp-content/uploads/2018/11/california-club-sandwich.jpg',
            'price' => 5.00
            ],
            [
            'visibility' => 1,
            'user_id' => 15,
            'name' => 'French andwich',
            'description' => 'Delicious sandwitch with french ingredients',
            'cover' => 'https://www.ricettedigusto.info/wp-content/uploads/2013/12/club-sandwich-classico-1200x898.jpg',
            'price' => 7.00
            ],
            [
            'visibility' => 1,
            'user_id' => 15,
            'name' => 'American andwich',
            'description' => 'Delicious sandwitch with american ingredients',
            'cover' => 'https://winedharma.com/wine-dharma/uploads/2020/10/1958-club-sandwich-ricetta-originale-come-fare-il-club-sandwich-perfetto.jpg',
            'price' => 3.50
            ],
            [
            'visibility' => 1,
            'user_id' => 15,
            'name' => "Gino's panino",
            'description' => 'Delicious panino with mortadella ham and cheese',
            'cover' => 'https://d15j9y5wlusr11.cloudfront.net/filer_public_thumbnails/filer_public/ef/ab/efab9132-a8cb-47e2-9d6f-b3c2f6204d7b/tmptmpkiai1no3.jpg__600x600_q85_ALIAS-large_crop-smart_subsampling-2.jpg',
            'price' => 3.50
            ],
            [
            'visibility' => 1,
            'user_id' => 15,
            'name' => "Maria's panino",
            'description' => 'Delicious panino with ham and fries',
            'cover' => 'https://www.briviosalumi.it/wp-content/uploads/2020/12/panino-con-prosciutto-e-peperone-scaled-e1606816021907.jpg',
            'price' => 5.50
            ],
            [
            'visibility' => 1,
            'user_id' => 15,
            'name' => 'Hamburger n1',
            'description' => 'Delicious american hamburger',
            'cover' => 'https://www.buttalapasta.it/wp-content/uploads/2016/01/hamburger-di-carne-americano.jpg',
            'price' => 5.50
            ],
            [
            'visibility' => 1,
            'user_id' => 15,
            'name' => 'Hamburger n2',
            'description' => 'Delicious american hamburger',
            'cover' => 'https://www.negroni.com/sites/negroni.com/files/styles/scale__1440_x_1440_/public/hamburger_thumb.jpg?itok=yAaXpDm3',
            'price' => 6.00
            ],
            [
            'visibility' => 1,
            'user_id' => 15,
            'name' => 'Hamburger n3',
            'description' => 'Delicious american hamburger',
            'cover' => 'https://www.mrdoyle.it/wp-content/uploads/2019/01/AdobeStock_209775207-scaled-e1575394210352.jpeg',
            'price' => 4.00
            ],
            [
            'visibility' => 1,
            'user_id' => 15,
            'name' => 'Hamburger n4',
            'description' => 'Delicious american hamburger',
            'cover' => 'https://www.aldi.it/fileadmin/_processed_/0/6/csm_Hamburger_05922a0848.jpg',
            'price' => 7.00
            ],
            [
            'visibility' => 1,
            'user_id' => 15,
            'name' => 'Hamburger n5',
            'description' => 'Delicious american hamburger',
            'cover' => 'https://www.sfizioso.it/wp-content/uploads/2019/05/ricetta-hamburger-di-vitello-1024x576.jpg',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 15,
            'name' => 'Bottle of water small',
            'description' => 'Fresh small bottle of water',
            'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR93H4EpqHcrtTL8erIjmuEJIRlWuy_aR3xgg&usqp=CAU',
            'price' => 1.00
            ],
            [
            'visibility' => 1,
            'user_id' => 15,
            'name' => 'Bottle of water big',
            'description' => 'Fresh big bottle of water',
            'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR93H4EpqHcrtTL8erIjmuEJIRlWuy_aR3xgg&usqp=CAU',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 15,
            'name' => 'Bottle of coke small',
            'description' => 'Fresh small bottle of coke',
            'cover' => 'https://m.media-amazon.com/images/I/81GsS1XFEZL._AC_SX522_.jpg',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 15,
            'name' => 'Bottle of coke big',
            'description' => 'Fresh big bottle of coke',
            'cover' => 'https://m.media-amazon.com/images/I/81GsS1XFEZL._AC_SX522_.jpg',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 15,
            'name' => 'Bottle of coke zero small',
            'description' => 'Fresh small bottle of coke zero',
            'cover' => 'https://i5.walmartimages.com/asr/b92c906c-40f0-4bb5-bc66-08f1d525043f.c9cda842cebc2df2c9eeeb7c349171ad.jpeg',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 15,
            'name' => 'Bottle of coke zero big',
            'description' => 'Fresh big bottle of coke zero',
            'cover' => 'https://i5.walmartimages.com/asr/b92c906c-40f0-4bb5-bc66-08f1d525043f.c9cda842cebc2df2c9eeeb7c349171ad.jpeg',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 15,
            'name' => 'Bottle of sprite small',
            'description' => 'Fresh small bottle of sprite',
            'cover' => 'https://images.heb.com/is/image/HEBGrocery/000145627',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 15,
            'name' => 'Bottle of sprite big',
            'description' => 'Fresh big bottle of sprite',
            'cover' => 'https://images.heb.com/is/image/HEBGrocery/000145627',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 16,
            'name' => 'Italian andwich',
            'description' => 'Delicious sandwitch with italian ingredients',
            'cover' => 'https://blog.giallozafferano.it/ricettedilibellula/wp-content/uploads/2018/11/california-club-sandwich.jpg',
            'price' => 5.00
            ],
            [
            'visibility' => 1,
            'user_id' => 16,
            'name' => 'French andwich',
            'description' => 'Delicious sandwitch with french ingredients',
            'cover' => 'https://www.ricettedigusto.info/wp-content/uploads/2013/12/club-sandwich-classico-1200x898.jpg',
            'price' => 7.00
            ],
            [
            'visibility' => 1,
            'user_id' => 16,
            'name' => 'American andwich',
            'description' => 'Delicious sandwitch with american ingredients',
            'cover' => 'https://winedharma.com/wine-dharma/uploads/2020/10/1958-club-sandwich-ricetta-originale-come-fare-il-club-sandwich-perfetto.jpg',
            'price' => 3.50
            ],
            [
            'visibility' => 1,
            'user_id' => 16,
            'name' => "Gino's panino",
            'description' => 'Delicious panino with mortadella ham and cheese',
            'cover' => 'https://d15j9y5wlusr11.cloudfront.net/filer_public_thumbnails/filer_public/ef/ab/efab9132-a8cb-47e2-9d6f-b3c2f6204d7b/tmptmpkiai1no3.jpg__600x600_q85_ALIAS-large_crop-smart_subsampling-2.jpg',
            'price' => 3.50
            ],
            [
            'visibility' => 1,
            'user_id' => 16,
            'name' => "Maria's panino",
            'description' => 'Delicious panino with ham and fries',
            'cover' => 'https://www.briviosalumi.it/wp-content/uploads/2020/12/panino-con-prosciutto-e-peperone-scaled-e1606816021907.jpg',
            'price' => 5.50
            ],
            [
            'visibility' => 1,
            'user_id' => 16,
            'name' => 'Hamburger n1',
            'description' => 'Delicious american hamburger',
            'cover' => 'https://www.buttalapasta.it/wp-content/uploads/2016/01/hamburger-di-carne-americano.jpg',
            'price' => 5.50
            ],
            [
            'visibility' => 1,
            'user_id' => 16,
            'name' => 'Hamburger n2',
            'description' => 'Delicious american hamburger',
            'cover' => 'https://www.negroni.com/sites/negroni.com/files/styles/scale__1440_x_1440_/public/hamburger_thumb.jpg?itok=yAaXpDm3',
            'price' => 6.00
            ],
            [
            'visibility' => 1,
            'user_id' => 16,
            'name' => 'Hamburger n3',
            'description' => 'Delicious american hamburger',
            'cover' => 'https://www.mrdoyle.it/wp-content/uploads/2019/01/AdobeStock_209775207-scaled-e1575394210352.jpeg',
            'price' => 4.00
            ],
            [
            'visibility' => 1,
            'user_id' => 16,
            'name' => 'Hamburger n4',
            'description' => 'Delicious american hamburger',
            'cover' => 'https://www.aldi.it/fileadmin/_processed_/0/6/csm_Hamburger_05922a0848.jpg',
            'price' => 7.00
            ],
            [
            'visibility' => 1,
            'user_id' => 16,
            'name' => 'Hamburger n5',
            'description' => 'Delicious american hamburger',
            'cover' => 'https://www.sfizioso.it/wp-content/uploads/2019/05/ricetta-hamburger-di-vitello-1024x576.jpg',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 16,
            'name' => 'Bottle of water small',
            'description' => 'Fresh small bottle of water',
            'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR93H4EpqHcrtTL8erIjmuEJIRlWuy_aR3xgg&usqp=CAU',
            'price' => 1.00
            ],
            [
            'visibility' => 1,
            'user_id' => 16,
            'name' => 'Bottle of water big',
            'description' => 'Fresh big bottle of water',
            'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR93H4EpqHcrtTL8erIjmuEJIRlWuy_aR3xgg&usqp=CAU',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 16,
            'name' => 'Bottle of coke small',
            'description' => 'Fresh small bottle of coke',
            'cover' => 'https://m.media-amazon.com/images/I/81GsS1XFEZL._AC_SX522_.jpg',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 16,
            'name' => 'Bottle of coke big',
            'description' => 'Fresh big bottle of coke',
            'cover' => 'https://m.media-amazon.com/images/I/81GsS1XFEZL._AC_SX522_.jpg',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 16,
            'name' => 'Bottle of coke zero small',
            'description' => 'Fresh small bottle of coke zero',
            'cover' => 'https://i5.walmartimages.com/asr/b92c906c-40f0-4bb5-bc66-08f1d525043f.c9cda842cebc2df2c9eeeb7c349171ad.jpeg',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 16,
            'name' => 'Bottle of coke zero big',
            'description' => 'Fresh big bottle of coke zero',
            'cover' => 'https://i5.walmartimages.com/asr/b92c906c-40f0-4bb5-bc66-08f1d525043f.c9cda842cebc2df2c9eeeb7c349171ad.jpeg',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 16,
            'name' => 'Bottle of sprite small',
            'description' => 'Fresh small bottle of sprite',
            'cover' => 'https://images.heb.com/is/image/HEBGrocery/000145627',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 16,
            'name' => 'Bottle of sprite big',
            'description' => 'Fresh big bottle of sprite',
            'cover' => 'https://images.heb.com/is/image/HEBGrocery/000145627',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 17,
            'name' => 'Italian andwich',
            'description' => 'Delicious sandwitch with italian ingredients',
            'cover' => 'https://blog.giallozafferano.it/ricettedilibellula/wp-content/uploads/2018/11/california-club-sandwich.jpg',
            'price' => 5.00
            ],
            [
            'visibility' => 1,
            'user_id' => 17,
            'name' => 'French andwich',
            'description' => 'Delicious sandwitch with french ingredients',
            'cover' => 'https://www.ricettedigusto.info/wp-content/uploads/2013/12/club-sandwich-classico-1200x898.jpg',
            'price' => 7.00
            ],
            [
            'visibility' => 1,
            'user_id' => 17,
            'name' => 'American andwich',
            'description' => 'Delicious sandwitch with american ingredients',
            'cover' => 'https://winedharma.com/wine-dharma/uploads/2020/10/1958-club-sandwich-ricetta-originale-come-fare-il-club-sandwich-perfetto.jpg',
            'price' => 3.50
            ],
            [
            'visibility' => 1,
            'user_id' => 17,
            'name' => "Gino's panino",
            'description' => 'Delicious panino with mortadella ham and cheese',
            'cover' => 'https://d15j9y5wlusr11.cloudfront.net/filer_public_thumbnails/filer_public/ef/ab/efab9132-a8cb-47e2-9d6f-b3c2f6204d7b/tmptmpkiai1no3.jpg__600x600_q85_ALIAS-large_crop-smart_subsampling-2.jpg',
            'price' => 3.50
            ],
            [
            'visibility' => 1,
            'user_id' => 17,
            'name' => "Maria's panino",
            'description' => 'Delicious panino with ham and fries',
            'cover' => 'https://www.briviosalumi.it/wp-content/uploads/2020/12/panino-con-prosciutto-e-peperone-scaled-e1606816021907.jpg',
            'price' => 5.50
            ],
            [
            'visibility' => 1,
            'user_id' => 17,
            'name' => 'Hamburger n1',
            'description' => 'Delicious american hamburger',
            'cover' => 'https://www.buttalapasta.it/wp-content/uploads/2016/01/hamburger-di-carne-americano.jpg',
            'price' => 5.50
            ],
            [
            'visibility' => 1,
            'user_id' => 17,
            'name' => 'Hamburger n2',
            'description' => 'Delicious american hamburger',
            'cover' => 'https://www.negroni.com/sites/negroni.com/files/styles/scale__1440_x_1440_/public/hamburger_thumb.jpg?itok=yAaXpDm3',
            'price' => 6.00
            ],
            [
            'visibility' => 1,
            'user_id' => 17,
            'name' => 'Hamburger n3',
            'description' => 'Delicious american hamburger',
            'cover' => 'https://www.mrdoyle.it/wp-content/uploads/2019/01/AdobeStock_209775207-scaled-e1575394210352.jpeg',
            'price' => 4.00
            ],
            [
            'visibility' => 1,
            'user_id' => 17,
            'name' => 'Hamburger n4',
            'description' => 'Delicious american hamburger',
            'cover' => 'https://www.aldi.it/fileadmin/_processed_/0/6/csm_Hamburger_05922a0848.jpg',
            'price' => 7.00
            ],
            [
            'visibility' => 1,
            'user_id' => 17,
            'name' => 'Hamburger n5',
            'description' => 'Delicious american hamburger',
            'cover' => 'https://www.sfizioso.it/wp-content/uploads/2019/05/ricetta-hamburger-di-vitello-1024x576.jpg',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 17,
            'name' => 'Bottle of water small',
            'description' => 'Fresh small bottle of water',
            'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR93H4EpqHcrtTL8erIjmuEJIRlWuy_aR3xgg&usqp=CAU',
            'price' => 1.00
            ],
            [
            'visibility' => 1,
            'user_id' => 17,
            'name' => 'Bottle of water big',
            'description' => 'Fresh big bottle of water',
            'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR93H4EpqHcrtTL8erIjmuEJIRlWuy_aR3xgg&usqp=CAU',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 17,
            'name' => 'Bottle of coke small',
            'description' => 'Fresh small bottle of coke',
            'cover' => 'https://m.media-amazon.com/images/I/81GsS1XFEZL._AC_SX522_.jpg',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 17,
            'name' => 'Bottle of coke big',
            'description' => 'Fresh big bottle of coke',
            'cover' => 'https://m.media-amazon.com/images/I/81GsS1XFEZL._AC_SX522_.jpg',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 17,
            'name' => 'Bottle of coke zero small',
            'description' => 'Fresh small bottle of coke zero',
            'cover' => 'https://i5.walmartimages.com/asr/b92c906c-40f0-4bb5-bc66-08f1d525043f.c9cda842cebc2df2c9eeeb7c349171ad.jpeg',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 17,
            'name' => 'Bottle of coke zero big',
            'description' => 'Fresh big bottle of coke zero',
            'cover' => 'https://i5.walmartimages.com/asr/b92c906c-40f0-4bb5-bc66-08f1d525043f.c9cda842cebc2df2c9eeeb7c349171ad.jpeg',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 17,
            'name' => 'Bottle of sprite small',
            'description' => 'Fresh small bottle of sprite',
            'cover' => 'https://images.heb.com/is/image/HEBGrocery/000145627',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 17,
            'name' => 'Bottle of sprite big',
            'description' => 'Fresh big bottle of sprite',
            'cover' => 'https://images.heb.com/is/image/HEBGrocery/000145627',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 18,
            'name' => 'Italian andwich',
            'description' => 'Delicious sandwitch with italian ingredients',
            'cover' => 'https://blog.giallozafferano.it/ricettedilibellula/wp-content/uploads/2018/11/california-club-sandwich.jpg',
            'price' => 5.00
            ],
            [
            'visibility' => 1,
            'user_id' => 18,
            'name' => 'French andwich',
            'description' => 'Delicious sandwitch with french ingredients',
            'cover' => 'https://www.ricettedigusto.info/wp-content/uploads/2013/12/club-sandwich-classico-1200x898.jpg',
            'price' => 7.00
            ],
            [
            'visibility' => 1,
            'user_id' => 18,
            'name' => 'American andwich',
            'description' => 'Delicious sandwitch with american ingredients',
            'cover' => 'https://winedharma.com/wine-dharma/uploads/2020/10/1958-club-sandwich-ricetta-originale-come-fare-il-club-sandwich-perfetto.jpg',
            'price' => 3.50
            ],
            [
            'visibility' => 1,
            'user_id' => 18,
            'name' => "Gino's panino",
            'description' => 'Delicious panino with mortadella ham and cheese',
            'cover' => 'https://d15j9y5wlusr11.cloudfront.net/filer_public_thumbnails/filer_public/ef/ab/efab9132-a8cb-47e2-9d6f-b3c2f6204d7b/tmptmpkiai1no3.jpg__600x600_q85_ALIAS-large_crop-smart_subsampling-2.jpg',
            'price' => 3.50
            ],
            [
            'visibility' => 1,
            'user_id' => 18,
            'name' => "Maria's panino",
            'description' => 'Delicious panino with ham and fries',
            'cover' => 'https://www.briviosalumi.it/wp-content/uploads/2020/12/panino-con-prosciutto-e-peperone-scaled-e1606816021907.jpg',
            'price' => 5.50
            ],
            [
            'visibility' => 1,
            'user_id' => 18,
            'name' => 'Hamburger n1',
            'description' => 'Delicious american hamburger',
            'cover' => 'https://www.buttalapasta.it/wp-content/uploads/2016/01/hamburger-di-carne-americano.jpg',
            'price' => 5.50
            ],
            [
            'visibility' => 1,
            'user_id' => 18,
            'name' => 'Hamburger n2',
            'description' => 'Delicious american hamburger',
            'cover' => 'https://www.negroni.com/sites/negroni.com/files/styles/scale__1440_x_1440_/public/hamburger_thumb.jpg?itok=yAaXpDm3',
            'price' => 6.00
            ],
            [
            'visibility' => 1,
            'user_id' => 18,
            'name' => 'Hamburger n3',
            'description' => 'Delicious american hamburger',
            'cover' => 'https://www.mrdoyle.it/wp-content/uploads/2019/01/AdobeStock_209775207-scaled-e1575394210352.jpeg',
            'price' => 4.00
            ],
            [
            'visibility' => 1,
            'user_id' => 18,
            'name' => 'Hamburger n4',
            'description' => 'Delicious american hamburger',
            'cover' => 'https://www.aldi.it/fileadmin/_processed_/0/6/csm_Hamburger_05922a0848.jpg',
            'price' => 7.00
            ],
            [
            'visibility' => 1,
            'user_id' => 18,
            'name' => 'Hamburger n5',
            'description' => 'Delicious american hamburger',
            'cover' => 'https://www.sfizioso.it/wp-content/uploads/2019/05/ricetta-hamburger-di-vitello-1024x576.jpg',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 18,
            'name' => 'Bottle of water small',
            'description' => 'Fresh small bottle of water',
            'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR93H4EpqHcrtTL8erIjmuEJIRlWuy_aR3xgg&usqp=CAU',
            'price' => 1.00
            ],
            [
            'visibility' => 1,
            'user_id' => 18,
            'name' => 'Bottle of water big',
            'description' => 'Fresh big bottle of water',
            'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR93H4EpqHcrtTL8erIjmuEJIRlWuy_aR3xgg&usqp=CAU',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 18,
            'name' => 'Bottle of coke small',
            'description' => 'Fresh small bottle of coke',
            'cover' => 'https://m.media-amazon.com/images/I/81GsS1XFEZL._AC_SX522_.jpg',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 18,
            'name' => 'Bottle of coke big',
            'description' => 'Fresh big bottle of coke',
            'cover' => 'https://m.media-amazon.com/images/I/81GsS1XFEZL._AC_SX522_.jpg',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 18,
            'name' => 'Bottle of coke zero small',
            'description' => 'Fresh small bottle of coke zero',
            'cover' => 'https://i5.walmartimages.com/asr/b92c906c-40f0-4bb5-bc66-08f1d525043f.c9cda842cebc2df2c9eeeb7c349171ad.jpeg',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 18,
            'name' => 'Bottle of coke zero big',
            'description' => 'Fresh big bottle of coke zero',
            'cover' => 'https://i5.walmartimages.com/asr/b92c906c-40f0-4bb5-bc66-08f1d525043f.c9cda842cebc2df2c9eeeb7c349171ad.jpeg',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 18,
            'name' => 'Bottle of sprite small',
            'description' => 'Fresh small bottle of sprite',
            'cover' => 'https://images.heb.com/is/image/HEBGrocery/000145627',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 18,
            'name' => 'Bottle of sprite big',
            'description' => 'Fresh big bottle of sprite',
            'cover' => 'https://images.heb.com/is/image/HEBGrocery/000145627',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 19,
            'name' => 'Vanilla ice cream small cone',
            'description' => 'Fresh and delicious small ice cream cone',
            'cover' => 'https://images.unsplash.com/photo-1570197788417-0e82375c9371?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8dmFuaWxsYSUyMGljZSUyMGNyZWFtfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 19,
            'name' => 'Vanilla ice cream medium cone',
            'description' => 'Fresh and delicious medium ice cream cone',
            'cover' => 'https://images.unsplash.com/photo-1570197788417-0e82375c9371?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8dmFuaWxsYSUyMGljZSUyMGNyZWFtfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 19,
            'name' => 'Vanilla ice cream big cone',
            'description' => 'Fresh and delicious big ice cream cone',
            'cover' => 'https://images.unsplash.com/photo-1570197788417-0e82375c9371?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8dmFuaWxsYSUyMGljZSUyMGNyZWFtfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80',
            'price' => 4.00
            ],
            [
            'visibility' => 1,
            'user_id' => 19,
            'name' => 'Coffee ice cream small cone',
            'description' => 'Fresh and delicious small ice cream cone',
            'cover' => 'https://www.simplyrecipes.com/thmb/wjKlfxU1uYI7jQ1NCZFT-VM07FM=/735x0/__opt__aboutcom__coeus__resources__content_migration__simply_recipes__uploads__2007__04__coffee-ice-cream-vertical-00dc174a766a4ff79f443e516e11fcb7.jpg',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 19,
            'name' => 'Coffee ice cream medium cone',
            'description' => 'Fresh and delicious medium ice cream cone',
            'cover' => 'https://www.simplyrecipes.com/thmb/wjKlfxU1uYI7jQ1NCZFT-VM07FM=/735x0/__opt__aboutcom__coeus__resources__content_migration__simply_recipes__uploads__2007__04__coffee-ice-cream-vertical-00dc174a766a4ff79f443e516e11fcb7.jpg',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 19,
            'name' => 'Coffee ice cream big cone',
            'description' => 'Fresh and delicious big ice cream cone',
            'cover' => 'https://www.simplyrecipes.com/thmb/wjKlfxU1uYI7jQ1NCZFT-VM07FM=/735x0/__opt__aboutcom__coeus__resources__content_migration__simply_recipes__uploads__2007__04__coffee-ice-cream-vertical-00dc174a766a4ff79f443e516e11fcb7.jpg',
            'price' => 4.00
            ],
            [
            'visibility' => 1,
            'user_id' => 19,
            'name' => 'Strawberry ice cream small cone',
            'description' => 'Fresh and delicious small ice cream cone',
            'cover' => 'https://zestysouthindiankitchen.com/wp-content/uploads/2014/04/strawberry-ice-cream-1.jpg',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 19,
            'name' => 'Strawberry ice cream medium cone',
            'description' => 'Fresh and delicious medium ice cream cone',
            'cover' => 'https://zestysouthindiankitchen.com/wp-content/uploads/2014/04/strawberry-ice-cream-1.jpg',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 19,
            'name' => 'Strawberry ice cream big cone',
            'description' => 'Fresh and delicious big ice cream cone',
            'cover' => 'https://zestysouthindiankitchen.com/wp-content/uploads/2014/04/strawberry-ice-cream-1.jpg',
            'price' => 4.00
            ],
            [
            'visibility' => 1,
            'user_id' => 19,
            'name' => 'Stracciatella ice cream small cone',
            'description' => 'Fresh and delicious small ice cream cone',
            'cover' => 'https://t3.ftcdn.net/jpg/01/71/07/30/360_F_171073025_zWchtcfnCfay2CnnDoyDgRffk0imkwNZ.jpg',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 19,
            'name' => 'Stracciatella ice cream medium cone',
            'description' => 'Fresh and delicious medium ice cream cone',
            'cover' => 'https://t3.ftcdn.net/jpg/01/71/07/30/360_F_171073025_zWchtcfnCfay2CnnDoyDgRffk0imkwNZ.jpg',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 19,
            'name' => 'Stracciatella ice cream big cone',
            'description' => 'Fresh and delicious big ice cream cone',
            'cover' => 'https://t3.ftcdn.net/jpg/01/71/07/30/360_F_171073025_zWchtcfnCfay2CnnDoyDgRffk0imkwNZ.jpg',
            'price' => 4.00
            ],
            [
            'visibility' => 1,
            'user_id' => 19,
            'name' => 'Empty croissan',
            'description' => 'Delicious empty croissant',
            'cover' => 'https://image.freepik.com/free-photo/sliced-empty-croissant-croissant-halves-with-dough-texture-hard-light-white-background_207126-7194.jpg',
            'price' => 1.50
            ],
            [
            'visibility' => 1,
            'user_id' => 19,
            'name' => 'Chocolate croissan',
            'description' => 'Delicious chocolate croissant',
            'cover' => 'https://www.thecookierookie.com/wp-content/uploads/2017/05/sheet-pan-chocolate-croissants-3-of-10-1.jpg',
            'price' => 1.50
            ],
            [
            'visibility' => 1,
            'user_id' => 19,
            'name' => 'Strawberry croissan',
            'description' => 'Delicious strawberry croissant',
            'cover' => 'http://www.intravelfood.com/wp-content/uploads/2021/02/Valentines-Week-Breakfast-2-Way-Strawberry-Croissants-2-scaled.jpg',
            'price' => 1.50
            ],
            [
            'visibility' => 1,
            'user_id' => 19,
            'name' => 'Peach croissan',
            'description' => 'Delicious peach croissant',
            'cover' => 'https://bitedelite.pl/wp-content/uploads/2015/02/BiteDelite-paryzanka-9506.jpg',
            'price' => 1.50
            ],        
            [
            'visibility' => 1,
            'user_id' => 19,
            'name' => 'Espresso coffee',
            'description' => 'Hot italian espresso coffee',
            'cover' => 'https://media.istockphoto.com/photos/coffee-cup-picture-id1126871442?k=20&m=1126871442&s=612x612&w=0&h=WSNR3OvXcFwiRNsL6BVgvPD4cmJzDq686vCbo_YTH5I=',
            'price' => 1.00
            ],
            [
            'visibility' => 1,
            'user_id' => 19,
            'name' => 'Cappuccino coffee',
            'description' => 'Hot italian cappuccino coffee',
            'cover' => 'https://previews.123rf.com/images/chamillewhite/chamillewhite1201/chamillewhite120100049/12120947-arte-cappuccino-caff%C3%A8-in-grani.jpg',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 19,
            'name' => 'Iced coffee',
            'description' => 'Fresh iced coffee',
            'cover' => 'https://onesweetappetite.com/wp-content/uploads/2020/08/Caramel-Iced-Coffee-5.jpg',
            'price' => 3.50
            ],
            [
            'visibility' => 1,
            'user_id' => 19,
            'name' => 'Iced coffee',
            'description' => 'Fresh iced coffee',
            'cover' => 'https://onesweetappetite.com/wp-content/uploads/2020/08/Caramel-Iced-Coffee-5.jpg',
            'price' => 3.50
            ], 
            [
            'visibility' => 1,
            'user_id' => 19,
            'name' => 'Bottle of water small',
            'description' => 'Fresh small bottle of water',
            'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR93H4EpqHcrtTL8erIjmuEJIRlWuy_aR3xgg&usqp=CAU',
            'price' => 1.00
            ],
            [
            'visibility' => 1,
            'user_id' => 19,
            'name' => 'Bottle of water big',
            'description' => 'Fresh big bottle of water',
            'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR93H4EpqHcrtTL8erIjmuEJIRlWuy_aR3xgg&usqp=CAU',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 20,
            'name' => 'Vanilla ice cream small cone',
            'description' => 'Fresh and delicious small ice cream cone',
            'cover' => 'https://images.unsplash.com/photo-1570197788417-0e82375c9371?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8dmFuaWxsYSUyMGljZSUyMGNyZWFtfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 20,
            'name' => 'Vanilla ice cream medium cone',
            'description' => 'Fresh and delicious medium ice cream cone',
            'cover' => 'https://images.unsplash.com/photo-1570197788417-0e82375c9371?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8dmFuaWxsYSUyMGljZSUyMGNyZWFtfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 20,
            'name' => 'Vanilla ice cream big cone',
            'description' => 'Fresh and delicious big ice cream cone',
            'cover' => 'https://images.unsplash.com/photo-1570197788417-0e82375c9371?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8dmFuaWxsYSUyMGljZSUyMGNyZWFtfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80',
            'price' => 4.00
            ],
            [
            'visibility' => 1,
            'user_id' => 20,
            'name' => 'Coffee ice cream small cone',
            'description' => 'Fresh and delicious small ice cream cone',
            'cover' => 'https://www.simplyrecipes.com/thmb/wjKlfxU1uYI7jQ1NCZFT-VM07FM=/735x0/__opt__aboutcom__coeus__resources__content_migration__simply_recipes__uploads__2007__04__coffee-ice-cream-vertical-00dc174a766a4ff79f443e516e11fcb7.jpg',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 20,
            'name' => 'Coffee ice cream medium cone',
            'description' => 'Fresh and delicious medium ice cream cone',
            'cover' => 'https://www.simplyrecipes.com/thmb/wjKlfxU1uYI7jQ1NCZFT-VM07FM=/735x0/__opt__aboutcom__coeus__resources__content_migration__simply_recipes__uploads__2007__04__coffee-ice-cream-vertical-00dc174a766a4ff79f443e516e11fcb7.jpg',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 20,
            'name' => 'Coffee ice cream big cone',
            'description' => 'Fresh and delicious big ice cream cone',
            'cover' => 'https://www.simplyrecipes.com/thmb/wjKlfxU1uYI7jQ1NCZFT-VM07FM=/735x0/__opt__aboutcom__coeus__resources__content_migration__simply_recipes__uploads__2007__04__coffee-ice-cream-vertical-00dc174a766a4ff79f443e516e11fcb7.jpg',
            'price' => 4.00
            ],
            [
            'visibility' => 1,
            'user_id' => 20,
            'name' => 'Strawberry ice cream small cone',
            'description' => 'Fresh and delicious small ice cream cone',
            'cover' => 'https://zestysouthindiankitchen.com/wp-content/uploads/2014/04/strawberry-ice-cream-1.jpg',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 20,
            'name' => 'Strawberry ice cream medium cone',
            'description' => 'Fresh and delicious medium ice cream cone',
            'cover' => 'https://zestysouthindiankitchen.com/wp-content/uploads/2014/04/strawberry-ice-cream-1.jpg',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 20,
            'name' => 'Strawberry ice cream big cone',
            'description' => 'Fresh and delicious big ice cream cone',
            'cover' => 'https://zestysouthindiankitchen.com/wp-content/uploads/2014/04/strawberry-ice-cream-1.jpg',
            'price' => 4.00
            ],
            [
            'visibility' => 1,
            'user_id' => 20,
            'name' => 'Stracciatella ice cream small cone',
            'description' => 'Fresh and delicious small ice cream cone',
            'cover' => 'https://t3.ftcdn.net/jpg/01/71/07/30/360_F_171073025_zWchtcfnCfay2CnnDoyDgRffk0imkwNZ.jpg',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 20,
            'name' => 'Stracciatella ice cream medium cone',
            'description' => 'Fresh and delicious medium ice cream cone',
            'cover' => 'https://t3.ftcdn.net/jpg/01/71/07/30/360_F_171073025_zWchtcfnCfay2CnnDoyDgRffk0imkwNZ.jpg',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 20,
            'name' => 'Stracciatella ice cream big cone',
            'description' => 'Fresh and delicious big ice cream cone',
            'cover' => 'https://t3.ftcdn.net/jpg/01/71/07/30/360_F_171073025_zWchtcfnCfay2CnnDoyDgRffk0imkwNZ.jpg',
            'price' => 4.00
            ],
            [
            'visibility' => 1,
            'user_id' => 20,
            'name' => 'Empty croissan',
            'description' => 'Delicious empty croissant',
            'cover' => 'https://image.freepik.com/free-photo/sliced-empty-croissant-croissant-halves-with-dough-texture-hard-light-white-background_207126-7194.jpg',
            'price' => 1.50
            ],
            [
            'visibility' => 1,
            'user_id' => 20,
            'name' => 'Chocolate croissan',
            'description' => 'Delicious chocolate croissant',
            'cover' => 'https://www.thecookierookie.com/wp-content/uploads/2017/05/sheet-pan-chocolate-croissants-3-of-10-1.jpg',
            'price' => 1.50
            ],
            [
            'visibility' => 1,
            'user_id' => 20,
            'name' => 'Strawberry croissan',
            'description' => 'Delicious strawberry croissant',
            'cover' => 'http://www.intravelfood.com/wp-content/uploads/2021/02/Valentines-Week-Breakfast-2-Way-Strawberry-Croissants-2-scaled.jpg',
            'price' => 1.50
            ],
            [
            'visibility' => 1,
            'user_id' => 20,
            'name' => 'Peach croissan',
            'description' => 'Delicious peach croissant',
            'cover' => 'https://bitedelite.pl/wp-content/uploads/2015/02/BiteDelite-paryzanka-9506.jpg',
            'price' => 1.50
            ],    
            [
            'visibility' => 1,
            'user_id' => 20,
            'name' => 'Espresso coffee',
            'description' => 'Hot italian espresso coffee',
            'cover' => 'https://media.istockphoto.com/photos/coffee-cup-picture-id1126871442?k=20&m=1126871442&s=612x612&w=0&h=WSNR3OvXcFwiRNsL6BVgvPD4cmJzDq686vCbo_YTH5I=',
            'price' => 1.00
            ],
            [
            'visibility' => 1,
            'user_id' => 20,
            'name' => 'Cappuccino coffee',
            'description' => 'Hot italian cappuccino coffee',
            'cover' => 'https://previews.123rf.com/images/chamillewhite/chamillewhite1201/chamillewhite120100049/12120947-arte-cappuccino-caff%C3%A8-in-grani.jpg',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 20,
            'name' => 'Iced coffee',
            'description' => 'Fresh iced coffee',
            'cover' => 'https://onesweetappetite.com/wp-content/uploads/2020/08/Caramel-Iced-Coffee-5.jpg',
            'price' => 3.50
            ],
            [
            'visibility' => 1,
            'user_id' => 20,
            'name' => 'Iced coffee',
            'description' => 'Fresh iced coffee',
            'cover' => 'https://onesweetappetite.com/wp-content/uploads/2020/08/Caramel-Iced-Coffee-5.jpg',
            'price' => 3.50
            ], 
            [
            'visibility' => 1,
            'user_id' => 20,
            'name' => 'Bottle of water small',
            'description' => 'Fresh small bottle of water',
            'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR93H4EpqHcrtTL8erIjmuEJIRlWuy_aR3xgg&usqp=CAU',
            'price' => 1.00
            ],
            [
            'visibility' => 1,
            'user_id' => 20,
            'name' => 'Bottle of water big',
            'description' => 'Fresh big bottle of water',
            'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR93H4EpqHcrtTL8erIjmuEJIRlWuy_aR3xgg&usqp=CAU',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 21,
            'name' => 'Vanilla ice cream small cone',
            'description' => 'Fresh and delicious small ice cream cone',
            'cover' => 'https://images.unsplash.com/photo-1570197788417-0e82375c9371?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8dmFuaWxsYSUyMGljZSUyMGNyZWFtfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 21,
            'name' => 'Vanilla ice cream medium cone',
            'description' => 'Fresh and delicious medium ice cream cone',
            'cover' => 'https://images.unsplash.com/photo-1570197788417-0e82375c9371?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8dmFuaWxsYSUyMGljZSUyMGNyZWFtfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 21,
            'name' => 'Vanilla ice cream big cone',
            'description' => 'Fresh and delicious big ice cream cone',
            'cover' => 'https://images.unsplash.com/photo-1570197788417-0e82375c9371?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8dmFuaWxsYSUyMGljZSUyMGNyZWFtfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80',
            'price' => 4.00
            ],
            [
            'visibility' => 1,
            'user_id' => 21,
            'name' => 'Coffee ice cream small cone',
            'description' => 'Fresh and delicious small ice cream cone',
            'cover' => 'https://www.simplyrecipes.com/thmb/wjKlfxU1uYI7jQ1NCZFT-VM07FM=/735x0/__opt__aboutcom__coeus__resources__content_migration__simply_recipes__uploads__2007__04__coffee-ice-cream-vertical-00dc174a766a4ff79f443e516e11fcb7.jpg',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 21,
            'name' => 'Coffee ice cream medium cone',
            'description' => 'Fresh and delicious medium ice cream cone',
            'cover' => 'https://www.simplyrecipes.com/thmb/wjKlfxU1uYI7jQ1NCZFT-VM07FM=/735x0/__opt__aboutcom__coeus__resources__content_migration__simply_recipes__uploads__2007__04__coffee-ice-cream-vertical-00dc174a766a4ff79f443e516e11fcb7.jpg',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 21,
            'name' => 'Coffee ice cream big cone',
            'description' => 'Fresh and delicious big ice cream cone',
            'cover' => 'https://www.simplyrecipes.com/thmb/wjKlfxU1uYI7jQ1NCZFT-VM07FM=/735x0/__opt__aboutcom__coeus__resources__content_migration__simply_recipes__uploads__2007__04__coffee-ice-cream-vertical-00dc174a766a4ff79f443e516e11fcb7.jpg',
            'price' => 4.00
            ],
            [
            'visibility' => 1,
            'user_id' => 21,
            'name' => 'Strawberry ice cream small cone',
            'description' => 'Fresh and delicious small ice cream cone',
            'cover' => 'https://zestysouthindiankitchen.com/wp-content/uploads/2014/04/strawberry-ice-cream-1.jpg',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 21,
            'name' => 'Strawberry ice cream medium cone',
            'description' => 'Fresh and delicious medium ice cream cone',
            'cover' => 'https://zestysouthindiankitchen.com/wp-content/uploads/2014/04/strawberry-ice-cream-1.jpg',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 21,
            'name' => 'Strawberry ice cream big cone',
            'description' => 'Fresh and delicious big ice cream cone',
            'cover' => 'https://zestysouthindiankitchen.com/wp-content/uploads/2014/04/strawberry-ice-cream-1.jpg',
            'price' => 4.00
            ],
            [
            'visibility' => 1,
            'user_id' => 21,
            'name' => 'Stracciatella ice cream small cone',
            'description' => 'Fresh and delicious small ice cream cone',
            'cover' => 'https://t3.ftcdn.net/jpg/01/71/07/30/360_F_171073025_zWchtcfnCfay2CnnDoyDgRffk0imkwNZ.jpg',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 21,
            'name' => 'Stracciatella ice cream medium cone',
            'description' => 'Fresh and delicious medium ice cream cone',
            'cover' => 'https://t3.ftcdn.net/jpg/01/71/07/30/360_F_171073025_zWchtcfnCfay2CnnDoyDgRffk0imkwNZ.jpg',
            'price' => 3.00
            ],
            [
            'visibility' => 1,
            'user_id' => 21,
            'name' => 'Stracciatella ice cream big cone',
            'description' => 'Fresh and delicious big ice cream cone',
            'cover' => 'https://t3.ftcdn.net/jpg/01/71/07/30/360_F_171073025_zWchtcfnCfay2CnnDoyDgRffk0imkwNZ.jpg',
            'price' => 4.00
            ],
            [
            'visibility' => 1,
            'user_id' => 21,
            'name' => 'Empty croissan',
            'description' => 'Delicious empty croissant',
            'cover' => 'https://image.freepik.com/free-photo/sliced-empty-croissant-croissant-halves-with-dough-texture-hard-light-white-background_207126-7194.jpg',
            'price' => 1.50
            ],
            [
            'visibility' => 1,
            'user_id' => 21,
            'name' => 'Chocolate croissan',
            'description' => 'Delicious chocolate croissant',
            'cover' => 'https://www.thecookierookie.com/wp-content/uploads/2017/05/sheet-pan-chocolate-croissants-3-of-10-1.jpg',
            'price' => 1.50
            ],
            [
            'visibility' => 1,
            'user_id' => 21,
            'name' => 'Strawberry croissan',
            'description' => 'Delicious strawberry croissant',
            'cover' => 'http://www.intravelfood.com/wp-content/uploads/2021/02/Valentines-Week-Breakfast-2-Way-Strawberry-Croissants-2-scaled.jpg',
            'price' => 1.50
            ],
            [
            'visibility' => 1,
            'user_id' => 21,
            'name' => 'Peach croissan',
            'description' => 'Delicious peach croissant',
            'cover' => 'https://bitedelite.pl/wp-content/uploads/2015/02/BiteDelite-paryzanka-9506.jpg',
            'price' => 1.50
            ],      
            [
            'visibility' => 1,
            'user_id' => 21,
            'name' => 'Espresso coffee',
            'description' => 'Hot italian espresso coffee',
            'cover' => 'https://media.istockphoto.com/photos/coffee-cup-picture-id1126871442?k=20&m=1126871442&s=612x612&w=0&h=WSNR3OvXcFwiRNsL6BVgvPD4cmJzDq686vCbo_YTH5I=',
            'price' => 1.00
            ],
            [
            'visibility' => 1,
            'user_id' => 21,
            'name' => 'Cappuccino coffee',
            'description' => 'Hot italian cappuccino coffee',
            'cover' => 'https://previews.123rf.com/images/chamillewhite/chamillewhite1201/chamillewhite120100049/12120947-arte-cappuccino-caff%C3%A8-in-grani.jpg',
            'price' => 2.00
            ],
            [
            'visibility' => 1,
            'user_id' => 21,
            'name' => 'Iced coffee',
            'description' => 'Fresh iced coffee',
            'cover' => 'https://onesweetappetite.com/wp-content/uploads/2020/08/Caramel-Iced-Coffee-5.jpg',
            'price' => 3.50
            ],
            [
            'visibility' => 1,
            'user_id' => 21,
            'name' => 'Iced coffee',
            'description' => 'Fresh iced coffee',
            'cover' => 'https://onesweetappetite.com/wp-content/uploads/2020/08/Caramel-Iced-Coffee-5.jpg',
            'price' => 3.50
            ], 
            [
            'visibility' => 1,
            'user_id' => 21,
            'name' => 'Bottle of water small',
            'description' => 'Fresh small bottle of water',
            'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR93H4EpqHcrtTL8erIjmuEJIRlWuy_aR3xgg&usqp=CAU',
            'price' => 1.00
            ],
            [
            'visibility' => 1,
            'user_id' => 21,
            'name' => 'Bottle of water big',
            'description' => 'Fresh big bottle of water',
            'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR93H4EpqHcrtTL8erIjmuEJIRlWuy_aR3xgg&usqp=CAU',
            'price' => 2.00
            ],
        ]; 

        foreach($dishes as $dish) {
            $new_dish = new Dish;
            $new_dish->visible = $dish['visibility'];
            $new_dish->user_id = $dish['user_id'];
            $new_dish->name = $dish['name'];
            $new_dish->description = $dish['description'];
            $new_dish->cover = $dish['cover'];
            $new_dish->price = $dish['price'];
            $new_dish->save();
        }
    }
}
