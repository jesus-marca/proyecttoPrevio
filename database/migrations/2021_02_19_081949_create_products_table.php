<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('prod_name');
            $table->text('prod_description');
            $table->text('prod_features');
            $table->integer('prod_view')->unsigned()->default(0);
            $table->double('prod_price',8,2)->unsigned();
            $table->double('prod_discount',6,2)->unsigned()->nullable();
            $table->integer('prod_quantity')->unsigned()->nullable();
            $table->integer('prod_sell_num')->unsigned()->default(0);
            $table->string('prod_img1');
            $table->string('prod_img2')->nullable();
            $table->string('prod_img3')->nullable();
            $table->string('prod_img4')->nullable();
            $table->string('prod_img5')->nullable();
            $table->string('prod_img6')->nullable();
            $table->string('prod_img7')->nullable();
            $table->string('prod_img8')->nullable();
            $table->string('prod_img9')->nullable();
            $table->string('prod_img10')->nullable();


            $table->unsignedBigInteger('cate_id')->nullable();
            $table->foreign('cate_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('products');
    }
}
