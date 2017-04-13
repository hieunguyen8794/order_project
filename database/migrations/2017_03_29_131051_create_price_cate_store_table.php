<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePriceCateStoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cate_store', function (Blueprint $table) {
            $table->integer('id_cate')->unsigned();
            $table->foreign('id_cate')->references('id')->on('cates')->onDelete('cascade');
            $table->integer('id_store')->unsigned();
            $table->foreign('id_store')->references('id')->on('stores')->onDelete('cascade');
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
        Schema::dropIfExists('cate_store');
    }
}
