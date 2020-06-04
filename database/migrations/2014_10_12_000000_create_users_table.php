<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('prenom');
            $table->string('cin',10);
            $table->string('gsm', 15);
            $table->text('adresse');
            $table->string('ville');
            $table->boolean('salarie');
            $table->integer('encadrant_id')->nullable();          
            $table->integer('these_id')->nullable();          
            $table->integer('structure_id')->nullable();          
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->index('encadrant_id');
            $table->string('avatar',100)->default('default.png');
            $table->integer('validation')->default(0);
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
