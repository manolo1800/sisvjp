<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompraDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compra_detalles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_compra');
            $table->integer('id_producto');
            $table->integer('cantidad');
            $table->timestamps();

            $table->foreign('id_compra')->references('id')->on('compras')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('compra_detalles');
    }
}
