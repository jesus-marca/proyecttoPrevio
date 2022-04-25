<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('off_name');
            $table->string('off_description');
            $table->enum('off_type',['promocion','impuesto','Envio','venta']);
            $table->enum('off_target',['subtotal','total']);
            $table->double('off_value',6,2);
            $table->integer('off_order')->unsigned();
            $table->boolean('off_is_active');
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
        Schema::dropIfExists('offers');
    }
}
