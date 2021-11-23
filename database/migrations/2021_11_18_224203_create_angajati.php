<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAngajati extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('angajati', function (Blueprint $table) {
            $table->id('id_angajati');
            $table->bigInteger('id_departament');
            $table->string('nume');
            $table->string('prenume');
            $table->integer('CNP');
            $table->string('functie');
            $table->integer('salariu');
            $table->integer('zile_concediu');
            $table->foreign('id_departament')->references('id_departament')->on('departamente')->onDelete('cascade');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('angajati');
    }
}
