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
        Schema::create('det_facturas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idFactura')->constrained('facturas');
            $table->foreignId('idServicio')->constrained('servicios');

            $table->integer('cantidad');
            $table->float('precio');
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
        Schema::dropIfExists('det_facturas');
    }
};
