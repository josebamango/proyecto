<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApuestaRetoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apuesta_reto', function (Blueprint $table) {
            $table->foreignId("apuesta_id");
            $table->foreignId("reto_id");
            $table->primary(array("apuesta_id","reto_id"));
            $table->foreign("apuesta_id")->references("id")->on("apuestas");
            $table->foreign("reto_id")->references("id")->on("retos");
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
        Schema::dropIfExists('apuesta_reto');
    }
}
