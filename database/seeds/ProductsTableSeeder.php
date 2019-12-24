<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
        	'name' => 'Chicken Dominator',
        	'slug' => 'chicken-dominator',
        	'details' => 'Loaded with double pepper barbecue chicken, peri-peri chicken, chicken tikka & grilled chicken',
        	'price' => '10',
        	'description' => 'Loaded with double pepper barbecue chicken, peri-peri chicken, chicken tikka & grilled chicken',
        	'url'=> 'new_chicken_dominator.jpg',
        ]);

        Product::create([
        	'name' => 'Chicken Pepperoni',
        	'slug' => 'chicken-pepperoni',
        	'details' => 'A classic American taste! Relish the delectable flavor of Chicken Pepperoni, topped with extra cheese',
        	'price' => '10',
        	'description' => 'A classic American taste! Relish the delectable flavor of Chicken Pepperoni, topped with extra cheese',
        	'url'=> 'cheesepepperoni.png',
        ]);

        Product::create([
        	'name' => 'Chicken Golden Delight',
        	'slug' => 'chicken-gold-delight',
        	'details' => 'Double pepper barbecue chicken, golden corn and extra cheese, true delight',
        	'price' => '12',
        	'description' => 'Double pepper barbecue chicken, golden corn and extra cheese, true delight',
        	'url'=> 'new_chicken_golden_delight.jpg',
        ]);

        Product::create([
        	'name' => 'Chicken Fiesta',
        	'slug' => 'chicken-fiesta',
        	'details' => 'Grilled chicken rashers, peri-peri chicken, onion & capsicum, a complete fiesta',
        	'price' => '12',
        	'description' => 'Grilled chicken rashers, peri-peri chicken, onion & capsicum, a complete fiesta',
        	'url'=> 'new_peppy_paneer.jpg',
        ]);

        Product::create([
        	'name' => 'Indi Chicken Tikka',
        	'slug' => 'indi-chicken-tikka',
        	'details' => 'The wholesome flavour of tandoori masala with Chicken tikka, onion, red paprika & mint mayo',
        	'price' => '15',
        	'description' => 'The wholesome flavour of tandoori masala with Chicken tikka, onion, red paprika & mint mayo',
        	'url'=> 'IndianTandooriChickenTikka.jpg',
        ]);

        Product::create([
        	'name' => 'Veg Extravaganza',
        	'slug' => 'veg-extravaganza',
        	'details' => 'Black olives, capsicum, onion, grilled mushroom, corn, tomato, jalapeno & extra cheese',
        	'price' => '11',
        	'description' => 'Black olives, capsicum, onion, grilled mushroom, corn, tomato, jalapeno & extra cheese',
        	'url'=> 'new_veg_extravaganza.jpg',
        ]);

        Product::create([
        	'name' => 'Indi Tandoori Paneer',
        	'slug' => 'indi-tandoor-paneer',
        	'details' => 'It is hot. It is spicy. It is oh-so-Indian. Tandoori paneer with capsicum, red paprika & mint mayo',
        	'price' => '10',
        	'description' => 'It is hot. It is spicy. It is oh-so-Indian. Tandoori paneer with capsicum, red paprika & mint mayo',
        	'url'=> 'IndianTandooriPaneer.jpg',
        ]);

        Product::create([
        	'name' => 'Farmhouse',
        	'slug' => 'farmhouse',
        	'details' => 'Delightful combination of onion, capsicum, tomato & grilled mushroom',
        	'price' => '10',
        	'description' => 'Delightful combination of onion, capsicum, tomato & grilled mushroom',
        	'url'=> 'farmhouse.png',
        ]);
    }
}
