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
            'name' => 'Browse all',
            'slug' => 'browse-all',
        ]);
        $category = Category::create([
            'name' => 'Industry',
            'slug' => 'industry',
        ]);
        $category = Category::create([
            'name' => 'Business type',
            'slug' => 'business-type',
        ]);
        $category = Category::create([
            'name' => 'Location',
            'slug' => 'location',
        ]);
        $category = Category::create([
            'name' => 'Curated',
            'slug' => 'curated',
        ]);
        $category = Category::create([
            'name' => 'Business attribute',
            'slug' => 'business-attribute',
        ]);
    }
}
