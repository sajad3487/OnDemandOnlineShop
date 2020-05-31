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
            $table->string('name');
            $table->string('subName');
            $table->string('link');
            $table->string('spec');
            $table->text('description');
            $table->integer('price');
            $table->integer('discount');
            $table->integer('finalPrice');
            $table->string('tags');
            $table->float('score');
            $table->string('size');
            $table->integer('quantity');
            $table->integer('deliveryTime');
            $table->string('byOrder');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('products');
    }
}
