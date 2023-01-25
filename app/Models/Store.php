<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $fillable = [
        'store_name', 'store_address', 'business_story', 'description', 'image', 'price', 'revenue', 'session',
        'profit', 'inventory_value', 'other_detail', 'shopify_plan', 'inventory_warehouse', 'domain', 'sale_include_1',
        'sale_include_2', 'sale_include_3', 'sale_include_4', 'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->hasMany(Tag::class);
    }
}
