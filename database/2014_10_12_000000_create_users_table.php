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
            
            $table->increments('id');
            $table->string('phone')->nullable();
            $table->string('email')->unique;
            $table->string('password');
            $table->string('firstname')->nullable();
            $table->string('middlename')->nullable();
            $table->string('lastname')->nullable();
            $table->date('dod')->nullable();
            $table->string('address')->nullable();
            $table->string('resident')->nullable();
            $table->string('residentlga')->nullable();
            $table->string('skill1')->nullable();
            $table->string('skill2')->nullable();
            $table->boolean('activated')->default(0);
            $table->string('av_rating')->nullable();
            $table->string('num_rating')->nullable();
            $table->string('image')->nullable();
            $table->string('last_location')->nullable();
            $table->string('ref_num')->nullable();
            $table->rememberToken();
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
