<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffCatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('off_cates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cate_id');
            $table->unsignedBigInteger('offer_id');
            $table->foreign('cate_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('offer_id')->references('id')->on('offers')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('off_cates');
    }
}