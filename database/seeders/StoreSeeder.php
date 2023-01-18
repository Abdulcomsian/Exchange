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

/*        //write code to seed your database with 100 records

        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '1',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '1',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '1',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '1',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '1',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '1',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '1',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '1',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '1',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '1',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '1',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '1',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '1',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '1',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '1',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '2',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '2',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '2',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '2',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '2',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '2',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '2',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '2',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '2',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '2',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '2',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '2',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '2',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '2',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '2',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '2',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '3',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '3',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '3',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '3',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '3',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '3',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '3',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '3',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '3',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '3',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '3',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '3',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '4',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '4',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '4',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '4',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '4',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '4',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '4',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '4',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '4',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '4',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '4',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '4',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '4',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '4',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '4',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '5',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '5',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '5',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '5',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '5',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '5',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '5',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '5',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '5',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '5',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '5',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '5',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '5',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '5',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '5',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '6',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '6',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '6',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '6',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '6',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '6',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '6',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '6',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '6',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '6',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '6',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '6',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '6',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '6',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '6',
        ]);
        $store = Store::create([
            'store_address' => 'https://shopify.dev/api/admin-rest/2023-01/resources/shop',
            'category_id' => '6',
        ]);
*/
    }
}
