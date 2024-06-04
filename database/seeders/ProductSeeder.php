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
            'name' => 'Product 1',
            'description' => 'Description for Product 1',
            'price' => 19.99,
            'image' => 'https://via.placeholder.com/300'
        ],
        [
            'name' => 'Product 2',
            'description' => 'Description for Product 2',
            'price' => 29.99,
            'image' => 'https://via.placeholder.com/300'
        ],
        [
            'name' => 'Product 2',
            'description' => 'Description for Product 2',
            'price' => 29.99,
            'image' => 'https://via.placeholder.com/300'
        ],
        [
            'name' => 'Product 2',
            'description' => 'Description for Product 2',
            'price' => 29.99,
            'image' => 'https://via.placeholder.com/300'
        ],
        [
            'name' => 'Product 2',
            'description' => 'Description for Product 2',
            'price' => 29.99,
            'image' => 'https://via.placeholder.com/300'
        ],
        [
            'name' => 'Product 2',
            'description' => 'Description for Product 2',
            'price' => 29.99,
            'image' => 'https://via.placeholder.com/300'
        ],
        [
            'name' => 'Product 2',
            'description' => 'Description for Product 2',
            'price' => 29.99,
            'image' => 'https://via.placeholder.com/300'
        ],
        [
            'name' => 'Product 2',
            'description' => 'Description for Product 2',
            'price' => 29.99,
            'image' => 'https://via.placeholder.com/300'
        ],
        [
            'name' => 'Product 2',
            'description' => 'Description for Product 2',
            'price' => 29.99,
            'image' => 'https://via.placeholder.com/300'
        ],
        [
            'name' => 'Product 2',
            'description' => 'Description for Product 2',
            'price' => 29.99,
            'image' => 'https://via.placeholder.com/300'
        ],
        // Add more products here...
    ];

    foreach ($dummyProducts as $product) {
        \App\Models\Product::create($product);
    }
}

}
