<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category([
            'imagePath' => '/images/Condiments.png',
            'category' => 'condiments'
        ]);

        $category->save();

        $category = new Category([
            'imagePath' => '/images/FrozenFood.png',
            'category' => 'frozen food'
        ]);

        $category->save();

        $category = new Category([
            'imagePath' => '/images/PersonalCare.png',
            'category' => 'personal care'
        ]);

        $category->save();

        $category = new Category([
            'imagePath' => '/images/Cleaners1.png',
            'category' => 'cleaners'
        ]);

        $category->save();

        $category = new Category([
            'imagePath' => '/images/Produce.png',
            'category' => 'produce'
        ]);

        $category->save();
    }
}
