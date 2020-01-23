<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('administrations', function (Blueprint $table) {
            $table->unsignedBigInteger('id_admin');
            $table->primary('id_admin');
            $table->foreign('id_admin')->references('id')->on('users');
            $table->string('firstname');
            $table->string('cin');
            $table->string('lastname');
            $table->string('address');
            $table->string('email');
            $table->date('birthday');
            $table->date('entry_date');
            $table->string('gender');
            $table->string('phone');
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
        Schema::dropIfExists('administrations');
    }
}
