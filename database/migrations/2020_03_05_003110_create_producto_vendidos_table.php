<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoVendidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos_vendidos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_venta");
            $table->foreign("id_venta")
                ->references("id")
                ->on("ventas")
                ->onDelete("cascade")
                ->onUpdate("cascade");
                $table->integer('cod_producto');
                $table->string('nombre_producto');
                $table->integer('cantidad_producto');
                $table->double('precio_producto');
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
        Schema::dropIfExists('productos_vendidos');
    }
}
