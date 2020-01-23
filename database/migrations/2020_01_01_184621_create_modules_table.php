<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('modules', function (Blueprint $table) {
            $table->bigIncrements('id_module');
            $table->unsignedBigInteger('id_level');
            $table->foreign('id_level')->references('id_level')->on('levels');
            $table->string('module_name');
            $table->unsignedBigInteger('id_coordinator');
            $table->foreign('id_coordinator')->references('id_professor')->on('professors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modules');
    }
}
