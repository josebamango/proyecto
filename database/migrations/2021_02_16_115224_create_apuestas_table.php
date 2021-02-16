<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apuestas', function (Blueprint $table) {
            $table->id();
            $table->foreignId("usuario_id");
            $table->string("nombre", 50);
            $table->double("cuota_1");
            $table->double("cuota_x")->nullable();
            $table->double("cuota_2");
            $table->string("eleccion")->nullable();
            $table->double("importe")->nullable();
            $table->dateTime("fecha");
            $table->string("deporte", 20)->nullable();
            $table->boolean("estado")->nullable();
            $table->boolean("resultado")->nullable();
            $table->timestamps();
            $table->foreign("usuario_id")->references("id")->on("users");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apuestas');
    }
}
