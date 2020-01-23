<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('quizzes', function (Blueprint $table) {
            $table->bigIncrements('id_quiz')->unsigned();
            $table->unsignedBigInteger('id_creator');
            $table->foreign('id_creator')->references('id')->on('users');
            $table->string('title');
            $table->date('end_date');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quizzes');
    }
}
