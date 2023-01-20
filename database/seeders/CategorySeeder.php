<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::create([
            'name' => 'Fashion and apparel',
            'slug' => 'fashion-and-apparel',
        ]);
        $category = Category::create([
            'name' => 'Gift and collectibles',
            'slug' => 'gift-and-collectibles',
        ]);
        $category = Category::create([
            'name' => 'Sports and recreation',
            'slug' => 'sports-and-recreation',
        ]);
        $category = Category::create([
            'name' => 'Toys and games',
            'slug' => 'toys-and-games',
        ]);
        $category = Category::create([
            'name' => 'Stationery and office supplies',
            'slug' => 'stationery-and-office-supplies',
        ]);
        $category = Category::create([
            'name' => 'Services and consulting',
            'slug' => 'services-and-consulting',
        ]);
        $category = Category::create([
            'name' => 'Pets and animals',
            'slug' => 'pets-and-animals',
        ]);
        $category = Category::create([
            'name' => 'Music',
            'slug' => 'music',
        ]);
        $category = Category::create([
            'name' => 'Home and furniture',
            'slug' => 'home-and-furniture',
        ]);
        $category = Category::create([
            'name' => 'Health and beauty',
            'slug' => 'health-and-beauty',
        ]);
        $category = Category::create([
            'name' => 'Food and drink',
            'slug' => 'food-and-drink',
        ]);
        $category = Category::create([
            'name' => 'Electronics and gadgets',
            'slug' => 'electronics-and-gadgets',
        ]);
    }

}
