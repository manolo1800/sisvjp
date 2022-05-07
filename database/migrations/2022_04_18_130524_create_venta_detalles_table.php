<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentaDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta_detalles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_venta');
            $table->integer('id_producto');
            $table->integer('cantidad');
            $table->timestamps();

            $table->foreign('id_venta')->references('id')->on('ventas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_producto')->references('id')->on('productos')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venta_detalles');
    }
}
