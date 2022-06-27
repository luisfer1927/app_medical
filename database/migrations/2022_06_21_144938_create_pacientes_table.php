<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('documento', 50);
            $table->string('tipoDocumento', 50);
            $table->string('nombre', 50);
            $table->string('apellido', 50);
            $table->string('direccion', 70);
            $table->string('telefono', 50);
            $table->string('genero', 30);
            $table->date('fechaNacimiento');
            $table->string('estadoCivil', 30);
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
        Schema::dropIfExists('pacientes');
    }
}
