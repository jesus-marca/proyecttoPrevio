<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        date_default_timezone_get();
        date_default_timezone_set('America/Lima');
        date('Y-m-d H:i:s');    
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('orde_name');
            $table->string('orde_lastname');
            $table->integer('orde_dni')->unsigned();
            $table->integer('orde_phone')->unsigned();
            $table->string('orde_email');
            $table->string('orde_deparment');
            $table->string('orde_province');
            $table->string('orde_district');
            $table->string('orde_direction');
            $table->string('orde_references');
            $table->double('orde_no_discount_no_shipping_total',8,2)->unsigned()->nullable();
            $table->double('orde_shipping',6,2)->unsigned()->nullable();
            $table->string('orde_discount')->nullable();
            $table->string('orde_discount_coupon')->nullable();
            $table->double('orde_total',8,2)->unsigned();
            $table->double('orde_subtotal',8,2)->unsigned();
            $table->enum('orde_estate',['Pendiente','En camino','Completado'])->default('Pendiente');
            $table->dateTime('orde_send_order')->nullable();
            $table->dateTime('orde_arrivel_order')->default(Carbon::now()->addDay(7));
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
