<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePriceOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('status');
            $table->string('note');
            $table->integer('table_number')->nullable();
            $table->integer('id_user')->unsigned()->nullable();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->integer('id_store')->unsigned();
            $table->foreign('id_store')->references('id')->on('stores')->onDelete('cascade');
            $table->integer('update_user');
            $table->integer('delete_user');
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
        Schema::dropIfExists('orders');
    }
}
