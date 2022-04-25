<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdOrdesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prod__ordes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('prod_id');
            $table->unsignedBigInteger('order_id');
            $table->integer('prod_quantity')->unsigned();
            $table->foreign('prod_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('prod__ordes');
    }
}
