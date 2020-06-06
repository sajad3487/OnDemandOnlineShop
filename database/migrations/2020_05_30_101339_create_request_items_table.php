<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_items', function (Blueprint $table) {
            $table->id();
            $table->integer('quotation_id');
            $table->string('link');
            $table->integer('quantity');
            $table->text('description');
            $table->float('weight');
            $table->integer('currency_id');
            $table->integer('currency_price');
            $table->float('commission');
            $table->float('shipping_price');
            $table->float('item_price');
            $table->integer('customer_price');

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
        Schema::dropIfExists('request_items');
    }
}
