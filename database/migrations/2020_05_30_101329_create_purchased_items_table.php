<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasedItemsTable extends Migration
{

    public function up()
    {
        Schema::create('purchased_items', function (Blueprint $table) {
            $table->id();
            $table->integer('quotation_id');
            $table->integer('request_item_id')->unique();
            $table->integer('purchased_price')->nullable();
            $table->string('name')->nullable();
            $table->date('purchased_date')->nullable();
            $table->string('purchased_number')->nullable();
            $table->string('buyer')->nullable();
            $table->string('co_worker')->nullable();
            $table->date('received_date')->nullable();
            $table->string('passenger')->nullable();
            $table->date('sending_date')->nullable();
            $table->date('arrival_date')->nullable();
            $table->date('delivered_date')->nullable();
            $table->integer('status');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('purchased_items');
    }
}
