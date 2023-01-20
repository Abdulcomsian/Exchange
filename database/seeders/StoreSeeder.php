<?php

namespace Database\Seeders;

use App\Models\Store;
use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = ['pending', 'approved', 'rejected'];
        $random_status = $status[array_rand($status)];
        //write code to seed your database with 100 records
        for ($i = 0; $i < 600; $i++) {
            $store = Store::create([
            'store_name' => 'Shop Name',
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'business_story' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vel ligula ac diam iaculis tempor vitae auctor massa. Donec turpis diam, ornare ut elit sed, blandit mollis lorem. Nam consequat a enim vel mollis. Aliquam erat volutpat. Suspendisse eu enim eget urna aliquam commodo vitae ac augue. Cras bibendum porttitor diam',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vel ligula ac diam iaculis tempor vitae auctor massa. Donec turpis diam, ornare ut elit sed, blandit mollis lorem. Nam consequat a enim vel mollis. Aliquam erat volutpat. Suspendisse eu enim eget urna aliquam commodo vitae ac augue. Cras bibendum porttitor diam',
            'price' => rand(0, 25000),
            'revenue' => rand(0, 25000),
            'session' => rand(0, 25000),
            'profit' => rand(0, 25000),
            'inventory_value' => rand(0, 25000),
            'other_detail' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vel ligula ac diam iaculis tempor vitae auctor massa. Donec turpis diam, ornare ut elit sed, blandit mollis lorem. Nam consequat a enim vel mollis. Aliquam erat volutpat. Suspendisse eu enim eget urna aliquam commodo vitae ac augue. Cras bibendum porttitor diam',
            'shopify_plan' => '$39/month',
            'inventory_warehouse' => '$65/month',
            'domain' => '$10/month',
            'sale_include_1' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'sale_include_2' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'sale_include_3' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'sale_include_4' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'category_id' => rand(1, 8),
            'user_id' => rand(1, 5),
            'status' => $random_status,
            ]);
        }

    }
}
