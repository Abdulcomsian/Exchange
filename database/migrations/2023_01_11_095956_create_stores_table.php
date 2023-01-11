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
            $table->string('name');
            $table->string('image')->nullable();
            $table->string('price')->nullable();
            $table->text('business_story');
            $table->text('description');
            $table->string('revenue');
            $table->string('sessions');
            $table->string('profit');
            $table->string('inventory_value');
            $table->string('other_details');
            $table->string('shopify_plan');
            $table->string('inventory_warehouse');
            $table->string('domain');
            $table->string('sales_include_1');
            $table->string('sales_include_2');
            $table->string('sales_include_3');
            $table->string('sales_include_4');
            $table->string('open_select_menu');
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
