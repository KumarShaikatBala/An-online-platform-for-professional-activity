<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{

    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employe_id');
            $table->integer('company_id')->unsigned();
            $table->string('tittle')->nullable();
            $table->string('short_description')->nullable();
            $table->string('url')->nullable();
            $table->string('location')->nullable();
            $table->string('type')->nullable();
            $table->string('salary')->nullable();
            $table->string('hours')->nullable();
            $table->string('experience')->nullable();
            $table->string('degree')->nullable();
            $table->string('img')->nullable();
            $table->string('description')->nullable();
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
