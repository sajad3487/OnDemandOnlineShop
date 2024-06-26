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
            $table->integer('user_id');
            $table->integer('quotation_id')->default(3);
            $table->text('link');
            $table->integer('quantity');
            $table->text('description')->nullable();
            $table->integer('weight')->nullable();
            $table->string('currency_id')->nullable();
            $table->integer('currency_price')->nullable();
            $table->integer('commission')->nullable();
            $table->integer('shipping_price')->nullable();
            $table->integer('item_price')->nullable();
            $table->integer('customer_price')->nullable();
            $table->string('rules');

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
