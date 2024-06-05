<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // database/seeders/ProductSeeder.php
public function run()
{
    $dummyProducts = [
        [
            'name' => 'Nimbus 2000',
            'description' => 'Flying broom , flyies very fast',
            'price' => 3999.00,
            'image' =>'images/nimbus.webp'
        ],
        [
            'name' => 'Time Turner',
            'description' => 'The time turner can make you travel in the past and future',
            'price' => 5999.00,
            'image' => 'images/timeturner.jpg'
        ],
        [
            'name' => 'Elder Wand',
            'description' => 'This wand is the most powerful wand in the wizarding worlds, It is one of the gifts of death.',
            'price' => 9999.00,
            'image' => 'images/elderwand.webp'
        ],
        [
            'name' => 'Paras Stone',
            'description' => 'This stone can give you a life , if you hold it in your hands it will give you so many power. It is also one of the gifts of death',
            'price' => 9999.00,
            'image' => 'images/pasar.jpg'
        ],
        [
            'name' => 'Invisibility Cloak',
            'description' => 'It is also one of the gifts of death. It can make you invisible.',
            'price' => 9999.00,
            'image' => 'images/cloak.jpg'
        ],
        [
            'name' => 'Quidditch Golden Ball',
            'description' => 'This ball gives you 200 points in the quidditch match, it knows your touch.',
            'price' => 2999.00,
            'image' => 'images/goldenball.jpg'
        ],
        [
            'name' => 'Lucky Potion',
            'description' => 'If you have this potion, you will be the luckiest person for next 30 minnutes.',
            'price' => 999.00,
            'image' => 'images/luckpotion.jpg'
        ],

        // Add more products here...
    ];

    foreach ($dummyProducts as $product) {
        \App\Models\Product::create($product);
    }
}

}
