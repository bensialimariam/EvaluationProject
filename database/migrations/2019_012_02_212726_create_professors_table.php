<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('professors', function (Blueprint $table) {
            $table->unsignedBigInteger('id_professor');
            $table->primary('id_professor');
            $table->foreign('id_professor')->references('id')->on('users');
            $table->string('cin');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('adress');
            $table->string('email');
            $table->date('birthday');
            $table->string('gender');
            $table->string('phone');
            $table->date('entry_date');
            $table->string('speciality');
            $table->unsignedBigInteger('id_departement');
            $table->foreign('id_departement')->references('id_departement')->on('departements');
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
        Schema::dropIfExists('professors');
    }
}
