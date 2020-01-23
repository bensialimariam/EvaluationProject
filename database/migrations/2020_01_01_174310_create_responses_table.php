<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('responses', function (Blueprint $table) {
            $table->bigIncrements('id_response');
            $table->unsignedBigInteger('id_quiz');
            $table->foreign('id_quiz')->references('id_quiz')->on('quizzes');
            $table->unsignedBigInteger('id_question');
            $table->foreign('id_question')->references('id_question')->on('questions');
            $table->Integer('answer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('responses');
    }
}
