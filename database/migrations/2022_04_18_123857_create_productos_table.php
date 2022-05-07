<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_proveedor');
            $table->string('nombre');
            $table->string('imagen')->nullable();
            $table->integer('precio');
            $table->string('codigo')->nullable();
            $table->text('descripcion')->nullable()->default('text');
            $table->boolean('estado')->nullable()->default(false);
            $table->foreign('id_proveedor')->references('id')->on('proveedores')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('productos');
    }
}
