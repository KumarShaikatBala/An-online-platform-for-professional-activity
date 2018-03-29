<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{

    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employe_id');
            $table->string('company_img')->nullable();
            $table->string('company_name')->nullable();
            $table->string('company_heading')->nullable();
            $table->string('company_description')->nullable();
            $table->string('location')->nullable();
            $table->string('employer_number')->nullable();
            $table->string('company_website')->nullable();
            $table->string('company_foundation')->nullable();
            $table->string('company_mobile')->nullable();
            $table->string('company_email')->nullable();
            $table->string('company_cover_img')->nullable();
            $table->string('facebook')->nullable();
            $table->string('google_plus')->nullable();
            $table->string('dribbble')->nullable();
            $table->string('pinterest')->nullable();
            $table->string('twitter')->nullable();
            $table->string('github')->nullable();
            $table->string('instagram')->nullable();
            $table->string('youtube')->nullable();
            $table->string('company_details')->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
