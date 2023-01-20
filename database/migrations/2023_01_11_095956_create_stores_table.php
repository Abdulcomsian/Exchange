<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('store_name')->nullable();
            $table->string('store_address')->nullable();
            $table->longText('business_story')->nullable();
            $table->longText('description')->nullable();
            $table->string('image')->nullable();
            $table->string('price')->nullable();
            $table->string('revenue')->nullable();
            $table->string('session')->nullable();
            $table->string('profit')->nullable();
            $table->string('inventory_value')->nullable();
            $table->longText('other_detail')->nullable();
            $table->string('shopify_plan')->nullable();
            $table->string('inventory_warehouse')->nullable();
            $table->string('domain')->nullable();
            $table->string('sale_include_1')->nullable();
            $table->string('sale_include_2')->nullable();
            $table->string('sale_include_3')->nullable();
            $table->string('sale_include_4')->nullable();
            $table->string('status')->default('pending');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stores');
    }
}
