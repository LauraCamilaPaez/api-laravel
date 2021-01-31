<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('document');
            $table->string('username')->unique();
            $table->string('names');
            $table->string('email')->unique();
            $table->boolean('state');
            $table->bigInteger('role_id')->unsigned();
            $table->bigInteger('dependence_id')->unsigned();
            $table->foreign('role_id')->references('id')->on('roles');
            $table->foreign('dependence_id')->references('id')->on('dependences');
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
        Schema::dropIfExists('users');
    }
}
