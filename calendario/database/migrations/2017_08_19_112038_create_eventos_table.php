<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->string('email');
            $table->string('siglas');
            $table->string('nivel');
            $table->date('fecha');
            $table->primary(['email','siglas','nivel']);
            $table->foreign('email')->references('email')->on('usuarios');
            $table->foreign('siglas')->references('siglas')->on('asignaturas');
            $table->foreign('nivel')->references('nivel')->on('niveles');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
    }
}
