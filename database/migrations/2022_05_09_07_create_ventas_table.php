<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->date('fechaVenta');
            $table->unsignedBigInteger('comprador_id');            
            $table->foreign('comprador_id')->references('id')->on('compradors');
            $table->unsignedBigInteger('envio_id');            
            $table->foreign('envio_id')->references('id')->on('envios');
            $table->unsignedBigInteger('valoracion_id');            
            $table->foreign('valoracion_id')->references('id')->on('valoracions');
            
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
        Schema::dropIfExists('ventas');
    }
}
