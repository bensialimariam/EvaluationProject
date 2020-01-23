<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('subjects', function (Blueprint $table) {
            $table->bigIncrements('id_subject');
            $table->string('subject_name');
            $table->unsignedBigInteger('id_module');
            $table->foreign('id_module')->references('id_module')->on('modules');
            $table->unsignedBigInteger('id_teacher');
            $table->foreign('id_teacher')->references('id_professor')->on('professors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subjects');
    }
}
