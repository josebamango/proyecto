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
            $table->string("nombre", 50);
            $table->double("cuota_1");
            $table->double("cuota_x")->nullable();
            $table->double("cuota_2");
            $table->double("importe")->nullable();
            $table->date("fecha");
            $table->string("tipo")->nullable();
            $table->string("deporte", 20)->nullable();
            $table->boolean("estado")->nullable();
            $table->boolean("resultado")->nullable();
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
        Schema::dropIfExists('apuestas');
    }
}
