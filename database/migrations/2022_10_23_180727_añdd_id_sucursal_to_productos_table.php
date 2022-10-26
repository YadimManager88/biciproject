<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AñddIdSucursalToProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('productos', function (Blueprint $table) {
         $table->unsignedBigInteger('id_sucursals'); 
          $table->foreign('id_sucursals')
          ->references('id')
           ->on('sucursals')
           ->onDelete('cascade')
           ->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('productos', function (Blueprint $table) {
       table->dropColumn('id_sucursals');
        });
    }
}
