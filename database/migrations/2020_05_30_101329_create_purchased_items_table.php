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
            $table->integer('request_item_id');
            $table->integer('purchased_price');
            $table->date('purchased_date');
            $table->string('purchased_name');
            $table->string('buyer');
            $table->date('purchasing_date');
            $table->string('co_worker');
            $table->date('receiving_date');
            $table->string('passenger');
            $table->date('sending_date');
            $table->date('arrival_date');
            $table->date('customer_date');
            $table->string('pic1');
            $table->string('pic2');
            $table->integer('status');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('purchased_items');
    }
}
