<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    
    protected $fillable=[
         'name',
         'image',
         'price',
         'business_story',
         'description',
          'revenue',
         'revenue',
         'profit',
         'inventory_value',
         'other_details',
         'shopify_plan',
         'inventory_warehouse',
         'domain',
         'sales_include_1',
         'sales_include_2',
         'sales_include_3',
         'sales_include_4',
         'open_select_menu'
    ];
}
