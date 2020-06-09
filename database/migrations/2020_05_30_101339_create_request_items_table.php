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
            $table->integer('quotation_id')->default(3);
            $table->string('link');
            $table->integer('quantity');
            $table->text('description')->nullable();
            $table->float('weight')->nullable();
            $table->integer('currency_id')->nullable();
            $table->integer('currency_price')->nullable();
            $table->float('commission')->nullable();
            $table->float('shipping_price')->nullable();
            $table->float('item_price')->nullable();
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
