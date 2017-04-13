<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_order')->unsigned();
            $table->foreign('id_order')->references('id')->on('orders')->onDelete('cascade');
            $table->integer('id_product')->unsigned();
            $table->foreign('id_product')->references('id')->on('products')->onDelete('cascade');
            $table->integer('quantity');
            $table->tinyInteger('order_type');
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
        Schema::dropIfExists('order_details');
    }
}
