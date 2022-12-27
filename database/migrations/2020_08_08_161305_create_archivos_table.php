<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArchivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archivos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_apellido');
            $table->string('dni');
            $table->string('caja')->nullable($value = true);
            $table->string('exp')->nullable($value = true);
            $table->string('plan')->nullable($value = true);
            $table->string('qta')->nullable($value = true);
            $table->string('mz')->nullable($value = true);
            $table->string('pc')->nullable($value = true);
            $table->string('uf')->nullable($value = true);
            $table->integer('barrio_id')->nullable($value = true);
            $table->integer('localidad_id')->nullable($value = true);
            $table->integer('user_id')->nullable($value = true);
            $table->enum('archivado', ['SI', 'NO'])->default('SI');
            $table->enum('escriturado', ['SI', 'NO'])->default('NO');
            $table->enum('tipo_doc', ['E', 'A', 'N'])->default('SI');
            $table->year('year_doc')->nullable($value = true);
            $table->text('observacion')->nullable($value = true);

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
        Schema::dropIfExists('archivos');
    }
}
