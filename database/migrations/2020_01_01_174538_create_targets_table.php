<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTargetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('targets', function (Blueprint $table) {
            $table->bigIncrements('id_target');
            $table->unsignedBigInteger('id_quiz');
            $table->foreign('id_quiz')->references('id_quiz')->on('quizzes');
            $table->string('type');
            $table->string('by');
            $table->unsignedBigInteger('id_by');
            $table->foreign('id_by')->references('id')->on('users');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('targets');
    }
}
