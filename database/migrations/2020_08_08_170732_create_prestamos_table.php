<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('archivo_id')->nullable($value = false);
            $table->integer('user_id')->nullable($value = true);
            $table->integer('area_id')->nullable($value = false);
            $table->text('observacion')->nullable($value = false);
            $table->date('fecha_salida')->nullable($value = false);
            $table->date('fecha_entrada')->nullable($value = true);
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
        Schema::dropIfExists('prestamos');
    }
}
