<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{

    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle');
            $table->text('description')->nullable();
            $table->string('spec')->nullable();
            $table->string('brand')->nullable();
            $table->integer('price');
            $table->integer('discount')->nullable();
            $table->integer('final_price');
            $table->integer('delivery_time');
            $table->integer('status')->default(1);
            $table->integer('stock');
            $table->string('tags')->nullable();
            $table->integer('score')->nullable();
            $table->integer('view')->nullable();

            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('products');
    }
}
