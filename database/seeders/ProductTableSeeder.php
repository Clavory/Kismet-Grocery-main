<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product([
            'imagePath' => '/images/Product1.png',
            'title' => 'Bacon' ,
            'description' => 'Bacon is from the loin part of the pig ',
            'price' => 400.00
        ]);

        $product->save();

        $product = new Product([
            'imagePath' => '/images/Product2.png',
            'title' => 'Red Beef Meat' ,
            'description' => 'The aromatic associated with light-roast peanut and having legume-like character.',
            'price' => 300.00
        ]);

        $product->save();

        $product = new Product([
            'imagePath' => '/images/Product3.png',
            'title' => 'Apples' ,
            'description' => 'An apple a day keeps the doctor away.',
            'price' => '30.31'
        ]);

        $product->save();

        $product = new Product([
            'imagePath' => '/images/Product4.png',
            'title' => 'Lettuce' ,
            'description' => 'It is used as a base for salads',
            'price' => 56.04
        ]);

        $product->save();

        $product = new Product([
            'imagePath' => '/images/Product5.png',
            'name' => 'Zonrox Original' ,
            'description' => 'Helps you remove germs from your home and laundry',
            'price' => 316.36
        ]);

        $product->save();

        $product = new Product([
            'imagePath' => '/images/Product6.png',
            'title' => 'Joy Dishwashing Liquid' ,
            'description' => 'Removes grease from your dishes',
            'price' => 139.80
        ]);

        $product->save();

        $product = new Product([
            'imagePath' => '/images/Product7.png',
            'title' => 'UFC Banana Catsup' ,
            'description' => 'It has a unique blend of spices and bananas',
            'price' => 50.12
        ]);

        $product->save();

        $product = new Product([
            'imagePath' => '/images/product8.png',
            'title' => 'Cheez Whiz Original' ,
            'description' => 'Tastes good with bread',
            'price' => 105.23
        ]);

        $product->save();

        $product = new Product([
            'imagePath' => '/images/Product9.png',
            'title' => 'Clear Men Deep Cleanse' ,
            'description' => 'Helps you fight dandruff',
            'price' => 217.56
        ]);

        $product->save();

        $product = new Product([
            'imagePath' => '/images/Product10.png',
            'title' => 'Safeguard Pure White' ,
            'description' => 'Protects you from germs',
            'price' => 67.00
        ]);

        $product->save();
    }
}


