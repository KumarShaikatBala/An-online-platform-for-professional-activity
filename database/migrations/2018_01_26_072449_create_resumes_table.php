<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResumesTable extends Migration
{

    public function up()
    {
        Schema::create('resumes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jobseeker_id');
            $table->string('img')->nullable();
            $table->string('name')->nullable();
            $table->string('headline')->nullable();
            $table->string('short_description')->nullable();
            $table->string('location')->nullable();
            $table->string('website')->nullable();
            $table->string('salary')->nullable();
            $table->string('age')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('tag')->nullable();
            $table->string('cover_img')->nullable();
            $table->string('facebook')->nullable();
            $table->string('google_plus')->nullable();
            $table->string('dribble')->nullable();
            $table->string('pinterest')->nullable();
            $table->string('twitter')->nullable();
            $table->string('github')->nullable();
            $table->string('instagram')->nullable();
            $table->string('youtube')->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('resumes');
    }
}
