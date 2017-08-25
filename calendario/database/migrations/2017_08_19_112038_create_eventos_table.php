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
            //dejamos esta como primaria directamente
            $table->increments('id');
            $table->string('email_id')->nullable();
            $table->string('siglas_id')->nullable();
            $table->string('nivel_id')->nullable();
            $table->date('fecha');
            //clave alternativa
            $table->unique(['email','siglas','nivel']);
            //para por si se borra uno, se borra el dato correspondiente

            $table->foreign(['siglas_id','email_id'])->references(['siglas','email_id'])->on('asignaturas')->onDelete('cascade');
            $table->foreign('nivel_id')->references('id')->on('niveles')->onDelete('cascade');

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
