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
            $table->text('description');
            $table->string('spec');
            $table->string('brand');
            $table->integer('price');
            $table->integer('discount');
            $table->integer('final_price');
            $table->integer('delivery_time');
            $table->integer('status');
            $table->string('category');
            $table->integer('stock');
            $table->string('tags');
            $table->integer('score');
            $table->integer('view');

            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('products');
    }
}
