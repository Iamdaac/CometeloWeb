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
        Schema::create('reservacion', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_cliente');
            $table->unsignedBigInteger('id_restaurante');
            $table->date('fecha');
            $table->time('hora', $precision = 0);
            $table->integer('cantidad');
            $table->string('comentario');
            $table->string('estado');
            $table->foreign('id_cliente')->references('id')->on('users');
            $table->foreign('id_restaurante')->references('id')->on('restaurante');
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
        Schema::dropIfExists('reservacion');
    }
};
