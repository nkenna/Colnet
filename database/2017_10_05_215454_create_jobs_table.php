<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('disc');
            $table->boolean('inprogress')->default(0);
            $table->string('doneby')->nullable();
            $table->foreign('doneby')->references('ref_num')->on('workers');
            $table->string('createdby')->nullable();
            $table->foreign('createdby')->references('ref_num')->on('creators');
            $table->date('date_created')->nullable();
            $table->date('date_finished')->nullable();
            $table->string('job_location')->nullable();
            $table->boolean('open')->default(1);
            $table->string('rating')->nullable();
            $table->string('num_rating')->nullable();
            $table->string('resident')->nullable();
            $table->string('residentlga')->nullable();
            $table->string('image')->nullable();
            $table->string('skill1')->nullable();
            $table->string('skill2')->nullable();
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
        Schema::dropIfExists('jobs');
    }
}
