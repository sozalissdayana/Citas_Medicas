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
            $table->string('nombres',60);
            $table->string('apellidos',60);
            $table->string('edad',3);
            $table->foreignId('sexo_id')->constrained('sexos');
            $table->foreignId('enfermedad_id')->constrained('enfermedades');
            $table->foreignId('cita_id')->constrained('citas');
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
