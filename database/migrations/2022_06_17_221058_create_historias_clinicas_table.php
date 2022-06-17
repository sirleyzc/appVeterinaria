<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historias_clinicas', function (Blueprint $table) {
            $table->id();

            $table->foreignId('idAnimales')->constrained('animales');
            $table->foreignId('idVeterinarios')->constrained('veterinarios');

            $table->string('codigo',45);
            $table->date('fecha');
            $table->string('diagnostico');
            $table->string('tratamiento');
            $table->string('medicamento');
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
        Schema::dropIfExists('historias_clinicas');
    }
};
