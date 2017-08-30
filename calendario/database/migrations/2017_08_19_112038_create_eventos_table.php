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
        Schema::create('evento', function (Blueprint $table) {
            //dejamos esta como primaria directamente
            $table->increments('id');
            $table->string('email_id');
            $table->string('siglas_id');
            $table->string('nivel_id');
            $table->date('fecha');
            //clave alternativa
            $table->unique(['email','siglas','nivel']);
            //para por si se borra uno, se borra el dato correspondiente

            $table->foreign(['siglas_id','email_id'])->references(['siglas','email_id'])->on('asignatura')->onDelete('cascade');
            $table->foreign('nivel_id')->references('id')->on('nivel')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evento');
    }
}
