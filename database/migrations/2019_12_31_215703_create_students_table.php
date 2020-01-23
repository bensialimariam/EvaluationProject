<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('students', function (Blueprint $table) {
            $table->unsignedBigInteger('id_student');
            $table->primary('id_student');
            $table->foreign('id_student')->references('id')->on('users');
            $table->string('cin');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('adress');
            $table->string('email');
            $table->date('birthday');
            $table->string('gender');
            $table->string('phone');
            $table->integer('code_apogee');
            $table->date('entry_date');
            $table->unsignedBigInteger('id_level');
            $table->foreign('id_level')->references('id_level')->on('levels');

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
        Schema::dropIfExists('students');
    }
}
