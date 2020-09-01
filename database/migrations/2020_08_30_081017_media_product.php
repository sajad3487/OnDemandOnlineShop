<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MediaProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return voidcomposer dump-autoload
     */
    public function up()
    {
        Schema::create('media_product', function (Blueprint $table) {
            $table->integer('media_id')->unsigned()->index();
            $table->integer('product_id')->unsigned()->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('media_product');

    }
}
