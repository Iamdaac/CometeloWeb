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
        Schema::create('restaurantefacilidad', function (Blueprint $table) {
            $table->unsignedBigInteger('restaurante_id');
            $table->unsignedBigInteger('facilidad_id');
            $table->foreign('restaurante_id')->references('id')->on('restaurante');
            $table->foreign('facilidad_id')->references('id')->on('facilidad');
            $table->primary(['restaurante_id', 'facilidad_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurantefacilidad');
    }
};
