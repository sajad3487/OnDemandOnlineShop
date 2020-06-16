<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->integer('menu-1')->default(0);
            $table->integer('menu-2')->default(0);
            $table->integer('menu-3')->default(0);
            $table->integer('menu-4')->default(0);
            $table->integer('menu-5')->default(0);
            $table->integer('menu-6')->default(0);
            $table->integer('menu-7')->default(0);
            $table->integer('menu-8')->default(0);
            $table->integer('menu-9')->default(0);
            $table->integer('menu-10')->default(0);
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
        Schema::dropIfExists('roles');
    }
}
